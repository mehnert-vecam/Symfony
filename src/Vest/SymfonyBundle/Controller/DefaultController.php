<?php

namespace Vest\SymfonyBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('VestSymfonyBundle:Default:index.html.twig', array('name' => $name));
    }
}
