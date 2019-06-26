<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CategoryRepository")
 */
class Category
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
     * @ORM\OneToMany(targetEntity="App\Entity\Article", mappedBy="categoryId")
     */
    private $articleId;

    public function __construct()
    {
        $this->articleId = new ArrayCollection();
    }

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

    /**
     * @return Collection|Article[]
     */
    public function getArticleId(): Collection
    {
        return $this->articleId;
    }

    public function addArticleId(Article $articleId): self
    {
        if (!$this->articleId->contains($articleId)) {
            $this->articleId[] = $articleId;
            $articleId->setCategoryId($this);
        }

        return $this;
    }

    public function removeArticleId(Article $articleId): self
    {
        if ($this->articleId->contains($articleId)) {
            $this->articleId->removeElement($articleId);
            // set the owning side to null (unless already changed)
            if ($articleId->getCategoryId() === $this) {
                $articleId->setCategoryId(null);
            }
        }

        return $this;
    }
}
