<?php

namespace App\Entity;

use App\Repository\ReclamationRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ReclamationRepository::class)]
class Reclamation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 10000)]
    private ?string $description = null;

    #[ORM\OneToOne(inversedBy: 'reclamation', cascade: ['persist', 'remove'])]
    #[ORM\JoinColumn(nullable: true)]
    private ?Resrvation $reservation = null;

    #[ORM\ManyToOne(inversedBy: 'reclamations')]
    private ?ReservationProgramme $reservationProgramme = null;

    #[ORM\ManyToOne(inversedBy: 'reclamations')]
    private ?ReservationHotel $reservationHotel = null;

    #[ORM\ManyToOne(inversedBy: 'reclamations')]
    private ?ReservationRestaurant $ReservationRestaurant = null;

    #[ORM\ManyToOne(inversedBy: 'reclamations')]
    private ?User $user = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getReservation(): ?Resrvation
    {
        return $this->reservation;
    }

    public function setReservation(Resrvation $reservation): static
    {
        $this->reservation = $reservation;

        return $this;
    }

    public function getReservationProgramme(): ?ReservationProgramme
    {
        return $this->reservationProgramme;
    }

    public function setReservationProgramme(?ReservationProgramme $reservationProgramme): static
    {
        $this->reservationProgramme = $reservationProgramme;

        return $this;
    }

    public function getReservationHotel(): ?ReservationHotel
    {
        return $this->reservationHotel;
    }

    public function setReservationHotel(?ReservationHotel $reservationHotel): static
    {
        $this->reservationHotel = $reservationHotel;

        return $this;
    }

    public function getReservationRestaurant(): ?ReservationRestaurant
    {
        return $this->ReservationRestaurant;
    }

    public function setReservationRestaurant(?ReservationRestaurant $ReservationRestaurant): static
    {
        $this->ReservationRestaurant = $ReservationRestaurant;

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
