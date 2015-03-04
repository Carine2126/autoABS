<?php
/**
 * Created by PhpStorm.
 * User: CarineFixe
 * Date: 04/02/2015
 * Time: 16:10
 */

namespace ABS\ManageBundle\Controller;
use ABS\ManageBundle\Entity\Client;
use ABS\ManageBundle\Form\Type\ClientType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ClientController extends Controller{

    //Ajouter client
    public function addClientAction(Request $request){
        $client = new Client();

        $form = $this->createForm(new ClientType(), $client);

        $form->handleRequest($request);

        if($form->isValid()){
            $clientRepository = $this->getDoctrine()->getRepository("ABS\ManageBundle\Entity\Client");

            $em = $this->getDoctrine()->getManager();
            $em->persist($client);
            $em->flush();
            return $this->redirect($this->generateUrl('abs_manage_home'));
        }

        return $this->render('ABSManageBundle:Client:addClient.html.twig', array('form' => $form->createView()));
    }

    //Modifier client
    public function updateClientAction(){

    }


    //Supprimer client
    public function deleteClientAction(){

    }


    //Lister client
    public function listClientAction(){
        return $this->render('ABSManageBundle:Client:listClient.html.twig', array('listeClient' => $this->getDoctrine()
            ->getRepository('ABS\ManageBundle\Entity\Client')
            ->findAll()));
    }


    //Afficher fiche client
    public function showClientAction(){

    }


    //Rechercher client
    public function searchClientAction(){

    }

} 