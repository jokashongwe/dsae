<?php

namespace App\Entity;

use App\Repository\PublicationRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PublicationRepository::class)]
class Publication
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $title = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $content = null;

    #[ORM\Column]
    private ?\DateTime $pubdate = null;

    #[ORM\Column(nullable: true)]
    private ?\DateTime $updatedate = null;

    /**
     * @var Collection<int, PubCategory>
     */
    #[ORM\ManyToMany(targetEntity: PubCategory::class, inversedBy: 'publications')]
    private Collection $categories;

    public function __construct()
    {
        $this->categories = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): static
    {
        $this->title = $title;

        return $this;
    }

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(?string $content): static
    {
        $this->content = $content;

        return $this;
    }

    public function getPubdate(): ?\DateTime
    {
        return $this->pubdate;
    }

    public function setPubdate(\DateTime $pubdate): static
    {
        $this->pubdate = $pubdate;

        return $this;
    }

    public function getUpdatedate(): ?\DateTime
    {
        return $this->updatedate;
    }

    public function setUpdatedate(?\DateTime $updatedate): static
    {
        $this->updatedate = $updatedate;

        return $this;
    }

    /**
     * @return Collection<int, PubCategory>
     */
    public function getCategories(): Collection
    {
        return $this->categories;
    }

    public function addCategory(PubCategory $category): static
    {
        if (!$this->categories->contains($category)) {
            $this->categories->add($category);
        }

        return $this;
    }

    public function removeCategory(PubCategory $category): static
    {
        $this->categories->removeElement($category);

        return $this;
    }
}
