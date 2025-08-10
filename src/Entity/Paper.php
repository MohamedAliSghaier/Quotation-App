<?php

namespace App\Entity;

use App\Repository\PaperRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PaperRepository::class)]
class Paper
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 100)]
    private ?string $name = null;

    #[ORM\Column]
    private ?float $width = null;

    #[ORM\Column]
    private ?float $height = null;

    #[ORM\Column]
    private ?int $weight = null;

    #[ORM\Column]
    private ?float $offsetPricePerSheet = null;

    #[ORM\Column]
    private ?float $digitalPricePerSheet = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getWidth(): ?float
    {
        return $this->width;
    }

    public function setWidth(float $width): static
    {
        $this->width = $width;

        return $this;
    }

    public function getHeight(): ?float
    {
        return $this->height;
    }

    public function setHeight(float $height): static
    {
        $this->height = $height;

        return $this;
    }

    public function getWeight(): ?int
    {
        return $this->weight;
    }

    public function setWeight(int $weight): static
    {
        $this->weight = $weight;

        return $this;
    }

    public function getOffsetPricePerSheet(): ?float
    {
        return $this->offsetPricePerSheet;
    }

    public function setOffsetPricePerSheet(float $offsetPricePerSheet): static
    {
        $this->offsetPricePerSheet = $offsetPricePerSheet;

        return $this;
    }

     public function getDigitalPricePerSheet(): ?float
    {
        return $this->digitalPricePerSheet;
    }

    public function setDigitalPricePerSheet(float $digitalPricePerSheet): static
    {
        $this->digitalPricePerSheet = $digitalPricePerSheet;

        return $this;
    }
}
