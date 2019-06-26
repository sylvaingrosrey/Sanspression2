<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ArticleRepository")
 */
class Article
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
    private $srcImgArticle;

    /**
     * @ORM\Column(type="text")
     */
    private $descriptionArticle;

    /**
     * @ORM\Column(type="integer")
     */
    private $price;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $menuActive;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $newActive;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $promoActive;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $articleActive;

    /**
     * @ORM\Column(type="datetime")
     */
    private $date;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Category", inversedBy="articleId")
     * @ORM\JoinColumn(nullable=true)
     */
    private $categoryId;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $name_en;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $name_es;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $name_de;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $name_tr;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $description_en;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $description_es;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $description_de;

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

    public function getSrcImgArticle(): ?string
    {
        return $this->srcImgArticle;
    }

    public function setSrcImgArticle(string $srcImgArticle): self
    {
        $this->srcImgArticle = $srcImgArticle;

        return $this;
    }

    public function getDescriptionArticle(): ?string
    {
        return $this->descriptionArticle;
    }

    public function setDescriptionArticle(string $descriptionArticle): self
    {
        $this->descriptionArticle = $descriptionArticle;

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

    public function getMenuActive(): ?bool
    {
        return $this->menuActive;
    }

    public function setMenuActive(?bool $menuActive): self
    {
        $this->menuActive = $menuActive;

        return $this;
    }

    public function getNewActive(): ?bool
    {
        return $this->newActive;
    }

    public function setNewActive(?bool $newActive): self
    {
        $this->newActive = $newActive;

        return $this;
    }

    public function getPromoActive(): ?bool
    {
        return $this->promoActive;
    }

    public function setPromoActive(?bool $promoActive): self
    {
        $this->promoActive = $promoActive;

        return $this;
    }

    public function getArticleActive(): ?bool
    {
        return $this->articleActive;
    }

    public function setArticleActive(?bool $articleActive): self
    {
        $this->articleActive = $articleActive;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getCategoryId(): ?Category
    {
        return $this->categoryId;
    }

    public function setCategoryId(?Category $categoryId): self
    {
        $this->categoryId = $categoryId;

        return $this;
    }

    public function getNameEn(): ?string
    {
        return $this->name_en;
    }

    public function setNameEn(?string $name_en): self
    {
        $this->name_en = $name_en;

        return $this;
    }

    public function getNameEs(): ?string
    {
        return $this->name_es;
    }

    public function setNameEs(?string $name_es): self
    {
        $this->name_es = $name_es;

        return $this;
    }

    public function getNameDe(): ?string
    {
        return $this->name_de;
    }

    public function setNameDe(?string $name_de): self
    {
        $this->name_de = $name_de;

        return $this;
    }

    public function getNameTr(): ?string
    {
        return $this->name_tr;
    }

    public function setNameTr(?string $name_tr): self
    {
        $this->name_tr = $name_tr;

        return $this;
    }

    public function getDescriptionEn(): ?string
    {
        return $this->description_en;
    }

    public function setDescriptionEn(?string $description_en): self
    {
        $this->description_en = $description_en;

        return $this;
    }

    public function getDescriptionEs(): ?string
    {
        return $this->description_es;
    }

    public function setDescriptionEs(?string $description_es): self
    {
        $this->description_es = $description_es;

        return $this;
    }

    public function getDescriptionDe(): ?string
    {
        return $this->description_de;
    }

    public function setDescriptionDe(?string $description_de): self
    {
        $this->description_de = $description_de;

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
