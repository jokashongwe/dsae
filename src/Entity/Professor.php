<?php

namespace App\Entity;

use App\Repository\ProfessorRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ProfessorRepository::class)]
class Professor
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $firstname = null;

    #[ORM\Column(length: 255)]
    private ?string $lastname = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTime $birthdate = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $biography = null;

    #[ORM\Column(length: 10)]
    private ?string $grade = null;

    /**
     * @var Collection<int, StudyProgrammes>
     */
    #[ORM\OneToMany(targetEntity: StudyProgrammes::class, mappedBy: 'dean')]
    private Collection $studyProgrammes;

    public function __construct()
    {
        $this->studyProgrammes = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFirstname(): ?string
    {
        return $this->firstname;
    }

    public function setFirstname(string $firstname): static
    {
        $this->firstname = $firstname;

        return $this;
    }

    public function getLastname(): ?string
    {
        return $this->lastname;
    }

    public function setLastname(string $lastname): static
    {
        $this->lastname = $lastname;

        return $this;
    }

    public function getBirthdate(): ?\DateTime
    {
        return $this->birthdate;
    }

    public function setBirthdate(?\DateTime $birthdate): static
    {
        $this->birthdate = $birthdate;

        return $this;
    }

    public function getBiography(): ?string
    {
        return $this->biography;
    }

    public function setBiography(?string $biography): static
    {
        $this->biography = $biography;

        return $this;
    }

    public function getGrade(): ?string
    {
        return $this->grade;
    }

    public function setGrade(string $grade): static
    {
        $this->grade = $grade;

        return $this;
    }

    /**
     * @return Collection<int, StudyProgrammes>
     */
    public function getStudyProgrammes(): Collection
    {
        return $this->studyProgrammes;
    }

    public function addStudyProgramme(StudyProgrammes $studyProgramme): static
    {
        if (!$this->studyProgrammes->contains($studyProgramme)) {
            $this->studyProgrammes->add($studyProgramme);
            $studyProgramme->setDean($this);
        }

        return $this;
    }

    public function removeStudyProgramme(StudyProgrammes $studyProgramme): static
    {
        if ($this->studyProgrammes->removeElement($studyProgramme)) {
            // set the owning side to null (unless already changed)
            if ($studyProgramme->getDean() === $this) {
                $studyProgramme->setDean(null);
            }
        }

        return $this;
    }
}
