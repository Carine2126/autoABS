<?php
/**
 * Created by PhpStorm.
 * User: CarineFixe
 * Date: 07/02/2015
 * Time: 09:37
 */

namespace ABS\ManageBundle\Entity;


use Doctrine\ORM\EntityRepository;

class ClientRepository extends EntityRepository{

    public function count(){
        $query = $this->getEntityManager()
            ->createQuery("SELECT COUNT(a) FROM ABS\Bundle\ManageBundle\Entity\Client c");

        return $query->getSingleScalarResult();
    }

    public function listClient(){
        return $this->createQueryBuilder('c')
            ->select('c');
    }

} 