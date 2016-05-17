<?php

namespace Gallery\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class AppController extends Controller
{
    /**
     * Render index page
     *
     * @return Response
     */
    public function indexAction()
    {
        return $this->render('GalleryAppBundle:App:index.html.twig');
    }
}
