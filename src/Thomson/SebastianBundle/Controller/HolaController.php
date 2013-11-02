<?php

namespace Thomson\SebastianBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HolaController extends Controller {
    public function mundoAction() {
    	$strNombre = 'Sebastian Thomson';
        return $this->render('ThomsonSebastianBundle:Hola:mundo.html.twig', array('strNombre' => $strNombre));
    }
}
