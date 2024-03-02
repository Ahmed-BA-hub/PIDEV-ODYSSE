<?php

namespace App\Entity;

use App\Repository\RestaurantRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: RestaurantRepository::class)]
class Restaurant
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nom = null;

    #[ORM\Column(nullable: true)]
    private ?int $rate = null;

    #[ORM\OneToMany(targetEntity: Resrvation::class, mappedBy: 'restaurant')]
    private Collection $resrvations;

    #[ORM\OneToMany(targetEntity: ReservationRestaurant::class, mappedBy: 'restaurant')]
    private Collection $reservationRestaurants;

    public function __construct()
    {
        $this->resrvations = new ArrayCollection();
        $this->reservationRestaurants = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): static
    {
        $this->nom = $nom;

        return $this;
    }

    public function getRate(): ?int
    {
        return $this->rate;
    }

    public function setRate(?int $rate): static
    {
        $this->rate = $rate;

        return $this;
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
            $resrvation->setRestaurant($this);
        }

        return $this;
    }

    public function removeResrvation(Resrvation $resrvation): static
    {
        if ($this->resrvations->removeElement($resrvation)) {
            // set the owning side to null (unless already changed)
            if ($resrvation->getRestaurant() === $this) {
                $resrvation->setRestaurant(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, ReservationRestaurant>
     */
    public function getReservationRestaurants(): Collection
    {
        return $this->reservationRestaurants;
    }

    public function addReservationRestaurant(ReservationRestaurant $reservationRestaurant): static
    {
        if (!$this->reservationRestaurants->contains($reservationRestaurant)) {
            $this->reservationRestaurants->add($reservationRestaurant);
            $reservationRestaurant->setRestaurant($this);
        }

        return $this;
    }

    public function removeReservationRestaurant(ReservationRestaurant $reservationRestaurant): static
    {
        if ($this->reservationRestaurants->removeElement($reservationRestaurant)) {
            // set the owning side to null (unless already changed)
            if ($reservationRestaurant->getRestaurant() === $this) {
                $reservationRestaurant->setRestaurant(null);
            }
        }

        return $this;
    }

    public function __toString() : string
    {
        return $this->getNom();
    } 
}
