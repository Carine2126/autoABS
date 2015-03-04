<?php
/**
 * Created by PhpStorm.
 * User: CarineFixe
 * Date: 21/01/2015
 * Time: 10:31
 */

namespace ABS\ManageBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity
 * @ORM\Table(name="marque")
 */
class Marque {
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
     * @ORM\OneToMany(targetEntity="Modele", mappedBy="marque")
     * @var modeles[]
     */
    protected $modeles;

    /**
     * @return mixed
     */
    public function getModeles()
    {
        return $this->modeles;
    }

    /**
     * @param mixed $modeles
     */
    public function setModeles($modeles)
    {
        $this->modeles = $modeles;
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