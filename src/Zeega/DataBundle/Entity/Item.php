<?php

namespace Zeega\DataBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Zeega\DataBundle\Entity\Item
 */
class Item
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var string $title
     */
    private $title;

    /**
     * @var integer $user_id
     */
    private $user_id;

    /**
     * @var string $description
     */
    private $description;

    /**
     * @var string $text
     */
    private $text;

    /**
     * @var string $uri
     */
    private $uri;

    /**
     * @var string $attribution_uri
     */
    private $attribution_uri;

    /**
     * @var \DateTime $date_created
     */
    private $date_created;

    /**
     * @var \DateTime $date_updated
     */
    private $date_updated;

    /**
     * @var string $archive
     */
    private $archive;

    /**
     * @var string $media_type
     */
    private $media_type;

    /**
     * @var string $layer_type
     */
    private $layer_type;

    /**
     * @var string $thumbnail_url
     */
    private $thumbnail_url;

    /**
     * @var integer $child_items_count
     */
    private $child_items_count;

    /**
     * @var float $media_geo_latitude
     */
    private $media_geo_latitude;

    /**
     * @var float $media_geo_longitude
     */
    private $media_geo_longitude;

    /**
     * @var string $location
     */
    private $location;

    /**
     * @var \DateTime $media_date_created
     */
    private $media_date_created;

    /**
     * @var \DateTime $media_date_created_end
     */
    private $media_date_created_end;

    /**
     * @var string $media_creator_username
     */
    private $media_creator_username;

    /**
     * @var string $media_creator_realname
     */
    private $media_creator_realname;

    /**
     * @var string $license
     */
    private $license;

    /**
     * @var array $attributes
     */
    private $attributes;

    /**
     * @var array $tags
     */
    private $tags;

    /**
     * @var string $id_at_source
     */
    private $id_at_source;

    /**
     * @var boolean $enabled
     */
    private $enabled;

    /**
     * @var boolean $published
     */
    private $published;

    /**
     * @var string $geo_latlng
     */
    private $geo_latlng;

    /**
     * @var string $ingested_by
     */
    private $ingested_by;

    /**
     * @var integer $duration
     */
    private $duration;

    /**
     * @var Zeega\DataBundle\Entity\User
     */
    private $user;

    /**
     * @var \Doctrine\Common\Collections\ArrayCollection
     */
    private $child_items;

    /**
     * @var \Doctrine\Common\Collections\ArrayCollection
     */
    private $parent_items;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->tags = new \Doctrine\Common\Collections\ArrayCollection();
        $this->child_items = new \Doctrine\Common\Collections\ArrayCollection();
        $this->parent_items = new \Doctrine\Common\Collections\ArrayCollection();
    }

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
     * Set title
     *
     * @param string $title
     * @return Item
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set user_id
     *
     * @param integer $userId
     * @return Item
     */
    public function setUserId($userId)
    {
        $this->user_id = $userId;

        return $this;
    }

    /**
     * Get user_id
     *
     * @return integer
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Item
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
     * Set text
     *
     * @param string $text
     * @return Item
     */
    public function setText($text)
    {
        $this->text = $text;

        return $this;
    }

    /**
     * Get text
     *
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Set uri
     *
     * @param string $uri
     * @return Item
     */
    public function setUri($uri)
    {
        $this->uri = $uri;

        return $this;
    }

    /**
     * Get uri
     *
     * @return string
     */
    public function getUri()
    {
        return $this->uri;
    }

    /**
     * Set attribution_uri
     *
     * @param string $attributionUri
     * @return Item
     */
    public function setAttributionUri($attributionUri)
    {
        $this->attribution_uri = $attributionUri;

        return $this;
    }

    /**
     * Get attribution_uri
     *
     * @return string
     */
    public function getAttributionUri()
    {
        return $this->attribution_uri;
    }

    /**
     * Set date_created
     *
     * @param \DateTime $dateCreated
     * @return Item
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
     * @return Item
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
     * Set archive
     *
     * @param string $archive
     * @return Item
     */
    public function setArchive($archive)
    {
        $this->archive = $archive;

        return $this;
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
     * Set media_type
     *
     * @param string $mediaType
     * @return Item
     */
    public function setMediaType($mediaType)
    {
        $this->media_type = $mediaType;

        return $this;
    }

    /**
     * Get media_type
     *
     * @return string
     */
    public function getMediaType()
    {
        return $this->media_type;
    }

    /**
     * Set layer_type
     *
     * @param string $layerType
     * @return Item
     */
    public function setLayerType($layerType)
    {
        $this->layer_type = $layerType;

        return $this;
    }

    /**
     * Get layer_type
     *
     * @return string
     */
    public function getLayerType()
    {
        return $this->layer_type;
    }

    /**
     * Set thumbnail_url
     *
     * @param string $thumbnailUrl
     * @return Item
     */
    public function setThumbnailUrl($thumbnailUrl)
    {
        $this->thumbnail_url = $thumbnailUrl;

        return $this;
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
     * Set child_items_count
     *
     * @param integer $childItemsCount
     * @return Item
     */
    public function setChildItemsCount($childItemsCount)
    {
        $this->child_items_count = $childItemsCount;

        return $this;
    }

    /**
     * Get child_items_count
     *
     * @return integer
     */
    public function getChildItemsCount()
    {
        return $this->child_items_count;
    }

    /**
     * Set media_geo_latitude
     *
     * @param float $mediaGeoLatitude
     * @return Item
     */
    public function setMediaGeoLatitude($mediaGeoLatitude)
    {
        $this->media_geo_latitude = $mediaGeoLatitude;

        return $this;
    }

    /**
     * Get media_geo_latitude
     *
     * @return float
     */
    public function getMediaGeoLatitude()
    {
        return $this->media_geo_latitude;
    }

    /**
     * Set media_geo_longitude
     *
     * @param float $mediaGeoLongitude
     * @return Item
     */
    public function setMediaGeoLongitude($mediaGeoLongitude)
    {
        $this->media_geo_longitude = $mediaGeoLongitude;

        return $this;
    }

    /**
     * Get media_geo_longitude
     *
     * @return float
     */
    public function getMediaGeoLongitude()
    {
        return $this->media_geo_longitude;
    }

    /**
     * Set location
     *
     * @param string $location
     * @return Item
     */
    public function setLocation($location)
    {
        $this->location = $location;

        return $this;
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
     * Set media_date_created
     *
     * @param \DateTime $mediaDateCreated
     * @return Item
     */
    public function setMediaDateCreated($mediaDateCreated)
    {
        $this->media_date_created = $mediaDateCreated;

        return $this;
    }

    /**
     * Get media_date_created
     *
     * @return \DateTime
     */
    public function getMediaDateCreated()
    {
        return $this->media_date_created;
    }

    /**
     * Set media_date_created_end
     *
     * @param \DateTime $mediaDateCreatedEnd
     * @return Item
     */
    public function setMediaDateCreatedEnd($mediaDateCreatedEnd)
    {
        $this->media_date_created_end = $mediaDateCreatedEnd;

        return $this;
    }

    /**
     * Get media_date_created_end
     *
     * @return \DateTime
     */
    public function getMediaDateCreatedEnd()
    {
        return $this->media_date_created_end;
    }

    /**
     * Set media_creator_username
     *
     * @param string $mediaCreatorUsername
     * @return Item
     */
    public function setMediaCreatorUsername($mediaCreatorUsername)
    {
        $this->media_creator_username = $mediaCreatorUsername;

        return $this;
    }

    /**
     * Get media_creator_username
     *
     * @return string
     */
    public function getMediaCreatorUsername()
    {
        return $this->media_creator_username;
    }

    /**
     * Set media_creator_realname
     *
     * @param string $mediaCreatorRealname
     * @return Item
     */
    public function setMediaCreatorRealname($mediaCreatorRealname)
    {
        $this->media_creator_realname = $mediaCreatorRealname;

        return $this;
    }

    /**
     * Get media_creator_realname
     *
     * @return string
     */
    public function getMediaCreatorRealname()
    {
        return $this->media_creator_realname;
    }

    /**
     * Set license
     *
     * @param string $license
     * @return Item
     */
    public function setLicense($license)
    {
        $this->license = $license;

        return $this;
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
     * Set attributes
     *
     * @param array $attributes
     * @return Item
     */
    public function setAttributes($attributes)
    {
        $this->attributes = $attributes;

        return $this;
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
     * Set tags
     *
     * @param array $tags
     * @return Item
     */
    public function setTags($tags)
    {
        $this->tags = $tags;

        return $this;
    }
	
	 /**
     * Add tags
     *
     * @param Zeega\DataBundle\Entity\ItemTags $tags
     */
    public function addItemTags(\Zeega\DataBundle\Entity\ItemTags $tags)
    {
        $this->tags[] = $tags;
    }
	
	public function addTags($tags)
	{
		foreach ($tags as $tag){
			if (!in_array($tag, $this->tags)) {
				$this->tags[] = $tag;
			}
		}
	}

    /**
     * Get tags
     *
     * @return array
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * Set id_at_source
     *
     * @param string $idAtSource
     * @return Item
     */
    public function setIdAtSource($idAtSource)
    {
        $this->id_at_source = $idAtSource;

        return $this;
    }

    /**
     * Get id_at_source
     *
     * @return string
     */
    public function getIdAtSource()
    {
        return $this->id_at_source;
    }

    /**
     * Set enabled
     *
     * @param boolean $enabled
     * @return Item
     */
    public function setEnabled($enabled)
    {
        $this->enabled = $enabled;

        return $this;
    }

    /**
     * Get enabled
     *
     * @return boolean
     */
    public function getEnabled()
    {
        return $this->enabled;
    }

    /**
     * Set published
     *
     * @param boolean $published
     * @return Item
     */
    public function setPublished($published)
    {
        $this->published = $published;

        return $this;
    }

    /**
     * Get published
     *
     * @return boolean
     */
    public function getPublished()
    {
        return $this->published;
    }

    /**
     * Set geo_latlng
     *
     * @param string $geoLatlng
     * @return Item
     */
    public function setGeoLatlng($geoLatlng)
    {
        $this->geo_latlng = $geoLatlng;

        return $this;
    }

    /**
     * Get geo_latlng
     *
     * @return string
     */
    public function getGeoLatlng()
    {
        return $this->geo_latlng;
    }

    /**
     * Set ingested_by
     *
     * @param string $ingestedBy
     * @return Item
     */
    public function setIngestedBy($ingestedBy)
    {
        $this->ingested_by = $ingestedBy;

        return $this;
    }

    /**
     * Get ingested_by
     *
     * @return string
     */
    public function getIngestedBy()
    {
        return $this->ingested_by;
    }

    /**
     * Set duration
     *
     * @param integer $duration
     * @return Item
     */
    public function setDuration($duration)
    {
        $this->duration = $duration;

        return $this;
    }

    /**
     * Get duration
     *
     * @return integer
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * Set user
     *
     * @param Zeega\DataBundle\Entity\User $user
     * @return Item
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

    /**
     * Add child_items
     *
     * @param Zeega\DataBundle\Entity\Item $childItems
     * @return Item
     */
    public function addChildItem(\Zeega\DataBundle\Entity\Item $childItems)
    {
        $this->child_items[] = $childItems;

        return $this;
    }

    /**
     * Remove child_items
     *
     * @param Zeega\DataBundle\Entity\Item $childItems
     */
    public function removeChildItem(\Zeega\DataBundle\Entity\Item $childItems)
    {
        $this->child_items->removeElement($childItems);
    }

    /**
     * Get child_items
     *
     * @return Doctrine\Common\Collections\Collection
     */
    public function getChildItems()
    {
        return $this->child_items;
    }

    /**
     * Add parent_items
     *
     * @param Zeega\DataBundle\Entity\Item $parentItems
     * @return Item
     */
    public function addParentItem(\Zeega\DataBundle\Entity\Item $parentItems)
    {
        $this->parent_items[] = $parentItems;

        return $this;
    }

    /**
     * Remove parent_items
     *
     * @param Zeega\DataBundle\Entity\Item $parentItems
     */
    public function removeParentItem(\Zeega\DataBundle\Entity\Item $parentItems)
    {
        $this->parent_items->removeElement($parentItems);
    }

    /**
     * Get parent_items
     *
     * @return Doctrine\Common\Collections\Collection
     */
    public function getParentItems()
    {
        return $this->parent_items;
    }
    /**
     * @ORM\PrePersist
     */
    public function onPrePersist()
    {
        $this->setDateUpdated(new \DateTime("now"));
    }

    /**
     * @ORM\PreUpdate
     */
    public function onPreUpdate()
    {
        $this->setDateUpdated(new \DateTime("now"));
    }
}
