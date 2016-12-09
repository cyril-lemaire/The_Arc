<?php

namespace ArcBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Client
 */
class Client
{
    /**
     * @var int
     */
    private $id;


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
     * @var \Doctrine\Common\Collections\Collection
     */
    private $contentsLiked;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->contentsLiked = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add contentsLiked
     *
     * @param \ArcBundle\Entity\Content $contentsLiked
     * @return Client
     */
    public function addContentsLiked(\ArcBundle\Entity\Content $contentsLiked)
    {
        $this->contentsLiked[] = $contentsLiked;

        return $this;
    }

    /**
     * Remove contentsLiked
     *
     * @param \ArcBundle\Entity\Content $contentsLiked
     */
    public function removeContentsLiked(\ArcBundle\Entity\Content $contentsLiked)
    {
        $this->contentsLiked->removeElement($contentsLiked);
    }

    /**
     * Get contentsLiked
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getContentsLiked()
    {
        return $this->contentsLiked;
    }
}
