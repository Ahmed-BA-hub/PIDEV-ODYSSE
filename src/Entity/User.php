<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: UserRepository::class)]
#[ORM\Table(name: '`user`')]
class User
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    private ?string $nom = null;

    #[ORM\Column(length: 50)]
    private ?string $prenom = null;

    #[ORM\Column(length: 30)]
    private ?string $cin = null;

    #[ORM\Column(length: 50)]
    private ?string $numTel = null;

    #[ORM\Column(length: 100)]
    private ?string $mail = null;

    #[ORM\Column(length: 32)]
    private ?string $password = null;

    #[ORM\Column(length: 50)]
    private ?string $userName = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $dateNaissance = null;

    #[ORM\ManyToOne(inversedBy: 'users')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Role $roles = null;

    #[ORM\OneToMany(targetEntity: BlogArticle::class, mappedBy: 'users')]
    private Collection $blogArticles;

    #[ORM\OneToMany(targetEntity: BlogComment::class, mappedBy: 'users')]
    private Collection $blogComments;

    #[ORM\OneToMany(targetEntity: Resrvation::class, mappedBy: 'users')]
    private Collection $resrvations;

    #[ORM\OneToMany(targetEntity: ReservationHotel::class, mappedBy: 'user')]
    private Collection $reservationHotels;

    #[ORM\OneToMany(targetEntity: ReservationProgramme::class, mappedBy: 'user')]
    private Collection $reservationProgrammes;

    #[ORM\OneToMany(targetEntity: ReservationRestaurant::class, mappedBy: 'user')]
    private Collection $reservationRestaurants;

    public function __construct()
    {
        $this->blogArticles = new ArrayCollection();
        $this->blogComments = new ArrayCollection();
        $this->resrvations = new ArrayCollection();
        $this->reservationHotels = new ArrayCollection();
        $this->reservationProgrammes = new ArrayCollection();
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

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): static
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getCin(): ?string
    {
        return $this->cin;
    }

    public function setCin(string $cin): static
    {
        $this->cin = $cin;

        return $this;
    }

    public function getNumTel(): ?string
    {
        return $this->numTel;
    }

    public function setNumTel(string $numTel): static
    {
        $this->numTel = $numTel;

        return $this;
    }

    public function getMail(): ?string
    {
        return $this->mail;
    }

    public function setMail(string $mail): static
    {
        $this->mail = $mail;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): static
    {
        $this->password = $password;

        return $this;
    }

    public function getUserName(): ?string
    {
        return $this->userName;
    }

    public function setUserName(string $userName): static
    {
        $this->userName = $userName;

        return $this;
    }

    public function getDateNaissance(): ?\DateTimeInterface
    {
        return $this->dateNaissance;
    }

    public function setDateNaissance(\DateTimeInterface $dateNaissance): static
    {
        $this->dateNaissance = $dateNaissance;

        return $this;
    }

    public function getRoles(): ?Role
    {
        return $this->roles;
    }

    public function setRoles(?Role $roles): static
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @return Collection<int, BlogArticle>
     */
    public function getBlogArticles(): Collection
    {
        return $this->blogArticles;
    }

    public function addBlogArticle(BlogArticle $blogArticle): static
    {
        if (!$this->blogArticles->contains($blogArticle)) {
            $this->blogArticles->add($blogArticle);
            $blogArticle->setUsers($this);
        }

        return $this;
    }

    public function removeBlogArticle(BlogArticle $blogArticle): static
    {
        if ($this->blogArticles->removeElement($blogArticle)) {
            // set the owning side to null (unless already changed)
            if ($blogArticle->getUsers() === $this) {
                $blogArticle->setUsers(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, BlogComment>
     */
    public function getBlogComments(): Collection
    {
        return $this->blogComments;
    }

    public function addBlogComment(BlogComment $blogComment): static
    {
        if (!$this->blogComments->contains($blogComment)) {
            $this->blogComments->add($blogComment);
            $blogComment->setUsers($this);
        }

        return $this;
    }

    public function removeBlogComment(BlogComment $blogComment): static
    {
        if ($this->blogComments->removeElement($blogComment)) {
            // set the owning side to null (unless already changed)
            if ($blogComment->getUsers() === $this) {
                $blogComment->setUsers(null);
            }
        }

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
            $resrvation->setUsers($this);
        }

        return $this;
    }

    public function removeResrvation(Resrvation $resrvation): static
    {
        if ($this->resrvations->removeElement($resrvation)) {
            // set the owning side to null (unless already changed)
            if ($resrvation->getUsers() === $this) {
                $resrvation->setUsers(null);
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
            $reservationHotel->setUser($this);
        }

        return $this;
    }

    public function removeReservationHotel(ReservationHotel $reservationHotel): static
    {
        if ($this->reservationHotels->removeElement($reservationHotel)) {
            // set the owning side to null (unless already changed)
            if ($reservationHotel->getUser() === $this) {
                $reservationHotel->setUser(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, ReservationProgramme>
     */
    public function getReservationProgrammes(): Collection
    {
        return $this->reservationProgrammes;
    }

    public function addReservationProgramme(ReservationProgramme $reservationProgramme): static
    {
        if (!$this->reservationProgrammes->contains($reservationProgramme)) {
            $this->reservationProgrammes->add($reservationProgramme);
            $reservationProgramme->setUser($this);
        }

        return $this;
    }

    public function removeReservationProgramme(ReservationProgramme $reservationProgramme): static
    {
        if ($this->reservationProgrammes->removeElement($reservationProgramme)) {
            // set the owning side to null (unless already changed)
            if ($reservationProgramme->getUser() === $this) {
                $reservationProgramme->setUser(null);
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
            $reservationRestaurant->setUser($this);
        }

        return $this;
    }

    public function removeReservationRestaurant(ReservationRestaurant $reservationRestaurant): static
    {
        if ($this->reservationRestaurants->removeElement($reservationRestaurant)) {
            // set the owning side to null (unless already changed)
            if ($reservationRestaurant->getUser() === $this) {
                $reservationRestaurant->setUser(null);
            }
        }

        return $this;
    }
}
