<?php

namespace ObselBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ObselCategory
 *
 * @ORM\Table(name="obsel_category")
 * @ORM\Entity(repositoryClass="ObselBundle\Repository\ObselCategoryRepository")
 */
class ObselCategory
{
    /**
     * @var int $id The ObselCategory id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string The ObselCategory name.
     *
     * @ORM\Column(name="name", type="string")
     */
    protected $name;

    /**
     * @var array<Obsel> The Obsel list.
     *
     * @ORM\OneToMany(targetEntity="Obsel", mappedBy="obselCategory", cascade={"remove"})
     */
    private $obsels;

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
     * @param \ObselBundle\Entity\Obsel $obsel
     *
     * @return ObselCategory
     */
    public function addObsel(\ObselBundle\Entity\Obsel $obsel)
    {
        $this->obsels[] = $obsel;

        return $this;
    }

    /**
     * Remove obsel
     *
     * @param \ObselBundle\Entity\Obsel $obsel
     */
    public function removeObsel(\ObselBundle\Entity\Obsel $obsel)
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
