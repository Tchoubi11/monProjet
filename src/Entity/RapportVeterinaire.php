<?php

namespace App\Entity;

use App\Repository\RapportVeterinaireRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: RapportVeterinaireRepository::class)]
class RapportVeterinaire
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    private ?string $etat = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $date = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $detail = null;

    #[ORM\Column(length: 50, nullable: true)]
    private ?string $repas = null;

    #[ORM\Column(nullable: true)]
    private ?int $grammage = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEtat(): ?string
    {
        return $this->etat;
    }

    public function setEtat(string $etat): static
    {
        $this->etat = $etat;

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

    public function getDetail(): ?string
    {
        return $this->detail;
    }

    public function setDetail(string $detail): static
    {
        $this->detail = $detail;

        return $this;
    }

    public function getRepas(): ?string
    {
        return $this->repas;
    }

    public function setRepas(?string $repas): static
    {
        $this->repas = $repas;

        return $this;
    }

    public function getGrammage(): ?int
    {
        return $this->grammage;
    }

    public function setGrammage(?int $grammage): static
    {
        $this->grammage = $grammage;

        return $this;
    }
}
