<?php
namespace AppBundle\Tests\Controller;

use Liip\FunctionalTestBundle\Test\WebTestCase as WebTestCase;
use Gallery\AppBundle\DataFixtures\ORM\LoadDefaultAlbums;

class ControllerTest extends WebTestCase
{
    public function customSetUp($fixtures)
    {
        $this->client = static::createClient();
        $this->loadFixtures($fixtures);
    }

    public function testJsonGetAlbumsAction()
    {
        $fixtures = array('Gallery\AppBundle\DataFixtures\ORM\LoadDefaultAlbums',
            'Gallery\AppBundle\DataFixtures\ORM\LoadDefaultAlbumImages');
        $this->customSetUp($fixtures);

        $route = $this->getUrl('get_albums', array('_format' => 'json'));
        $this->client->request('GET', $route, array('ACCEPT' => 'application/json'));
        $response = $this->client->getResponse();

        $this->assertJsonResponse($response, 200);

        $content = $response->getContent();
        $decoded = json_decode($content, true);

        $this->assertInternalType('array', $decoded);

        $this->assertEquals(5, count($decoded));
        $first = $decoded[0];
        $this->assertTrue(isset($first['id']));
    }

    public function testJsonGetAlbumAction()
    {
        $fixtures = array('Gallery\AppBundle\DataFixtures\ORM\LoadDefaultAlbums',
            'Gallery\AppBundle\DataFixtures\ORM\LoadDefaultAlbumImages');
        $this->customSetUp($fixtures);

        $albums = LoadDefaultAlbums::$albums;
        $album = array_pop($albums);
        $route = $this->getUrl('get_images', array('albumId' => $album->getId(), '_format' => 'json'));
        $this->client->request('GET', $route, array('ACCEPT' => 'application/json'));
        $response = $this->client->getResponse();

        $this->assertJsonResponse($response, 200);

        $content = $response->getContent();
        $decoded = json_decode($content, true);

        $this->assertInternalType('array', $decoded);
        $this->assertArrayHasKey('items', $decoded);
        $this->assertArrayHasKey('total_count', $decoded);
        $items = $decoded['items'];
        $this->assertLessThanOrEqual(count($items), $decoded['num_items_per_page']);
    }

    protected function assertJsonResponse($response, $statusCode = 200, $checkValidJson = true, $contentType = 'application/json')
    {
        $this->assertEquals(
            $statusCode, $response->getStatusCode(),
            $response->getContent()
        );
        $this->assertTrue(
            $response->headers->contains('Content-Type', $contentType),
            $response->headers
        );
        if ($checkValidJson) {
            $decode = json_decode($response->getContent());
            $this->assertTrue(($decode != null && $decode != false),
                'is response valid json: ['.$response->getContent().']'
            );
        }
    }
}
