<?php

namespace App\Entity;

use App\Repository\ReservationRestaurantRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ReservationRestaurantRepository::class)]
class ReservationRestaurant
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]  
    #[Groups("reservation")]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    #[Groups("reservation")]
    private ?\DateTimeInterface $date = null;

    #[ORM\Column]
    #[Groups("reservation")]
    private ?int $nbpersonne = null;

    #[ORM\Column]
    #[Groups("reservation")]
    private ?int $heure = null;

    #[ORM\ManyToOne(inversedBy: 'reservationRestaurants')]
    #[Groups("reservation")]
    private ?Restaurant $restaurant = null;

    #[ORM\ManyToOne(inversedBy: 'reservationRestaurants')]
    #[Groups("reservation")]
    private ?User $user = null;

    #[ORM\OneToMany(targetEntity: Reclamation::class, mappedBy: 'ReservationRestaurant')]
    #[Groups("reservation")]
    private Collection $reclamations;

    public function __construct()
    {
        $this->reclamations = new ArrayCollection();
    }

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

    public function getRestaurant(): ?Restaurant
    {
        return $this->restaurant;
    }

    public function setRestaurant(?Restaurant $restaurant): static
    {
        $this->restaurant = $restaurant;

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

    /**
     * @return Collection<int, Reclamation>
     */
    public function getReclamations(): Collection
    {
        return $this->reclamations;
    }

    public function addReclamation(Reclamation $reclamation): static
    {
        if (!$this->reclamations->contains($reclamation)) {
            $this->reclamations->add($reclamation);
            $reclamation->setReservationRestaurant($this);
        }

        return $this;
    }

    public function removeReclamation(Reclamation $reclamation): static
    {
        if ($this->reclamations->removeElement($reclamation)) {
            // set the owning side to null (unless already changed)
            if ($reclamation->getReservationRestaurant() === $this) {
                $reclamation->setReservationRestaurant(null);
            }
        }

        return $this;
    }
}
