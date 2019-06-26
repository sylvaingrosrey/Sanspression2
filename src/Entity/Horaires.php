<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\HorairesRepository")
 */
class Horaires
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
    private $jours;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Ouverture;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Fermeture;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $jourses;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $joursen;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $jourstr;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $joursde;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getJours(): ?string
    {
        return $this->jours;
    }

    public function setJours(string $jours): self
    {
        $this->jours = $jours;

        return $this;
    }

    public function getOuverture(): ?string
    {
        return $this->Ouverture;
    }

    public function setOuverture(string $Ouverture): self
    {
        $this->Ouverture = $Ouverture;

        return $this;
    }

    public function getFermeture(): ?string
    {
        return $this->Fermeture;
    }

    public function setFermeture(string $Fermeture): self
    {
        $this->Fermeture = $Fermeture;

        return $this;
    }

    public function getJourses(): ?string
    {
        return $this->jourses;
    }

    public function setJourses(string $jourses): self
    {
        $this->jourses = $jourses;

        return $this;
    }

    public function getJoursen(): ?string
    {
        return $this->joursen;
    }

    public function setJoursen(string $joursen): self
    {
        $this->joursen = $joursen;

        return $this;
    }

    public function getJourstr(): ?string
    {
        return $this->jourstr;
    }

    public function setJourstr(string $jourstr): self
    {
        $this->jourstr = $jourstr;

        return $this;
    }

    public function getJoursde(): ?string
    {
        return $this->joursde;
    }

    public function setJoursde(string $joursde): self
    {
        $this->joursde = $joursde;

        return $this;
    }
}
