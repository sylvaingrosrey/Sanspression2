<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ParallaxRepository")
 */
class Parallax
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
    private $srcImgParallax;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $descriptionParallax;

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

    public function getSrcImgParallax(): ?string
    {
        return $this->srcImgParallax;
    }

    public function setSrcImgParallax(string $srcImgParallax): self
    {
        $this->srcImgParallax = $srcImgParallax;

        return $this;
    }

    public function getDescriptionParallax(): ?string
    {
        return $this->descriptionParallax;
    }

    public function setDescriptionParallax(?string $descriptionParallax): self
    {
        $this->descriptionParallax = $descriptionParallax;

        return $this;
    }
}
