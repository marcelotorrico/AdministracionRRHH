<?php

namespace MTD\ContratacionEmpleadosBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('MTDContratacionEmpleadosBundle:Default:index.html.twig', array('name' => $name));
    }
}
