<?php
/**
 * Created by PhpStorm.
 * User: CarineFixe
 * Date: 21/01/2015
 * Time: 10:44
 */

namespace ABS\ManageBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity
 * @ORM\Table(name="boitedevitesse")
 */
class BoiteDeVitesse {
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    /**
     * @ORM\Column(type="string", length=50)
     */
    private $nom;
    /**
     * @ORM\OneToMany(targetEntity="Vehicule", mappedBy="vitesse")
     */
    protected $vehicules;

    /**
     * @return mixed
     */
    public function getVehicules()
    {
        return $this->vehicules;
    }

    /**
     * @param mixed $vehicules
     */
    public function setVehicules($vehicules)
    {
        $this->vehicules = $vehicules;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

}