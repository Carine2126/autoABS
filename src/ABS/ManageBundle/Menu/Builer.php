<?php
/**
 * Created by PhpStorm.
 * User: CarineFixe
 * Date: 14/02/2015
 * Time: 18:09
 */

namespace ManageBundle\Menu;

use Knp\Menu\FactoryInterface;
use Symfony\Component\DependencyInjection\ContainerAware;

class Builder {


    public function mainMenu(FactoryInterface $factory, array $options)
    {
        $menu = $factory->createItem('root');

        $menu->addChild('Home', array('route' => 'homepage'));

        // access services from the container!
        //$em = $this->container->get('doctrine')->getManager();
        // findMostRecent and Blog are just imaginary examples
        //$blog = $em->getRepository('AppBundle:Blog')->findMostRecent();

        //$menu->addChild('Latest Blog Post', array(
//            'route' => 'blog_show',
//            'routeParameters' => array('id' => $blog->getId())
//        ));
//
//        // you can also add sub level's to your menu's as follows
//        $menu['About Me']->addChild('Edit profile', array('route' => 'edit_profile'));

        // ... add more children

        return $menu;
    }
} 