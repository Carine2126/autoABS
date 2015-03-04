<?php
/**
 * Created by PhpStorm.
 * User: CarineFixe
 * Date: 19/01/2015
 * Time: 21:37
 */

namespace ABS\ManageBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
class ManageController extends Controller {

    public function homeAction(){



        return $this->render('ABSManageBundle:Manage:home.html.twig');
    }
} 