<?php

namespace App\Entity;

use App\Repository\StudyProgrammesRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: StudyProgrammesRepository::class)]
class StudyProgrammes
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $title = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $details = null;

    #[ORM\Column(length: 100, nullable: true)]
    private ?string $shortDesc = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $primaryImage = null;

    #[ORM\ManyToOne(inversedBy: 'studyProgrammes')]
    private ?Professor $dean = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $grade = null;

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

    public function getDetails(): ?string
    {
        return $this->details;
    }

    public function setDetails(string $details): static
    {
        $this->details = $details;

        return $this;
    }

    public function getShortDesc(): ?string
    {
        return $this->shortDesc;
    }

    public function setShortDesc(?string $shortDesc): static
    {
        $this->shortDesc = $shortDesc;

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

    public function getDean(): ?Professor
    {
        return $this->dean;
    }

    public function setDean(?Professor $dean): static
    {
        $this->dean = $dean;

        return $this;
    }

    public function getGrade(): ?string
    {
        return $this->grade;
    }

    public function setGrade(?string $grade): static
    {
        $this->grade = $grade;

        return $this;
    }
}
