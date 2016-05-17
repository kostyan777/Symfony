<?php
namespace Gallery\AppBundle\Services;

use Doctrine\ORM\EntityManager;

class GalleryService
{
    protected $em;

    protected $paginator;

    protected $maxFiles = 10;

    protected $filesOnPage = 10;

    /**
     * GalleryService constructor.
     *
     * @param EntityManager      $entityManager
     * @param                    $paginator
     * @param                    $maxFiles
     * @param                    $filesOnPage
     */
    public function __construct(EntityManager $entityManager, $paginator)
    {
        $this->em = $entityManager;
        $this->paginator = $paginator;
        $this->filesOnPage = 10;
    }

    /**
     * @return \Doctrine\ORM\EntityRepository
     */
    public function getAlbumsRepository()
    {
        return $this->em->getRepository('GalleryAppBundle:Albums');
    }

    /**
     * @return \Doctrine\ORM\EntityRepository
     */
    public function getAlbumImagesRepository()
    {
        return $this->em->getRepository('GalleryAppBundle:AlbumImages');
    }

    /**
     * Get all albums
     * @return mixed
     */
    public function getAlbums()
    {
        $repository = $this->getAlbumsRepository();
        $result = $repository->findAll();

        return $result;
    }

    /**
     * Get album images
     * @return mixed
     */
    public function getAlbumImages($albumId, $page = 1)
    {
        $repository = $this->getAlbumImagesRepository();

        $albumQuery = $repository->createQueryBuilder('i')
            ->where('i.album = :album_id')
            ->setParameter('album_id', $albumId)
            ->getQuery();

        $result = $this->paginate($albumQuery, $page);

        return $result;
    }

    /**
     * Paginate data
     * @return array
     */
    public function paginate($query, $page)
    {
        $pagination = $this->paginator->paginate(
            $query,
            $page,
            $this->filesOnPage
        );

        return [
            'items' => $pagination->getItems(),
            'paginationData' => $pagination->getPaginationData(),
        ];
    }
}