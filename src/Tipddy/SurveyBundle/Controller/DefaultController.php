<?php

namespace Tipddy\SurveyBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
/**
 * Testeando
 */
class DefaultController extends Controller
{
    public function indexAction() {
    	$name = "lalalal";
        return $this->render('TipddySurveyBundle:Default:index.html.twig', array('name' => $name));
    }
}
