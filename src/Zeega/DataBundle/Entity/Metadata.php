<?php

namespace Zeega\DataBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Zeega\DataBundle\Entity\Metadata
 */
class Metadata
{
    /**
     * @var bigint $id
     */
    private $id;

    /**
     * @var string $archive
     */
    private $archive;

    /**
     * @var string $license
     */
    private $license;

    /**
     * @var string $thumbnail_url
     */
    private $thumbnail_url;

    /**
     * @var array $attributes
     */
    private $attributes;

    /**
     * @var string $location
     */
    private $location;

    /**
     * @var Zeega\DataBundle\Entity\Item
     */
    private $item;


    /**
     * Get id
     *
     * @return bigint 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set archive
     *
     * @param string $archive
     */
    public function setArchive($archive)
    {
        $this->archive = $archive;
    }

    /**
     * Get archive
     *
     * @return string 
     */
    public function getArchive()
    {
        return $this->archive;
    }

    /**
     * Set license
     *
     * @param string $license
     */
    public function setLicense($license)
    {
        $this->license = $license;
    }

    /**
     * Get license
     *
     * @return string 
     */
    public function getLicense()
    {
        return $this->license;
    }

    /**
     * Set thumbnail_url
     *
     * @param string $thumbnailUrl
     */
    public function setThumbnailUrl($thumbnailUrl)
    {
        $this->thumbnail_url = $thumbnailUrl;
    }

    /**
     * Get thumbnail_url
     *
     * @return string 
     */
    public function getThumbnailUrl()
    {
        return $this->thumbnail_url;
    }

    /**
     * Set attributes
     *
     * @param array $attributes
     */
    public function setAttributes($attributes)
    {
        $this->attributes = $attributes;
    }

    /**
     * Get attributes
     *
     * @return array 
     */
    public function getAttributes()
    {
        return $this->attributes;
    }

    /**
     * Set location
     *
     * @param string $location
     */
    public function setLocation($location)
    {
        $this->location = $location;
    }

    /**
     * Get location
     *
     * @return string 
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Set item
     *
     * @param Zeega\DataBundle\Entity\Item $item
     */
    public function setItem(\Zeega\DataBundle\Entity\Item $item)
    {
        $this->item = $item;
    }

    /**
     * Get item
     *
     * @return Zeega\DataBundle\Entity\Item 
     */
    public function getItem()
    {
        return $this->item;
    }
}