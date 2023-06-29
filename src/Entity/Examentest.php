<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\ExamentestRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Metadata\ApiFilter;
use ApiPlatform\Doctrine\Orm\Filter\SearchFilter;
use ApiPlatform\Doctrine\Orm\Filter\OrderFilter;



#[ORM\Entity(repositoryClass: ExamentestRepository::class)]
#[ApiResource]
#[ApiFilter(SearchFilter::class, properties:[

    'id' => SearchFilter::STRATEGY_WORD_START,
    'patient.id' => SearchFilter::STRATEGY_EXACT,   
    'nom_patient' => SearchFilter::STRATEGY_WORD_START,
    'maladie' => SearchFilter::STRATEGY_WORD_START,
    'date_test' => SearchFilter::STRATEGY_WORD_START,
    'created_at' => SearchFilter::STRATEGY_WORD_START,
    'nom_test' => SearchFilter::STRATEGY_WORD_START,
    'user' => SearchFilter::STRATEGY_WORD_START,
    'patient' => SearchFilter::STRATEGY_WORD_START,
    ])]
#[ApiFilter(OrderFilter::class, properties: ['created_at' => 'DESC'])]

class Examentest
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nom_test = null;

    #[ORM\Column(length: 255)]
    private ?string $maladie = null;

    #[ORM\Column(length: 255)]
    private ?string $nom_patient = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $date_test = null;

    #[ORM\Column (options: ['default' => 'CURRENT_TIMESTAMP'])]
    private ?\DateTimeImmutable $created_at = null;

    #[ORM\ManyToOne(inversedBy: 'examentests')]
    #[ORM\JoinColumn(nullable: false)]
    private ?User $user = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Patient $patient = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomTest(): ?string
    {
        return $this->nom_test;
    }

    public function setNomTest(string $nom_test): self
    {
        $this->nom_test = $nom_test;

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

    public function getNomPatient(): ?string
    {
        return $this->nom_patient;
    }

    public function setNomPatient(string $nom_patient): self
    {
        $this->nom_patient = $nom_patient;

        return $this;
    }

    public function getDateTest(): ?\DateTimeInterface
    {
        return $this->date_test;
    }

    public function setDateTest(\DateTimeInterface $date_test): self
    {
        $this->date_test = $date_test;

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

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

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
}
