<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\UserRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\DBAL\Types\Types;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;
use ApiPlatform\Metadata\ApiFilter;
use ApiPlatform\Doctrine\Orm\Filter\SearchFilter;
use ApiPlatform\Doctrine\Orm\Filter\OrderFilter;

#[ApiResource]
#[ApiFilter(SearchFilter::class, strategy: 'word_start')]
#[ApiFilter(OrderFilter::class, properties: ['created_at' => 'DESC'])]
#[ORM\Entity(repositoryClass: UserRepository::class)]
class User implements UserInterface, PasswordAuthenticatedUserInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 180, unique: true)]
    private ?string $email = null;

    #[ORM\Column]
    private array $roles = [];

    /**
     * @var string|null The hashed password
     */
    #[ORM\Column]
    #[Assert\NotBlank]
    #[Assert\Length(
        min: 5,
        max: 20,
        minMessage: 'Your password must be at least {{ limit }} characters long',
        maxMessage: 'Your password name cannot be longer than {{ limit }} characters',
    )]
    private ?string $password = null;

    #[ORM\Column(length: 100)]
    private ?string $nom = null;

    #[ORM\Column(length: 255)]
    private ?string $adresse = null;
    
    #[ORM\Column(type: Types::SIMPLE_ARRAY)]
    private array $specialite = [];
  
    #[ORM\Column(length: 255)]
    private ?string $tel = null;

    #[ORM\Column (options: ['default' => 'CURRENT_TIMESTAMP'])]
    private ?\DateTimeImmutable $created_at = null;

    #[ORM\OneToMany(mappedBy: 'user', targetEntity: Rendezvous::class)]
    private Collection $rendezvouses;

    #[ORM\OneToMany(mappedBy: 'user', targetEntity: Patient::class)]
    private Collection $patients;

    #[ORM\OneToMany(mappedBy: 'user', targetEntity: Ordonance::class)]
    private Collection $ordonances;

    #[ORM\OneToMany(mappedBy: 'user', targetEntity: Medicament::class)]
    private Collection $medicaments;

    #[ORM\OneToMany(mappedBy: 'user', targetEntity: Categoriem::class)]
    private Collection $categoriems;

    #[ORM\OneToMany(mappedBy: 'user', targetEntity: Examentest::class)]
    private Collection $examentests;

    #[ORM\OneToMany(mappedBy: 'user', targetEntity: Examenresultat::class)]
    private Collection $examenresultats;

    #[ORM\OneToMany(mappedBy: 'user', targetEntity: Vital::class)]
    private Collection $vitals;

    public function __construct()
    {
        $this->roles = $roles ?? ["medecin", "reception", "admin"];
        $this->rendezvouses = new ArrayCollection();
        $this->patients = new ArrayCollection();
        $this->ordonances = new ArrayCollection();
        $this->medicaments = new ArrayCollection();
        $this->categoriems = new ArrayCollection();
        $this->examentests = new ArrayCollection();
        $this->examenresultats = new ArrayCollection();
        $this->vitals = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    // Update the getEmail() method to getUserIdentifier()
    public function getUserIdentifier(): string
    {
        return (string) $this->email;
    }

    // Remove the setEmail() method
    // Remove the setUsername() method

    // Update the setEmail() method to setUserIdentifier()
    public function setEmail(string $email): self
    {
        $this->email = $email;
        return $this;
    }

    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    public function setRoles(array $roles): self
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUsername(): string
    {
        return (string) $this->email;
    }

    /**
     * @see UserInterface
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function getSalt()
    {
        // not needed when using the "bcrypt" algorithm in security.yaml
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials()
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(?string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(?string $adresse): self
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getSpecialite(): array
    {
        return $this->specialite;
    }

    public function setSpecialite(array $specialite): self
    {
        $this->specialite = $specialite;

        return $this;
    }

    public function getTel(): ?string
    {
        return $this->tel;
    }

    public function setTel(?string $tel): self
    {
        $this->tel = $tel;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->created_at;
    }

    public function setCreatedAt(?\DateTimeImmutable $created_at): self
    {
        $this->created_at = $created_at;

        return $this;
    }

    /**
     * @return Collection|Rendezvous[]
     */
    public function getRendezvouses(): Collection
    {
        return $this->rendezvouses;
    }

    public function addRendezvous(Rendezvous $rendezvous): self
    {
        if (!$this->rendezvouses->contains($rendezvous)) {
            $this->rendezvouses[] = $rendezvous;
            $rendezvous->setUser($this);
        }

        return $this;
    }

    public function removeRendezvous(Rendezvous $rendezvous): self
    {
        if ($this->rendezvouses->contains($rendezvous)) {
            $this->rendezvouses->removeElement($rendezvous);
            // set the owning side to null (unless already changed)
            if ($rendezvous->getUser() === $this) {
                $rendezvous->setUser(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Patient[]
     */
    public function getPatients(): Collection
    {
        return $this->patients;
    }

    public function addPatient(Patient $patient): self
    {
        if (!$this->patients->contains($patient)) {
            $this->patients[] = $patient;
            $patient->setUser($this);
        }

        return $this;
    }

    public function removePatient(Patient $patient): self
    {
        if ($this->patients->contains($patient)) {
            $this->patients->removeElement($patient);
            // set the owning side to null (unless already changed)
            if ($patient->getUser() === $this) {
                $patient->setUser(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Ordonance[]
     */
    public function getOrdonances(): Collection
    {
        return $this->ordonances;
    }

    public function addOrdonance(Ordonance $ordonance): self
    {
        if (!$this->ordonances->contains($ordonance)) {
            $this->ordonances[] = $ordonance;
            $ordonance->setUser($this);
        }

        return $this;
    }

    public function removeOrdonance(Ordonance $ordonance): self
    {
        if ($this->ordonances->contains($ordonance)) {
            $this->ordonances->removeElement($ordonance);
            // set the owning side to null (unless already changed)
            if ($ordonance->getUser() === $this) {
                $ordonance->setUser(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Medicament[]
     */
    public function getMedicaments(): Collection
    {
        return $this->medicaments;
    }

    public function addMedicament(Medicament $medicament): self
    {
        if (!$this->medicaments->contains($medicament)) {
            $this->medicaments[] = $medicament;
            $medicament->setUser($this);
        }

        return $this;
    }

    public function removeMedicament(Medicament $medicament): self
    {
        if ($this->medicaments->contains($medicament)) {
            $this->medicaments->removeElement($medicament);
            // set the owning side to null (unless already changed)
            if ($medicament->getUser() === $this) {
                $medicament->setUser(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Categoriem[]
     */
    public function getCategoriems(): Collection
    {
        return $this->categoriems;
    }

    public function addCategoriem(Categoriem $categoriem): self
    {
        if (!$this->categoriems->contains($categoriem)) {
            $this->categoriems[] = $categoriem;
            $categoriem->setUser($this);
        }

        return $this;
    }

    public function removeCategoriem(Categoriem $categoriem): self
    {
        if ($this->categoriems->contains($categoriem)) {
            $this->categoriems->removeElement($categoriem);
            // set the owning side to null (unless already changed)
            if ($categoriem->getUser() === $this) {
                $categoriem->setUser(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Examentest[]
     */
    public function getExamentests(): Collection
    {
        return $this->examentests;
    }

    public function addExamentest(Examentest $examentest): self
    {
        if (!$this->examentests->contains($examentest)) {
            $this->examentests[] = $examentest;
            $examentest->setUser($this);
        }

        return $this;
    }

    public function removeExamentest(Examentest $examentest): self
    {
        if ($this->examentests->contains($examentest)) {
            $this->examentests->removeElement($examentest);
            // set the owning side to null (unless already changed)
            if ($examentest->getUser() === $this) {
                $examentest->setUser(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Examenresultat[]
     */
    public function getExamenresultats(): Collection
    {
        return $this->examenresultats;
    }

    public function addExamenresultat(Examenresultat $examenresultat): self
    {
        if (!$this->examenresultats->contains($examenresultat)) {
            $this->examenresultats[] = $examenresultat;
            $examenresultat->setUser($this);
        }

        return $this;
    }

    public function removeExamenresultat(Examenresultat $examenresultat): self
    {
        if ($this->examenresultats->contains($examenresultat)) {
            $this->examenresultats->removeElement($examenresultat);
            // set the owning side to null (unless already changed)
            if ($examenresultat->getUser() === $this) {
                $examenresultat->setUser(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Vital[]
     */
    public function getVitals(): Collection
    {
        return $this->vitals;
    }

    public function addVital(Vital $vital): self
    {
        if (!$this->vitals->contains($vital)) {
            $this->vitals[] = $vital;
            $vital->setUser($this);
        }

        return $this;
    }

    public function removeVital(Vital $vital): self
    {
        if ($this->vitals->contains($vital)) {
            $this->vitals->removeElement($vital);
            // set the owning side to null (unless already changed)
            if ($vital->getUser() === $this) {
                $vital->setUser(null);
            }
        }

        return $this;
    }
}
