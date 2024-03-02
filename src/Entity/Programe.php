<?php

namespace App\Entity;

use App\Repository\ProgrameRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Symfony\Component\Validator\Constraints as Assert;

use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ProgrameRepository::class)]
#[Vich\Uploadable]
class Programe
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    #[Assert\NotNull]
    private ?string $nom = null;

    #[ORM\Column]
    #[Assert\NotNull]
    private ?int $duree = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $date = null;

    #[ORM\ManyToOne(inversedBy: 'programes')]
    private ?Civilisation $civilisation_id = null;


    #[ORM\Column(length: 255, nullable: true)]
    private ?string $imageName = null;

    #[Vich\UploadableField(mapping: 'programe_images', fileNameProperty: 'imageName')]
    private ?File $imageFile = null;

    /**
     * @ORM\Column(type="datetime")
     */
    private $updatedAt;

    #[ORM\OneToMany(targetEntity: ReservationProgramme::class, mappedBy: 'programme')]
    private Collection $reservationProgrammes;

    public function __construct()
    {
        $this->reservationProgrammes = new ArrayCollection();
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

    public function getDuree(): ?int
    {
        return $this->duree;
    }

    public function setDuree(int $duree): static
    {
        $this->duree = $duree;

        return $this;
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

    public function getCivilisationId(): ?Civilisation
    {
        return $this->civilisation_id;
    }

    public function setCivilisationId(?Civilisation $civilisation_id): static
    {
        $this->civilisation_id = $civilisation_id;

        return $this;
    }

    
    public function getImageName(): ?string
    {
        return $this->imageName;
    }

    public function setImageName(?string $imageName): self
    {
        $this->imageName = $imageName;

        return $this;
    }

    public function getImageFile(): ?File
    {
        return $this->imageFile;
    }

    public function setImageFile(?File $imageFile): void
    {
        $this->imageFile = $imageFile;

        // Si l'image est définie, il est nécessaire de changer également la date de mise à jour pour que VichUploaderBundle fonctionne correctement.
        if ($imageFile) {
            $this->updatedAt = new \DateTimeImmutable();
        }
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
            $reservationProgramme->setProgramme($this);
        }

        return $this;
    }

    public function removeReservationProgramme(ReservationProgramme $reservationProgramme): static
    {
        if ($this->reservationProgrammes->removeElement($reservationProgramme)) {
            // set the owning side to null (unless already changed)
            if ($reservationProgramme->getProgramme() === $this) {
                $reservationProgramme->setProgramme(null);
            }
        }

        return $this;
    }

}
