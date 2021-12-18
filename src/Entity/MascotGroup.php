<?php

namespace App\Entity;

use App\Repository\MascotGroupRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=MascotGroupRepository::class)
 */
class MascotGroup
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private ?int $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private ?string $title;

    /**
     * @ORM\Column(type="array")
     */
    private array $directories = [];

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(
        string $title
    ): self {
        $this->title = $title;

        return $this;
    }

    public function getDirectories(): ?array
    {
        return $this->directories;
    }

    public function setDirectories(
        array $directories
    ): self {
        $this->directories = $directories;

        return $this;
    }
}
