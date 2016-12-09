<?php

namespace ArcBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ArcBundle:Default:index.html.twig');
    }
}
