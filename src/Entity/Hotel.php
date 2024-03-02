<?php

namespace App\Entity;

use App\Repository\HotelRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: HotelRepository::class)]
class Hotel
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    private ?string $titre = null;

    #[ORM\Column(type: Types::SIMPLE_ARRAY)]
    private array $features = [];

    #[ORM\OneToMany(targetEntity: Resrvation::class, mappedBy: 'hotel')]
    private Collection $resrvations;

    #[ORM\OneToMany(targetEntity: ReservationHotel::class, mappedBy: 'hotel')]
    private Collection $reservationHotels;

    public function __construct()
    {
        $this->resrvations = new ArrayCollection();
        $this->reservationHotels = new ArrayCollection();
    }


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFeatures(): array
    {
        return $this->features;
    }
    public function getTitre():?string
    {
        return $this->titre;
    }
    public function setTitre(string $titre): string
    {
        $this->titre = $titre;

        return $this;
    }

    public function setFeatures(array $features): static
    {
        $this->features = $features;

        return $this;
    }
    public function __toString() : string
    {
        return $this->getTitre();
    }  
    /**
     * @return Collection<int, Resrvation>
     */
    public function getResrvations(): Collection
    {
        return $this->resrvations;
    }

    public function addResrvation(Resrvation $resrvation): static
    {
        if (!$this->resrvations->contains($resrvation)) {
            $this->resrvations->add($resrvation);
            $resrvation->setHotel($this);
        }

        return $this;
    }


    public function removeResrvation(Resrvation $resrvation): static
    {
        if ($this->resrvations->removeElement($resrvation)) {
            // set the owning side to null (unless already changed)
            if ($resrvation->getHotel() === $this) {
                $resrvation->setHotel(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, ReservationHotel>
     */
    public function getReservationHotels(): Collection
    {
        return $this->reservationHotels;
    }

    public function addReservationHotel(ReservationHotel $reservationHotel): static
    {
        if (!$this->reservationHotels->contains($reservationHotel)) {
            $this->reservationHotels->add($reservationHotel);
            $reservationHotel->setHotel($this);
        }

        return $this;
    }

    public function removeReservationHotel(ReservationHotel $reservationHotel): static
    {
        if ($this->reservationHotels->removeElement($reservationHotel)) {
            // set the owning side to null (unless already changed)
            if ($reservationHotel->getHotel() === $this) {
                $reservationHotel->setHotel(null);
            }
        }

        return $this;
    }


}
