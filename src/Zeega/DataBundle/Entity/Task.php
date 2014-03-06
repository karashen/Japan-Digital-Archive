<?php

namespace Zeega\DataBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Zeega\DataBundle\Entity\Task
 */
class Task
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var string $status
     */
    private $status;

    /**
     * @var string $status_message
     */
    private $status_message;

    /**
     * @var \DateTime $date_created
     */
    private $date_created;

    /**
     * @var \DateTime $date_updated
     */
    private $date_updated;

    /**
     * @var Zeega\DataBundle\Entity\User
     */
    private $user;


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
     * Set status
     *
     * @param string $status
     * @return Task
     */
    public function setStatus($status)
    {
        $this->status = $status;
    
        return $this;
    }

    /**
     * Get status
     *
     * @return string 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set status_message
     *
     * @param string $statusMessage
     * @return Task
     */
    public function setStatusMessage($statusMessage)
    {
        $this->status_message = $statusMessage;
    
        return $this;
    }

    /**
     * Get status_message
     *
     * @return string 
     */
    public function getStatusMessage()
    {
        return $this->status_message;
    }

    /**
     * Set date_created
     *
     * @param \DateTime $dateCreated
     * @return Task
     */
    public function setDateCreated($dateCreated)
    {
        $this->date_created = $dateCreated;
    
        return $this;
    }

    /**
     * Get date_created
     *
     * @return \DateTime 
     */
    public function getDateCreated()
    {
        return $this->date_created;
    }

    /**
     * Set date_updated
     *
     * @param \DateTime $dateUpdated
     * @return Task
     */
    public function setDateUpdated($dateUpdated)
    {
        $this->date_updated = $dateUpdated;
    
        return $this;
    }

    /**
     * Get date_updated
     *
     * @return \DateTime 
     */
    public function getDateUpdated()
    {
        return $this->date_updated;
    }

    /**
     * Set user
     *
     * @param Zeega\DataBundle\Entity\User $user
     * @return Task
     */
    public function setUser(\Zeega\DataBundle\Entity\User $user = null)
    {
        $this->user = $user;
    
        return $this;
    }

    /**
     * Get user
     *
     * @return Zeega\DataBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }
}
