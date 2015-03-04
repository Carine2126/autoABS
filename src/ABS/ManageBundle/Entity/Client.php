<?php
/**
 * Created by PhpStorm.
 * User: CarineFixe
 * Date: 19/01/2015
 * Time: 21:37
 */

namespace ABS\ManageBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity
 * @ORM\Table(name="client")
 */
class Client {
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
     * @ORM\Column(type="string", length=100)
     */
    private $prenom;
    /**
     * @ORM\Column(type="text")
     */
    private $adresse1;
    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $adresse2;
    /**
     * @ORM\Column(type="string", length=5, nullable=true))
     */
    private $cp1;
    /**
     * @ORM\Column(type="string", length=5, nullable=true))
     */
    private $cp2;
    /**
     * @ORM\Column(type="string", length=100, nullable=true))
     */
    private $ville1;
    /**
     * @ORM\Column(type="string", length=100, nullable=true))
     */
    private $ville2;
    /**
     * @ORM\Column(type="string", length=10, nullable=true))
     */
    private $tel1;
    /**
     * @ORM\Column(type="string", length=10, nullable=true))
     */
    private $tel2;
    /**
     * @ORM\Column(type="datetime", nullable=true))
     * @var \DateTime
     */
    private $dateDeNaissance;
    /**
     * @ORM\Column(type="text", nullable=true))
     */
    private $commentaire;
    /**
     * @ORM\Column(type="datetime", nullable=true))
     * @var \DateTime
     */
    private $dateDernierAchat;
    /**
     * @ORM\Column(type="datetime", nullable=true))
     * @var \DateTime
     */
    private $datePremierAchat;

//    /**
//     * @ORM\OneToMany(targetEntity="HistoriqueVehicule", inversedBy="client")
//     * @ORM\JoinColumn(name="historique_id", referencedColumnName="id")
//     */
//    protected $historique;
    /**
     * @ORM\OneToMany(targetEntity="Client", mappedBy="client")
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
    public function getAdresse1()
    {
        return $this->adresse1;
    }

    /**
     * @param mixed $adresse1
     */
    public function setAdresse1($adresse1)
    {
        $this->adresse1 = $adresse1;
    }

    /**
     * @return mixed
     */
    public function getAdresse2()
    {
        return $this->adresse2;
    }

    /**
     * @param mixed $adresse2
     */
    public function setAdresse2($adresse2)
    {
        $this->adresse2 = $adresse2;
    }

    /**
     * @return mixed
     */
    public function getCommentaire()
    {
        return $this->commentaire;
    }

    /**
     * @param mixed $commentaire
     */
    public function setCommentaire($commentaire)
    {
        $this->commentaire = $commentaire;
    }

    /**
     * @return mixed
     */
    public function getCp1()
    {
        return $this->cp1;
    }

    /**
     * @param mixed $cp1
     */
    public function setCp1($cp1)
    {
        $this->cp1 = $cp1;
    }

    /**
     * @return mixed
     */
    public function getCp2()
    {
        return $this->cp2;
    }

    /**
     * @param mixed $cp2
     */
    public function setCp2($cp2)
    {
        $this->cp2 = $cp2;
    }

    /**
     * @return mixed
     */
    public function getDateDeNaissance()
    {
        return $this->dateDeNaissance;
    }

    /**
     * @param mixed $dateDeNaissance
     */
    public function setDateDeNaissance($dateDeNaissance)
    {
        $this->dateDeNaissance = $dateDeNaissance;
    }

    /**
     * @return mixed
     */
    public function getDateDernierAchat()
    {
        return $this->dateDernierAchat;
    }

    /**
     * @param mixed $dateDernierAchat
     */
    public function setDateDernierAchat($dateDernierAchat)
    {
        $this->dateDernierAchat = $dateDernierAchat;
    }

    /**
     * @return mixed
     */
    public function getDatePremierAchat()
    {
        return $this->datePremierAchat;
    }

    /**
     * @param mixed $datePremierAchat
     */
    public function setDatePremierAchat($datePremierAchat)
    {
        $this->datePremierAchat = $datePremierAchat;
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

    /**
     * @return mixed
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * @param mixed $prenom
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    /**
     * @return mixed
     */
    public function getTel1()
    {
        return $this->tel1;
    }

    /**
     * @param mixed $tel1
     */
    public function setTel1($tel1)
    {
        $this->tel1 = $tel1;
    }

    /**
     * @return mixed
     */
    public function getTel2()
    {
        return $this->tel2;
    }

    /**
     * @param mixed $tel2
     */
    public function setTel2($tel2)
    {
        $this->tel2 = $tel2;
    }

    /**
     * @return mixed
     */
    public function getVille1()
    {
        return $this->ville1;
    }

    /**
     * @param mixed $ville1
     */
    public function setVille1($ville1)
    {
        $this->ville1 = $ville1;
    }

    /**
     * @return mixed
     */
    public function getVille2()
    {
        return $this->ville2;
    }

    /**
     * @param mixed $ville2
     */
    public function setVille2($ville2)
    {
        $this->ville2 = $ville2;
    }

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

} 