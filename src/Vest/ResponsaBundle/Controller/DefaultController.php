<?php

namespace Vest\ResponsaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->renderTemplate('VestResponsaBundle:Default:index.html.twig', array('name' => $name));
    }
}
