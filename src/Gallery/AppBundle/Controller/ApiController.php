<?php

namespace Gallery\AppBundle\Controller;

use FOS\RestBundle\Controller\FOSRestController;
use Symfony\Component\HttpFoundation\Request;

class ApiController extends FOSRestController
{
    public function getAlbumsAction()
    {
        $albums = $this->getGalleryManager()->getAlbums();

        $view = $this->view($albums, 200);

        return $this->handleView($view);
    }

    public function getImagesAction(Request $request)
    {
        $page = $request->query->get('page');
        $albumId = $request->query->get('albumId');

        $album = $this->getGalleryManager()->getAlbumImages($albumId, $page);
        $view = $this->view($album, 200);

        return $this->handleView($view);
    }
    public function getGalleryManager()
    {
        return $this->get('app.gallery');
    }
}
