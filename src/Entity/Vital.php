<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\VitalRepository;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Doctrine\Orm\Filter\SearchFilter;
use ApiPlatform\Doctrine\Orm\Filter\OrderFilter;
use ApiPlatform\Metadata\ApiFilter;

#[ORM\Entity(repositoryClass: VitalRepository::class)]
#[ApiResource]
#[ApiFilter(SearchFilter::class, properties:[

    'id' => SearchFilter::STRATEGY_WORD_START,
    'patient.id' => SearchFilter::STRATEGY_EXACT,   
    'nom_patient' => SearchFilter::STRATEGY_WORD_START,
    
    ])]
#[ApiFilter(OrderFilter::class, properties: ['created_at' => 'DESC'])]
class Vital
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $assurance = null;

    #[ORM\Column(length: 255)]
    private ?string $antecedents_medicaux = null;

    #[ORM\Column(length: 255)]
    private ?string $allergies = null;

    #[ORM\Column(length: 255)]
    private ?string $medicament_actuel = null;

    #[ORM\Column(length: 255)]
    private ?string $nemuro_assurance = null;

    #[ORM\Column(length: 255)]
    private ?string $groupe_sanguin = null;

    #[ORM\Column(length: 255)]
    private ?string $poids = null;

    #[ORM\Column(length: 255)]
    private ?string $taille = null;

    #[ORM\Column(length: 255)]
    private ?string $tension_artetielle = null;

    #[ORM\Column(length: 255)]
    private ?string $frequence_cardiaque = null;

    #[ORM\Column(length: 255)]
    private ?string $antecedents_familiaux = null;

    

    #[ORM\ManyToOne(inversedBy: 'vitals')]
    #[ORM\JoinColumn(nullable: false)]
    private ?User $user = null;

    #[ORM\Column (options: ['default' => 'CURRENT_TIMESTAMP'])]  
      private ?\DateTimeImmutable $created_at = null;

    #[ORM\Column(length: 255)]
    private ?string $nom_patient = null;

    #[ORM\OneToOne]
    #[ORM\JoinColumn(nullable: false, onDelete: 'CASCADE')]
    private ?Patient $patient = null;

   

  
    

    
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAssurance(): ?string
    {
        return $this->assurance;
    }

    public function setAssurance(string $assurance): self
    {
        $this->assurance = $assurance;

        return $this;
    }

    public function getAntecedentsMedicaux(): ?string
    {
        return $this->antecedents_medicaux;
    }

    public function setAntecedentsMedicaux(string $antecedents_medicaux): self
    {
        $this->antecedents_medicaux = $antecedents_medicaux;

        return $this;
    }

    public function getAllergies(): ?string
    {
        return $this->allergies;
    }

    public function setAllergies(string $allergies): self
    {
        $this->allergies = $allergies;

        return $this;
    }

    public function getMedicamentActuel(): ?string
    {
        return $this->medicament_actuel;
    }

    public function setMedicamentActuel(string $medicament_actuel): self
    {
        $this->medicament_actuel = $medicament_actuel;

        return $this;
    }

    public function getNemuroAssurance(): ?string
    {
        return $this->nemuro_assurance;
    }

    public function setNemuroAssurance(string $nemuro_assurance): self
    {
        $this->nemuro_assurance = $nemuro_assurance;

        return $this;
    }

    public function getGroupeSanguin(): ?string
    {
        return $this->groupe_sanguin;
    }

    public function setGroupeSanguin(string $groupe_sanguin): self
    {
        $this->groupe_sanguin = $groupe_sanguin;

        return $this;
    }

    public function getPoids(): ?string
    {
        return $this->poids;
    }

    public function setPoids(string $poids): self
    {
        $this->poids = $poids;

        return $this;
    }

    public function getTaille(): ?string
    {
        return $this->taille;
    }

    public function setTaille(string $taille): self
    {
        $this->taille = $taille;

        return $this;
    }

    public function getTensionArtetielle(): ?string
    {
        return $this->tension_artetielle;
    }

    public function setTensionArtetielle(string $tension_artetielle): self
    {
        $this->tension_artetielle = $tension_artetielle;

        return $this;
    }

    public function getFrequenceCardiaque(): ?string
    {
        return $this->frequence_cardiaque;
    }

    public function setFrequenceCardiaque(string $frequence_cardiaque): self
    {
        $this->frequence_cardiaque = $frequence_cardiaque;

        return $this;
    }

    public function getAntecedentsFamiliaux(): ?string
    {
        return $this->antecedents_familiaux;
    }

    public function setAntecedentsFamiliaux(string $antecedents_familiaux): self
    {
        $this->antecedents_familiaux = $antecedents_familiaux;

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

    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->created_at;
    }

    public function setCreatedAt(\DateTimeImmutable $created_at): self
    {
        $this->created_at = $created_at;

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

    public function getPatient(): ?Patient
    {
        return $this->patient;
    }

    public function setPatient(Patient $patient): self
    {
        $this->patient = $patient;

        return $this;
    }

    



    
}
