<?php

namespace TessiLabs\ObselBundle\Model;

use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * ObselCategory object
 */
class ObselCategory
{
    /**
     * @var int $id The ObselCategory id
     */
    protected $id;

    /**
     * @var string The ObselCategory name.
     */
    protected $name;

    /**
     * @var Collection
     */
    protected $obsels;

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->obsels = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return ObselCategory
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Add obsel
     *
     * @param \ObselBundle\Model\Obsel $obsel
     *
     * @return ObselCategory
     */
    public function addObsel(\ObselBundle\Model\Obsel $obsel)
    {
        $this->obsels[] = $obsel;

        return $this;
    }

    /**
     * Remove obsel
     *
     * @param \ObselBundle\Model\Obsel $obsel
     */
    public function removeObsel(\ObselBundle\Model\Obsel $obsel)
    {
        $this->obsels->removeElement($obsel);
    }

    /**
     * Get obsels
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getObsels()
    {
        return $this->obsels;
    }
}
