<?php

namespace App\Entity;

use App\Repository\ChampionsRepository;
use DateTimeImmutable;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: ChampionsRepository::class)]
#[UniqueEntity(fields: ['Nom'], message: 'Ce champion existe déjà dans notre base de données')]
class Champions
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 30)]
    #[Assert\Length(min: 2, max: 30, minMessage: "Le nom du champion doit faire au moins 2 caractères", maxMessage: "Le nom du champion ne peut pas faire plus de 30 caractères")]
    private ?string $Nom = null;

    #[ORM\Column(length: 1500, nullable: true)]
    #[Assert\Length(min: 10, max: 1500, minMessage: "Le tips doit faire au moins 10 caractères", maxMessage: "Le tips ne peut pas faire plus de 1500 caractères")]
    private ?string $tips = null;

    #[ORM\Column(length: 20)]
    #[Assert\Length(min: 2, max: 20, minMessage: "Le type du champion doit faire au moins 2 caractères", maxMessage: "Le type du champion ne peut pas faire plus de 20 caractères")]
    private ?string $type = null;

    #[ORM\Column(type: 'datetime_immutable')]
    #[Assert\NotNull]
    private ?DateTimeImmutable $createdAt;

    // Constructeur
    public function __construct()
    {
        $this->createdAt = new \DateTimeImmutable();
    }

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

    public function getTips(): ?string
    {
        return $this->tips;
    }

    public function setTips(?string $tips): self
    {
        $this->tips = $tips;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function settype(string $type): self
    {
        $this->type = $type;

        return $this;
    }
}
