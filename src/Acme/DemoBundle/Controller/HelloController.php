<?php

namespace Acme\DemoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class HelloController extends Controller
{
    public function sayAction()
    {
        return new Response('Yoyoyoyoyoyooy');
    }
    
    public function sumAction($A, $B)
    {
        return new Response($A+$B);
    }
}
