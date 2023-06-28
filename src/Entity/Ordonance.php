<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\OrdonanceRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Metadata\ApiFilter;
use ApiPlatform\Doctrine\Orm\Filter\SearchFilter;
use ApiPlatform\Doctrine\Orm\Filter\OrderFilter;



#[ORM\Entity(repositoryClass: OrdonanceRepository::class)]
#[ApiResource]
#[ApiFilter(SearchFilter::class, strategy: 'word_start')]
#[ApiFilter(OrderFilter::class, properties: ['created_at' => 'DESC'])]

class Ordonance
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nom_patient = null;

    #[ORM\Column(length: 255)]
    private ?string $maladie = null;

   

    #[ORM\Column(type: Types::TEXT)]
    private ?string $description = null;

    #[ORM\Column (options: ['default' => 'CURRENT_TIMESTAMP'])]
    private ?\DateTimeImmutable $created_at = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Patient $patient = null;

    #[ORM\ManyToMany(targetEntity: Medicament::class)]
    private Collection $medicament;

    #[ORM\ManyToOne(inversedBy: 'ordonances')]
    #[ORM\JoinColumn(nullable: false)]
    private ?User $user = null;

    #[ORM\Column(type: Types::SIMPLE_ARRAY)]
    private array $nom_medicament = [];

    public function __construct()
    {
        $this->medicament = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomPatient(): ?string
    {
        return $this->nom_patient;
    }

    public function setNomPatient(string $nom_patient): self
    {
        $this->nom_patient = $nom_patient;

        return $this;
    }

    public function getMaladie(): ?string
    {
        return $this->maladie;
    }

    public function setMaladie(string $maladie): self
    {
        $this->maladie = $maladie;

        return $this;
    }



    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->created_at;
    }

    public function setCreatedAt(\DateTimeImmutable $created_at): self
    {
        $this->created_at = $created_at;

        return $this;
    }

    public function getPatient(): ?Patient
    {
        return $this->patient;
    }

    public function setPatient(?Patient $patient): self
    {
        $this->patient = $patient;

        return $this;
    }

    /**
     * @return Collection<int, medicament>
     */
    public function getMedicament(): Collection
    {
        return $this->medicament;
    }

    public function addMedicament(Medicament $medicament): self
    {
        if (!$this->medicament->contains($medicament)) {
            $this->medicament->add($medicament);
        }

        return $this;
    }

    public function removeMedicament(Medicament $medicament): self
    {
        $this->medicament->removeElement($medicament);

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
    }

    public function getNomMedicament(): array
    {
        return $this->nom_medicament;
    }

    public function setNomMedicament(array $nom_medicament): self
    {
        $this->nom_medicament = $nom_medicament;

        return $this;
    }
}
