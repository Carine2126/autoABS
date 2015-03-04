<?php
/**
 * Created by PhpStorm.
 * User: CarineFixe
 * Date: 21/01/2015
 * Time: 10:30
 */

namespace ABS\ManageBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity
 * @ORM\Table(name="modele")
 */
class Modele {
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    /**
     * @ORM\Column(type="string", length=100)
     */
    private $nom;

    /**
     * @ORM\ManyToOne(targetEntity="Marque", inversedBy="modeles")
     * @ORM\JoinColumn(name="marque_id", referencedColumnName="id")
     */
    protected $marque;

    /**
     * @ORM\OneToMany(targetEntity="Vehicule", mappedBy="vehicules")
     * @var vehicules[]
     */
    protected $vehicules;

    /**
     * @return vehicules[]
     */
    public function getVehicules()
    {
        return $this->vehicules;
    }

    /**
     * @param vehicules[] $vehicules
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
    public function getMarque()
    {
        return $this->marque;
    }

    /**
     * @param mixed $marque
     */
    public function setMarque($marque)
    {
        $this->marque = $marque;
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