<?php

namespace Gallery\AppBundle\Controller;

use FOS\RestBundle\Controller\FOSRestController;
use Symfony\Component\HttpFoundation\Request;

class ApiController extends FOSRestController
{
    /**
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function getAlbumsAction()
    {
        $albums = $this->getGalleryManager()->getAlbums();

        $view = $this->view($albums, 200);

        return $this->handleView($view);
    }

    /**
     * @param Request $request
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function getImagesAction(Request $request)
    {
        $page = $request->query->get('page');
        $albumId = $request->query->get('albumId');

        $album = $this->getGalleryManager()->getAlbumImages($albumId, $page);
        $view = $this->view($album, 200);

        return $this->handleView($view);
    }

    /**
     * Get service
     * @return object
     */
    public function getGalleryManager()
    {
        return $this->get('app.gallery');
    }
}
