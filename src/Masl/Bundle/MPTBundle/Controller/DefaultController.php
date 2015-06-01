<?php

namespace Masl\Bundle\MPTBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('MaslMPTBundle:Default:index.html.twig', array('name' => $name));
    }
}
