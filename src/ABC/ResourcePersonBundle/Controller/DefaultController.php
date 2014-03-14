<?php

namespace ABC\ResourcePersonBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('ABCResourcePersonBundle:Default:index.html.twig', array('name' => $name));
    }
}
