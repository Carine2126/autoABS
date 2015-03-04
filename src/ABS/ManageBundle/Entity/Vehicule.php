<?php
/**
 * Created by PhpStorm.
 * User: CarineFixe
 * Date: 21/01/2015
 * Time: 10:27
 */

namespace ABS\ManageBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity
 * @ORM\Table(name="vehicule")
 */
class Vehicule {
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    /**
     * @ORM\Column(type="string", length=10)
     */
    private $immatriculation;
    /**
     * @ORM\Column(type="string", length=10)
     */
    private $old_immatriculation;
    /**
     * @ORM\Column(type="datetime")
     * @var \DateTime
     */
    private $dateMEC;
    /**
     * @ORM\ManyToOne(targetEntity="Modele", inversedBy="vehicules")
     * @ORM\JoinColumn(name="modele_id",referencedColumnName="id")
     */
    protected $modele;
    /**
     * @ORM\Column(type="string", length=100)
     */
    private $couleur;
    /**
     * @ORM\ManyToOne(targetEntity="Carburant", inversedBy="vehicules")
     * @ORM\JoinColumn(name="carburant_id",referencedColumnName="id")
     */
    protected $carburant;
    /**
     * @ORM\ManyToOne(targetEntity="Boitedevitesse", inversedBy="vehicules")
     * @ORM\JoinColumn(name="vitesse_id",referencedColumnName="id")
     */
    protected $vitesse;
    /**
     * @ORM\Column(type="string", length=100)
     */
    private $km;
    /**
     * @ORM\Column(type="string", length=100)
     */
    private $numSerie;
    /**
     * @ORM\Column(type="string", length=100)
     */
    private $puissance;
    /**
     * @ORM\ManyToOne(targetEntity="Originevehicule", inversedBy="vehicules")
     * @ORM\JoinColumn(name="origine_id",referencedColumnName="id")
     */
    protected $origine;
    /**
     * @ORM\ManyToOne(targetEntity="Client", inversedBy="vehicules")
     * @ORM\JoinColumn(name="client_id",referencedColumnName="id")
     */
    protected $client;
//    /**
//     * @ORM/OneToMany(targetEntity="HistoriqueVehicule", mappedBy="vehicule")
//     */
//    protected $historique;

    /**
     * @return mixed
     */
    public function getHistorique()
    {
        return $this->historique;
    }

    /**
     * @param mixed $historique
     */
    public function setHistorique($historique)
    {
        $this->historique = $historique;
    }

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
    public function getCarburant()
    {
        return $this->carburant;
    }

    /**
     * @param mixed $carburant
     */
    public function setCarburant($carburant)
    {
        $this->carburant = $carburant;
    }

    /**
     * @return mixed
     */
    public function getCouleur()
    {
        return $this->couleur;
    }

    /**
     * @param mixed $couleur
     */
    public function setCouleur($couleur)
    {
        $this->couleur = $couleur;
    }

    /**
     * @return mixed
     */
    public function getDateMEC()
    {
        return $this->dateMEC;
    }

    /**
     * @param mixed $dateMEC
     */
    public function setDateMEC($dateMEC)
    {
        $this->dateMEC = $dateMEC;
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
    public function getImmatriculation()
    {
        return $this->immatriculation;
    }

    /**
     * @param mixed $immatriculation
     */
    public function setImmatriculation($immatriculation)
    {
        $this->immatriculation = $immatriculation;
    }

    /**
     * @return mixed
     */
    public function getKm()
    {
        return $this->km;
    }

    /**
     * @param mixed $km
     */
    public function setKm($km)
    {
        $this->km = $km;
    }

    /**
     * @return mixed
     */
    public function getModele()
    {
        return $this->modele;
    }

    /**
     * @param mixed $modele
     */
    public function setModele($modele)
    {
        $this->modele = $modele;
    }

    /**
     * @return mixed
     */
    public function getNumSerie()
    {
        return $this->numSerie;
    }

    /**
     * @param mixed $numSerie
     */
    public function setNumSerie($numSerie)
    {
        $this->numSerie = $numSerie;
    }

    /**
     * @return mixed
     */
    public function getOldImmatriculation()
    {
        return $this->old_immatriculation;
    }

    /**
     * @param mixed $old_immatriculation
     */
    public function setOldImmatriculation($old_immatriculation)
    {
        $this->old_immatriculation = $old_immatriculation;
    }

    /**
     * @return mixed
     */
    public function getOrigine()
    {
        return $this->origine;
    }

    /**
     * @param mixed $origine
     */
    public function setOrigine($origine)
    {
        $this->origine = $origine;
    }

    /**
     * @return mixed
     */
    public function getPuissance()
    {
        return $this->puissance;
    }

    /**
     * @param mixed $puissance
     */
    public function setPuissance($puissance)
    {
        $this->puissance = $puissance;
    }

    /**
     * @return mixed
     */
    public function getVitesse()
    {
        return $this->vitesse;
    }

    /**
     * @param mixed $vitesse
     */
    public function setVitesse($vitesse)
    {
        $this->vitesse = $vitesse;
    }
} 