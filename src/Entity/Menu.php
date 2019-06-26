<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\MenuRepository")
 */
class Menu
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
    private $titlemenufr;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $titlemenuen;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $titlemenues;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $titlemenude;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $titlemenutr;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $menudescriptionfr;

    /**
     * @ORM\Column(type="text")
     */
    private $menudescriptionen;

    /**
     * @ORM\Column(type="text")
     */
    private $menudescriptionde;

    /**
     * @ORM\Column(type="text")
     */
    private $menudescriptiones;

    /**
     * @ORM\Column(type="text")
     */
    private $menudescriptiontr;

    /**
     * @ORM\Column(type="integer")
     */
    private $price;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $menusubtitlefr;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $menusubtitleen;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $menusubtitlede;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $menusubtitlees;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $menusubtitletr;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitlemenufr(): ?string
    {
        return $this->titlemenufr;
    }

    public function setTitlemenufr(string $titlemenufr): self
    {
        $this->titlemenufr = $titlemenufr;

        return $this;
    }

    public function getTitlemenuen(): ?string
    {
        return $this->titlemenuen;
    }

    public function setTitlemenuen(string $titlemenuen): self
    {
        $this->titlemenuen = $titlemenuen;

        return $this;
    }

    public function getTitlemenues(): ?string
    {
        return $this->titlemenues;
    }

    public function setTitlemenues(string $titlemenues): self
    {
        $this->titlemenues = $titlemenues;

        return $this;
    }

    public function getTitlemenude(): ?string
    {
        return $this->titlemenude;
    }

    public function setTitlemenude(string $titlemenude): self
    {
        $this->titlemenude = $titlemenude;

        return $this;
    }

    public function getTitlemenutr(): ?string
    {
        return $this->titlemenutr;
    }

    public function setTitlemenutr(string $titlemenutr): self
    {
        $this->titlemenutr = $titlemenutr;

        return $this;
    }

    public function getMenudescriptionfr(): ?string
    {
        return $this->menudescriptionfr;
    }

    public function setMenudescriptionfr(string $menudescriptionfr): self
    {
        $this->menudescriptionfr = $menudescriptionfr;

        return $this;
    }

    public function getMenudescriptionen(): ?string
    {
        return $this->menudescriptionen;
    }

    public function setMenudescriptionen(string $menudescriptionen): self
    {
        $this->menudescriptionen = $menudescriptionen;

        return $this;
    }

    public function getMenudescriptionde(): ?string
    {
        return $this->menudescriptionde;
    }

    public function setMenudescriptionde(string $menudescriptionde): self
    {
        $this->menudescriptionde = $menudescriptionde;

        return $this;
    }

    public function getMenudescriptiones(): ?string
    {
        return $this->menudescriptiones;
    }

    public function setMenudescriptiones(string $menudescriptiones): self
    {
        $this->menudescriptiones = $menudescriptiones;

        return $this;
    }

    public function getMenudescriptiontr(): ?string
    {
        return $this->menudescriptiontr;
    }

    public function setMenudescriptiontr(string $menudescriptiontr): self
    {
        $this->menudescriptiontr = $menudescriptiontr;

        return $this;
    }

    public function getPrice(): ?int
    {
        return $this->price;
    }

    public function setPrice(int $price): self
    {
        $this->price = $price;

        return $this;
    }

    public function getMenusubtitlefr(): ?string
    {
        return $this->menusubtitlefr;
    }

    public function setMenusubtitlefr(string $menusubtitlefr): self
    {
        $this->menusubtitlefr = $menusubtitlefr;

        return $this;
    }

    public function getMenusubtitleen(): ?string
    {
        return $this->menusubtitleen;
    }

    public function setMenusubtitleen(string $menusubtitleen): self
    {
        $this->menusubtitleen = $menusubtitleen;

        return $this;
    }

    public function getMenusubtitlede(): ?string
    {
        return $this->menusubtitlede;
    }

    public function setMenusubtitlede(string $menusubtitlede): self
    {
        $this->menusubtitlede = $menusubtitlede;

        return $this;
    }

    public function getMenusubtitlees(): ?string
    {
        return $this->menusubtitlees;
    }

    public function setMenusubtitlees(string $menusubtitlees): self
    {
        $this->menusubtitlees = $menusubtitlees;

        return $this;
    }

    public function getMenusubtitletr(): ?string
    {
        return $this->menusubtitletr;
    }

    public function setMenusubtitletr(string $menusubtitletr): self
    {
        $this->menusubtitletr = $menusubtitletr;

        return $this;
    }
}
