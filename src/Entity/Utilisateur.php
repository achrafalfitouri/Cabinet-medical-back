<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;

use App\Repository\UtilisateurRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;

#[ORM\Entity(repositoryClass: UtilisateurRepository::class)]
#[ApiResource]
class Utilisateur implements UserInterface, PasswordAuthenticatedUserInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 180, unique: true)]
    private ?string $email = null;

    #[ORM\Column]
    private ?array $roles = null;
   

    /**
     * @var string The hashed password
     */
    #[ORM\Column]
    private ?string $password = null;

    #[ORM\Column(length: 100)]
    private ?string $nom = null;

    #[ORM\Column(length: 255)]
    private ?string $adresse = null;

    #[ORM\Column(length: 255)]
    private ?string $tel = null;

    #[ORM\Column (options: ['default' => 'CURRENT_TIMESTAMP'])]
    private ?\DateTimeImmutable $created_at = null;

    #[ORM\OneToMany(mappedBy: 'utilisateur', targetEntity: Rendezvous::class)]
    private Collection $rendezvouses;

    #[ORM\OneToMany(mappedBy: 'utilisateur', targetEntity: Patient::class)]
    private Collection $patients;

    #[ORM\OneToMany(mappedBy: 'utilisateur', targetEntity: Ordonance::class)]
    private Collection $ordonances;

    #[ORM\OneToMany(mappedBy: 'utilisateur', targetEntity: Medicament::class)]
    private Collection $medicaments;

    #[ORM\OneToMany(mappedBy: 'utilisateur', targetEntity: Categoriem::class)]
    private Collection $categoriems;

    #[ORM\OneToMany(mappedBy: 'utilisateur', targetEntity: Examentest::class)]
    private Collection $examentests;

    #[ORM\OneToMany(mappedBy: 'utilisateur', targetEntity: Examenresultat::class)]
    private Collection $examenresultats;

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
    }

    
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUserIdentifier(): string
    {
        return (string) $this->email;
    }

    /**
     * @see UserInterface
     */
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
     * @see PasswordAuthenticatedUserInterface
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
    public function eraseCredentials()
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(string $adresse): self
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getTel(): ?string
    {
        return $this->tel;
    }

    public function setTel(string $tel): self
    {
        $this->tel = $tel;

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

    /**
     * @return Collection<int, Rendezvous>
     */
    public function getRendezvouses(): Collection
    {
        return $this->rendezvouses;
    }

    public function addRendezvouse(Rendezvous $rendezvouse): self
    {
        if (!$this->rendezvouses->contains($rendezvouse)) {
            $this->rendezvouses->add($rendezvouse);
            $rendezvouse->setUtilisateur($this);
        }

        return $this;
    }

    public function removeRendezvouse(Rendezvous $rendezvouse): self
    {
        if ($this->rendezvouses->removeElement($rendezvouse)) {
            // set the owning side to null (unless already changed)
            if ($rendezvouse->getUtilisateur() === $this) {
                $rendezvouse->setUtilisateur(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Patient>
     */
    public function getPatients(): Collection
    {
        return $this->patients;
    }

    public function addPatient(Patient $patient): self
    {
        if (!$this->patients->contains($patient)) {
            $this->patients->add($patient);
            $patient->setUtilisateur($this);
        }

        return $this;
    }

    public function removePatient(Patient $patient): self
    {
        if ($this->patients->removeElement($patient)) {
            // set the owning side to null (unless already changed)
            if ($patient->getUtilisateur() === $this) {
                $patient->setUtilisateur(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Ordonance>
     */
    public function getOrdonances(): Collection
    {
        return $this->ordonances;
    }

    public function addOrdonance(Ordonance $ordonance): self
    {
        if (!$this->ordonances->contains($ordonance)) {
            $this->ordonances->add($ordonance);
            $ordonance->setUtilisateur($this);
        }

        return $this;
    }

    public function removeOrdonance(Ordonance $ordonance): self
    {
        if ($this->ordonances->removeElement($ordonance)) {
            // set the owning side to null (unless already changed)
            if ($ordonance->getUtilisateur() === $this) {
                $ordonance->setUtilisateur(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Medicament>
     */
    public function getMedicaments(): Collection
    {
        return $this->medicaments;
    }

    public function addMedicament(Medicament $medicament): self
    {
        if (!$this->medicaments->contains($medicament)) {
            $this->medicaments->add($medicament);
            $medicament->setUtilisateur($this);
        }

        return $this;
    }

    public function removeMedicament(Medicament $medicament): self
    {
        if ($this->medicaments->removeElement($medicament)) {
            // set the owning side to null (unless already changed)
            if ($medicament->getUtilisateur() === $this) {
                $medicament->setUtilisateur(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Categoriem>
     */
    public function getCategoriems(): Collection
    {
        return $this->categoriems;
    }

    public function addCategoriem(Categoriem $categoriem): self
    {
        if (!$this->categoriems->contains($categoriem)) {
            $this->categoriems->add($categoriem);
            $categoriem->setUtilisateur($this);
        }

        return $this;
    }

    public function removeCategoriem(Categoriem $categoriem): self
    {
        if ($this->categoriems->removeElement($categoriem)) {
            // set the owning side to null (unless already changed)
            if ($categoriem->getUtilisateur() === $this) {
                $categoriem->setUtilisateur(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Examentest>
     */
    public function getExamentests(): Collection
    {
        return $this->examentests;
    }

    public function addExamentest(Examentest $examentest): self
    {
        if (!$this->examentests->contains($examentest)) {
            $this->examentests->add($examentest);
            $examentest->setUtilisateur($this);
        }

        return $this;
    }

    public function removeExamentest(Examentest $examentest): self
    {
        if ($this->examentests->removeElement($examentest)) {
            // set the owning side to null (unless already changed)
            if ($examentest->getUtilisateur() === $this) {
                $examentest->setUtilisateur(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Examenresultat>
     */
    public function getExamenresultats(): Collection
    {
        return $this->examenresultats;
    }

    public function addExamenresultat(Examenresultat $examenresultat): self
    {
        if (!$this->examenresultats->contains($examenresultat)) {
            $this->examenresultats->add($examenresultat);
            $examenresultat->setUtilisateur($this);
        }

        return $this;
    }

    public function removeExamenresultat(Examenresultat $examenresultat): self
    {
        if ($this->examenresultats->removeElement($examenresultat)) {
            // set the owning side to null (unless already changed)
            if ($examenresultat->getUtilisateur() === $this) {
                $examenresultat->setUtilisateur(null);
            }
        }

        return $this;
    }

   
}