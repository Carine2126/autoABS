<?php
/**
 * Created by PhpStorm.
 * User: CarineFixe
 * Date: 04/02/2015
 * Time: 17:08
 */

namespace ABS\ManageBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class ClientType extends AbstractType{

    public function buildForm(FormBuilderInterface $builder, array $options){
        $builder->add('nom', 'text')
                ->add('prenom', 'text')
                ->add('adresse1', 'text', array('required' => false))
                ->add('adresse2', 'text', array('required' => false))
                ->add('cp1', 'text', array('required' => false))
                ->add('cp2', 'text', array('required' => false))
                ->add('ville1', 'text', array('required' => false))
                ->add('ville2', 'text', array('required' => false))
                ->add('tel1', 'text', array('required' => false))
                ->add('tel2', 'text', array('required' => false))
                ->add('dateDeNaissance', 'text', array('required' => false))
                ->add('commentaire', 'textarea', array('required' => false))
                ->add('save', 'submit');
    }

    public function getName(){
        return 'client_type';
    }

}