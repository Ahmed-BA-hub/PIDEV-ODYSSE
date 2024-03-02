<?php

namespace App\Entity;

use App\Repository\CivilisationRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;



#[ORM\Entity(repositoryClass: CivilisationRepository::class)]
#[Vich\Uploadable]
class Civilisation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotNull]
    private ?string $nom = null;

    #[ORM\Column(length: 10000)]
    #[Assert\NotNull]
    #[Assert\Length(
        min: 7,
        max: 50,
        minMessage: 'Your description must be at least {{ limit }} characters long',
        maxMessage: 'Your description cannot be longer than {{ limit }} characters',
    )]
    private ?string $description = null;

    #[ORM\Column(length: 1000)]
    #[Assert\NotNull]
    #[Assert\Length(
        min: 5,
        max: 50,
        minMessage: 'Your emplacement must be at least {{ limit }} characters long',
        maxMessage: 'Your emplacement cannot be longer than {{ limit }} characters',
    )]
    private ?string $emplacement = null;

    #[ORM\OneToMany(targetEntity: Programe::class, mappedBy: 'civilisation_id' , cascade:["all"],orphanRemoval:true)]
    private Collection $programes;

    

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $imageName = null;

    #[Vich\UploadableField(mapping: 'civilisation_images', fileNameProperty: 'imageName')]
    private ?File $imageFile = null;

    /**
     * @ORM\Column(type="datetime")
     */
    private $updatedAt;
   
    public function __construct()
    {
        $this->programes = new ArrayCollection();
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

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getEmplacement(): ?string
    {
        return $this->emplacement;
    }

    public function setEmplacement(string $emplacement): static
    {
        $this->emplacement = $emplacement;

        return $this;
    }

    /**
     * @return Collection<int, Programe>
     */
    public function getProgrames(): Collection
    {
        return $this->programes;
    }

    public function addPrograme(Programe $programe): static
    {
        if (!$this->programes->contains($programe)) {
            $this->programes->add($programe);
            $programe->setCivilisationId($this);
        }

        return $this;
    }

    public function removePrograme(Programe $programe): static
    {
        if ($this->programes->removeElement($programe)) {
            // set the owning side to null (unless already changed)
            if ($programe->getCivilisationId() === $this) {
                $programe->setCivilisationId(null);
            }
        }

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
}
