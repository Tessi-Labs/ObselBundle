<?php

namespace TessiLabs\ObselBundle\Model;

use Doctrine\Common\Collections\Collection;

/**
 * Obsel object.
 */
class Obsel
{
    /**
     * @var int $id The Obsel id.
     */
    protected $id;

    /**
     * @var datetime $startsAt The Obsel starts at.
     */
    protected $startsAt;

    /**
     * @var datetime $endsAt The Obsel ends at.
     */
    protected $endsAt;

    /**
     * @var string $subject The Obsel subject.
     */
    protected $subject;

    /**
     * @var text $metadata The Obsel metadata.
     */
    protected $metadata;

    /**
     * @var Collection
     */
    protected $obselCategory;

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
    public function setStartsAt(\DateTime $startsAt)
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
    public function setEndsAt(\DateTime $endsAt)
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
     * @param \ObselBundle\Model\ObselCategory $obselCategory
     *
     * @return Obsel
     */
    public function setObselCategory(\ObselBundle\Model\ObselCategory $obselCategory)
    {
        $this->obselCategory = $obselCategory;

        return $this;
    }

    /**
     * Get obselCategory
     *
     * @return \ObselBundle\Model\ObselCategory
     */
    public function getObselCategory()
    {
        return $this->obselCategory;
    }
}
