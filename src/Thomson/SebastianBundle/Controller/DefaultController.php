<?php

namespace Thomson\SebastianBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('ThomsonSebastianBundle:Default:index.html.twig', array('name' => $name));
    }
}
