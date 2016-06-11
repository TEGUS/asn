<?php

namespace ASN\CalendarBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tache
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="ASN\CalendarBundle\Entity\TacheRepository")
 */
class Tache
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle", type="string", length=255)
     */
    private $libelle;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=true)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="lieu", type="string", length=255, nullable=true)
     */
    private $lieu;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

    /**
     * @var boolean
     *
     * @ORM\Column(name="effectuee", type="boolean")
     */
    private $effectuee;
    
    
    /**
     * @ORM\ManyToOne(targetEntity="ASN\CalendarBundle\Entity\Agenda")
     * @ORM\JoinColumn(nullable=false)
     */
    private $agenda;
    
    /**
     * @ORM\ManyToOne(targetEntity="ASN\CalendarBundle\Entity\Evenement")
     * @ORM\JoinColumn(nullable=true)
     */
    private $evenement;
    
    /**
     * @ORM\ManyToOne(targetEntity="ASN\CalendarBundle\Entity\Tache")
     * @ORM\JoinColumn(nullable=true)
     */
    private $sousTache;
    
    /**
     * @ORM\OneToMany(targetEntity="ASN\CalendarBundle\Entity\Tache", mappedBy="sousTache")
     */
    private $sousTaches;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set libelle
     *
     * @param string $libelle
     * @return Tache
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;
    
        return $this;
    }

    /**
     * Get libelle
     *
     * @return string 
     */
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Tache
     */
    public function setDescription($description)
    {
        $this->description = $description;
    
        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set lieu
     *
     * @param string $lieu
     * @return Tache
     */
    public function setLieu($lieu)
    {
        $this->lieu = $lieu;
    
        return $this;
    }

    /**
     * Get lieu
     *
     * @return string 
     */
    public function getLieu()
    {
        return $this->lieu;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return Tache
     */
    public function setDate($date)
    {
        $this->date = $date;
    
        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set effectuee
     *
     * @param boolean $effectuee
     * @return Tache
     */
    public function setEffectuee($effectuee)
    {
        $this->effectuee = $effectuee;
    
        return $this;
    }

    /**
     * Get effectuee
     *
     * @return boolean 
     */
    public function getEffectuee()
    {
        return $this->effectuee;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->sousTaches = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set agenda
     *
     * @param \ASN\CalendarBundle\Entity\Agenda $agenda
     * @return Tache
     */
    public function setAgenda(\ASN\CalendarBundle\Entity\Agenda $agenda)
    {
        $this->agenda = $agenda;
    
        return $this;
    }

    /**
     * Get agenda
     *
     * @return \ASN\CalendarBundle\Entity\Agenda 
     */
    public function getAgenda()
    {
        return $this->agenda;
    }

    /**
     * Set evenement
     *
     * @param \ASN\CalendarBundle\Entity\Evenement $evenement
     * @return Tache
     */
    public function setEvenement(\ASN\CalendarBundle\Entity\Evenement $evenement)
    {
        $this->evenement = $evenement;
    
        return $this;
    }

    /**
     * Get evenement
     *
     * @return \ASN\CalendarBundle\Entity\Evenement 
     */
    public function getEvenement()
    {
        return $this->evenement;
    }

    /**
     * Set sousTache
     *
     * @param \ASN\CalendarBundle\Entity\Tache $sousTache
     * @return Tache
     */
    public function setSousTache(\ASN\CalendarBundle\Entity\Tache $sousTache = null)
    {
        $this->sousTache = $sousTache;
    
        return $this;
    }

    /**
     * Get sousTache
     *
     * @return \ASN\CalendarBundle\Entity\Tache 
     */
    public function getSousTache()
    {
        return $this->sousTache;
    }

    /**
     * Add sousTaches
     *
     * @param \ASN\CalendarBundle\Entity\Tache $sousTaches
     * @return Tache
     */
    public function addSousTach(\ASN\CalendarBundle\Entity\Tache $sousTaches)
    {
        $this->sousTaches[] = $sousTaches;
    
        return $this;
    }

    /**
     * Remove sousTaches
     *
     * @param \ASN\CalendarBundle\Entity\Tache $sousTaches
     */
    public function removeSousTach(\ASN\CalendarBundle\Entity\Tache $sousTaches)
    {
        $this->sousTaches->removeElement($sousTaches);
    }

    /**
     * Get sousTaches
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getSousTaches()
    {
        return $this->sousTaches;
    }
}
