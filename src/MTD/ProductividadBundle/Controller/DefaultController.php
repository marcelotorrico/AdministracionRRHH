<?php

namespace MTD\ProductividadBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('MTDProductividadBundle:Default:index.html.twig', array('name' => $name));
    }
}
