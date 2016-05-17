<?php
namespace Tests\AppBundle\Service;

use Gallery\AppBundle\Services\GalleryService;
use Gallery\AppBundle\Repository\AlbumsRepository;
use Doctrine\ORM\EntityManager;

class GalleryServiceTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @return \PHPUnit_Framework_MockObject_MockObject
     */
    public function getAlbumsRepositoryMock()
    {
        return $this
            ->getMockBuilder(AlbumsRepository::class)
            ->disableOriginalConstructor()
            ->getMock();
    }

    /**
     * @param $albumRepository
     *
     * @return \PHPUnit_Framework_MockObject_MockObject
     */
    public function getEntityManagerMock($albumRepository)
    {
        $entityManager = $this
            ->getMockBuilder(EntityManager::class)
            ->disableOriginalConstructor()
            ->getMock();
        $entityManager->expects($this->once())
            ->method('getRepository')
            ->will($this->returnValue($albumRepository));

        return $entityManager;
    }

    /**
     * @return \PHPUnit_Framework_MockObject_MockObject
     */
    public function getPaginatorMock()
    {
        return $this
            ->getMockBuilder('stdClass')
            ->setMethods(array('paginate'))
            ->getMock();
    }

    /**
     * @dataProvider provider
     */
    public function testGetAlbums($maxFiles, $maxItemsOnPage)
    {
        $albumRepository = $this->getAlbumsRepositoryMock();
        $albumRepository->expects($this->once())
            ->method('findAll');

        $entityManager = $this->getEntityManagerMock($albumRepository);

        $paginator = $this->getPaginatorMock();

        $galleryService = new GalleryService($entityManager, $paginator, $maxFiles, $maxItemsOnPage);

        $galleryService->getAlbums();
    }

    /**
     * @dataProvider albumProvider
     */
    public function testGetAlbum($maxFiles, $maxItemsOnPage, $albumID, $page){}

    /**
     * @return array
     */
    public function provider()
    {
        return array(
            array(0, 0),
            array(10, 10)
        );
    }

    /**
     * @return array
     */
    public function albumProvider()
    {
        return array(
            array(0, 0, 0, 0),
            array(10, 10, 10, 10)
        );
    }
}