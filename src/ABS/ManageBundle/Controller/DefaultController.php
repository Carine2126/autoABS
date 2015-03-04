<?php

namespace ABS\ManageBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('ABSManageBundle:Default:index.html.twig', array('name' => $name));
    }
}
