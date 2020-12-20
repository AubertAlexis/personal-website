<?php


namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use DateTimeInterface;
use DateTimeImmutable;

/**
 * Class Section
 * @package App\Entity
 * @ORM\Entity()
 */
class Hero
{
    /**
     * @var int|null
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private ?int $id = null;

    /**
     * @var Information|null
     * @ORM\Embedded(class="Information")
     */
    private ?Information $information = null;

    /**
     * @var string|null
     * @ORM\Column(type="string")
     */
    private ?string $more = null;

    /**
     * @var DateTimeInterface
     * @ORM\Column(type="datetime_immutable")
     */
    private DateTimeInterface $createdAt;

    /**
     * Hero constructor.
     */
    public function __construct()
    {
        $this->createdAt = new DateTimeImmutable();
    }

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param int|null $id
     */
    public function setId(?int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return Information|null
     */
    public function getInformation(): ?Information
    {
        return $this->information;
    }

    /**
     * @param Information|null $information
     */
    public function setInformation(?Information $information): void
    {
        $this->information = $information;
    }

    /**
     * @return DateTimeInterface
     */
    public function getCreatedAt(): DateTimeInterface
    {
        return $this->createdAt;
    }

    /**
     * @param DateTimeInterface $createdAt
     */
    public function setCreatedAt(DateTimeInterface $createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    /**
     * @return string|null
     */
    public function getMore(): ?string
    {
        return $this->more;
    }

    /**
     * @param string|null $more
     */
    public function setMore(?string $more): void
    {
        $this->more = $more;
    }
}