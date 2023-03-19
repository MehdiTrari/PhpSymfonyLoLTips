<?php

namespace App\Entity;

use App\Repository\UtilisateursRepository;
use Doctrine\ORM\Mapping as ORM;

use Symfony\Component\Validator\Constraints as Assert;


#[ORM\Entity(repositoryClass: UtilisateursRepository::class)]
class Utilisateurs
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    #[Assert\Length(min: 2, max: 50, minMessage: "Votre nom doit faire au moins 2 caractères", maxMessage: "Votre nom ne peut pas faire plus de 50 caractères")]
    private ?string $Nom = null;

    #[ORM\Column(length: 50)]
    #[Assert\Length(min: 2, max: 50, minMessage: "Votre prénom doit faire au moins 2 caractères", maxMessage: "Votre prénom ne peut pas faire plus de 50 caractères")]
    private ?string $Prenom = null;

    #[ORM\Column(length: 18)]
    #[Assert\Length(min: 3, max: 18, minMessage: "Votre pseudo doit faire au moins 3 caractères", maxMessage: "Votre pseudo ne peut pas faire plus de 18 caractères")]
    #[Assert\Regex(pattern: "/^[a-zA-Z0-9]+$/", message: "Votre pseudo ne peut contenir que des lettres et des chiffres")]
    #[Assert\Unique(message: "Ce pseudo est déjà utilisé")]
    private ?string $pseudo = null;

    #[ORM\Column(length: 255)]
    #[Assert\Email(message: "L'adresse mail n'est pas valide")]
    #[Assert\Unique(message: "Cette adresse mail est déjà utilisée")]
    private ?string $mail = null;

    #[ORM\Column(length: 255)]
    #[Assert\Length(min: 8, minMessage: "Votre mot de passe doit faire au moins 8 caractères")]
    #[Assert\Regex(pattern: "/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W).{8,}$/", message: "Votre mot de passe doit contenir au moins une minuscule, une majuscule, un chiffre et un caractère spécial")]
    private ?string $motdepasse = null;

    #[ORM\Column]
    private ?int $administrateur = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->Nom;
    }

    public function setNom(string $Nom): self
    {
        $this->Nom = $Nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->Prenom;
    }

    public function setPrenom(string $Prenom): self
    {
        $this->Prenom = $Prenom;

        return $this;
    }

    public function getPseudo(): ?string
    {
        return $this->pseudo;
    }

    public function setPseudo(string $pseudo): self
    {
        $this->pseudo = $pseudo;

        return $this;
    }

    public function getMail(): ?string
    {
        return $this->mail;
    }

    public function setMail(string $mail): self
    {
        $this->mail = $mail;

        return $this;
    }

    public function getMotdepasse(): ?string
    {
        return $this->motdepasse;
    }

    public function setMotdepasse(string $motdepasse): self
    {
        $this->motdepasse = $motdepasse;

        return $this;
    }

    public function getAdministrateur(): ?int
    {
        return $this->administrateur;
    }

    public function setAdministrateur(int $administrateur): self
    {
        $this->administrateur = $administrateur;

        return $this;
    }
}
