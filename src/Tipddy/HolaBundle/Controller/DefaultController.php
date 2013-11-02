<?php

namespace Tipddy\HolaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('TipddyHolaBundle:Default:index.html.twig', array('name' => $name));
    }
}
