<?php

namespace ASN\CalendarBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Evenement
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="ASN\CalendarBundle\Entity\EvenementRepository")
 */
class Evenement
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
     * @ORM\ManyToOne(targetEntity="ASN\CalendarBundle\Entity\Agenda")
     * @ORM\JoinColumn(nullable=false)
     */
    private $agenda;
    
    /**
     * @ORM\OneToMany(targetEntity="ASN\CalendarBundle\Entity\Tache", mappedBy="evenement")
     */
    private $taches;


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
     * @return Evenement
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
     * @return Evenement
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
     * @return Evenement
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
     * @return Evenement
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
     * Constructor
     */
    public function __construct()
    {
        $this->taches = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set agenda
     *
     * @param \ASN\CalendarBundle\Entity\Agenda $agenda
     * @return Evenement
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
     * Add taches
     *
     * @param \ASN\CalendarBundle\Entity\Tache $taches
     * @return Evenement
     */
    public function addTach(\ASN\CalendarBundle\Entity\Tache $taches)
    {
        $this->taches[] = $taches;
    
        return $this;
    }

    /**
     * Remove taches
     *
     * @param \ASN\CalendarBundle\Entity\Tache $taches
     */
    public function removeTach(\ASN\CalendarBundle\Entity\Tache $taches)
    {
        $this->taches->removeElement($taches);
    }

    /**
     * Get taches
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTaches()
    {
        return $this->taches;
    }
}
