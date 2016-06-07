<?php

namespace ASN\CalendarBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use ADesigns\CalendarBundle\Entity\EventEntity;

/**
 * Description of Event
 *
 * @author Aurélien KOUAM
 */

/**
 * @ORM\Entity
 * @ORM\Table(name="Event")
 */
class Event extends EventEntity {

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * Get id
     *
     * @return integer $id
     */
    public function getId() {
        return $this->id;
    }

}
