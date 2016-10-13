<?php

namespace ObselBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Obsel
 *
 * @ORM\Table(name="obsel")
 * @ORM\Entity(repositoryClass="ObselBundle\Repository\ObselRepository")
 */
class Obsel
{
    /**
     * @var int $id The Obsel id.
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var datetime $startsAt The Obsel starts at.
     *
     * @ORM\Column(name="starts_at", type="datetime")
     */
    protected $startsAt;

    /**
     * @var datetime $endsAt The Obsel ends at.
     *
     * @ORM\Column(name="ends_at", type="datetime")
     */
    protected $endsAt;

    /**
     * @var string $subject The Obsel subject.
     *
     * @ORM\Column(name="subject", type="string")
     */
    protected $subject;

    /**
     * @var text $metadata The Obsel metadata.
     *
     * @ORM\Column(name="metadata", type="text", nullable=true)
     */
    protected $metadata;

    /**
     * @var ObselCategory
     *
     * @ORM\ManyToOne(targetEntity="ObselCategory", inversedBy="obsels")
     * @ORM\JoinColumn(name="obsel_category_id", referencedColumnName="id", nullable=false, onDelete="CASCADE")
     */
    private $obselCategory;

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
     * Set startsAt
     *
     * @param \DateTime $startsAt
     *
     * @return Obsel
     */
    public function setStartsAt($startsAt)
    {
        $this->startsAt = $startsAt;

        return $this;
    }

    /**
     * Get startsAt
     *
     * @return \DateTime
     */
    public function getStartsAt()
    {
        return $this->startsAt;
    }

    /**
     * Set endsAt
     *
     * @param \DateTime $endsAt
     *
     * @return Obsel
     */
    public function setEndsAt($endsAt)
    {
        $this->endsAt = $endsAt;

        return $this;
    }

    /**
     * Get endsAt
     *
     * @return \DateTime
     */
    public function getEndsAt()
    {
        return $this->endsAt;
    }

    /**
     * Set subject
     *
     * @param string $subject
     *
     * @return Obsel
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;

        return $this;
    }

    /**
     * Get subject
     *
     * @return string
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * Set metadata
     *
     * @param string $metadata
     *
     * @return Obsel
     */
    public function setMetadata($metadata)
    {
        $this->metadata = $metadata;

        return $this;
    }

    /**
     * Get metadata
     *
     * @return string
     */
    public function getMetadata()
    {
        return $this->metadata;
    }

    /**
     * Set obselCategory
     *
     * @param \ObselBundle\Entity\ObselCategory $obselCategory
     *
     * @return Obsel
     */
    public function setObselCategory(\ObselBundle\Entity\ObselCategory $obselCategory)
    {
        $this->obselCategory = $obselCategory;

        return $this;
    }

    /**
     * Get obselCategory
     *
     * @return \ObselBundle\Entity\ObselCategory
     */
    public function getObselCategory()
    {
        return $this->obselCategory;
    }
}
