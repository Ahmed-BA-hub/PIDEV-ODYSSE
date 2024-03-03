<?php

namespace App\Entity;

use App\Repository\ReservationProgrammeRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ReservationProgrammeRepository::class)]
class ReservationProgramme
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $date = null;

    #[ORM\Column]
    private ?int $nbpersonne = null;

    #[ORM\Column]
    private ?int $heure = null;

    #[ORM\ManyToOne(inversedBy: 'reservationProgrammes')]
    private ?Programe $programme = null;

    #[ORM\ManyToOne(inversedBy: 'reservationProgrammes')]
    private ?User $user = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): static
    {
        $this->date = $date;

        return $this;
    }

    public function getNbpersonne(): ?int
    {
        return $this->nbpersonne;
    }

    public function setNbpersonne(int $nbpersonne): static
    {
        $this->nbpersonne = $nbpersonne;

        return $this;
    }

    public function getHeure(): ?int
    {
        return $this->heure;
    }

    public function setHeure(int $heure): static
    {
        $this->heure = $heure;

        return $this;
    }

    public function getProgramme(): ?Programe
    {
        return $this->programme;
    }

    public function setProgramme(?Programe $programme): static
    {
        $this->programme = $programme;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): static
    {
        $this->user = $user;

        return $this;
    }
}
