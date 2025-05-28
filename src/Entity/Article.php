<?php

namespace App\Entity;

use App\Repository\ArticleRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ArticleRepository::class)]
class Article
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $title = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $body = null;

    #[ORM\Column(nullable: true)]
    private ?\DateTime $pubDate = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $primaryImage = null;

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

    public function getBody(): ?string
    {
        return $this->body;
    }

    public function setBody(?string $body): static
    {
        $this->body = $body;

        return $this;
    }

    public function getPubDate(): ?\DateTime
    {
        return $this->pubDate;
    }

    public function setPubDate(?\DateTime $pubDate): static
    {
        $this->pubDate = $pubDate;

        return $this;
    }

    public function getPrimaryImage(): ?string
    {
        return $this->primaryImage;
    }

    public function setPrimaryImage(?string $primaryImage): static
    {
        $this->primaryImage = $primaryImage;

        return $this;
    }
}
