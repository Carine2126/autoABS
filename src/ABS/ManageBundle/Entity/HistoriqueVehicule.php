<?php
/**
 * Created by PhpStorm.
 * User: CarineFixe
 * Date: 21/01/2015
 * Time: 10:37
 */

namespace ABS\ManageBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
///**
// * @ORM\Entity
// * @ORM\Table(name="historiquevehicule")
// */
class HistoriqueVehicule {
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    /**
     * @ORM\OneToMany(targetEntity="Client", inversedBy="historique")
     * @ORM\JoinColumn(name="client_id", referencedColumnName="id")
     */
    private $client;
    /**
     * @ORM\OneToMany(targetEntity="Vehicule", inversedBy="historique")
     * @ORM\JoinColumn(name="vehicule_id", referencedColumnName="id")
     */
    protected $vehicule;
    /**
     * @ORM\Column(type="datetime")
     * @var \DateTime
     */
    private $dateAcquisition;

    /**
     * @return mixed
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * @param mixed $client
     */
    public function setClient($client)
    {
        $this->client = $client;
    }

    /**
     * @return mixed
     */
    public function getDateAcquisition()
    {
        return $this->dateAcquisition;
    }

    /**
     * @param mixed $dateAcquisition
     */
    public function setDateAcquisition($dateAcquisition)
    {
        $this->dateAcquisition = $dateAcquisition;
    }

    /**
     * @return mixed
     */
    public function getDateFinAcquisition()
    {
        return $this->dateFinAcquisition;
    }

    /**
     * @param mixed $dateFinAcquisition
     */
    public function setDateFinAcquisition($dateFinAcquisition)
    {
        $this->dateFinAcquisition = $dateFinAcquisition;
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
    public function getVehicule()
    {
        return $this->vehicule;
    }

    /**
     * @param mixed $vehicule
     */
    public function setVehicule($vehicule)
    {
        $this->vehicule = $vehicule;
    }
    /**
     * @ORM\Column(type="datetime")
     */
    private $dateFinAcquisition;

} 