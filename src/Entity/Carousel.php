<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CarouselRepository")
 */
class Carousel
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $srcImg;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $Active;

    /**
     * @ORM\Column(type="text")
     */
    private $Description;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Description_en;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Description_de;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Description_es;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $description_tr;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getSrcImg(): ?string
    {
        return $this->srcImg;
    }

    public function setSrcImg(string $srcImg): self
    {
        $this->srcImg = $srcImg;

        return $this;
    }

    public function getActive(): ?bool
    {
        return $this->Active;
    }

    public function setActive(?bool $Active): self
    {
        $this->Active = $Active;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->Description;
    }

    public function setDescription(string $Description): self
    {
        $this->Description = $Description;

        return $this;
    }

    public function getDescriptionEn(): ?string
    {
        return $this->Description_en;
    }

    public function setDescriptionEn(?string $Description_en): self
    {
        $this->Description_en = $Description_en;

        return $this;
    }

    public function getDescriptionDe(): ?string
    {
        return $this->Description_de;
    }

    public function setDescriptionDe(?string $Description_de): self
    {
        $this->Description_de = $Description_de;

        return $this;
    }

    public function getDescriptionEs(): ?string
    {
        return $this->Description_es;
    }

    public function setDescriptionEs(?string $Description_es): self
    {
        $this->Description_es = $Description_es;

        return $this;
    }

    public function getDescriptionTr(): ?string
    {
        return $this->description_tr;
    }

    public function setDescriptionTr(?string $description_tr): self
    {
        $this->description_tr = $description_tr;

        return $this;
    }
}
