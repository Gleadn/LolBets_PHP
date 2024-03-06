<?php

namespace App\Entity;

use App\Repository\BetsRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

#[ORM\Entity(repositoryClass: BetsRepository::class)]
class Bets
{
    #[Groups(["getAll"])]
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[Groups(["getAll"])]
    #[ORM\ManyToOne(inversedBy: 'bets')]
    private ?Matchs $Matchs = null;

    #[Groups(["getAll"])]
    #[ORM\Column]
    private ?bool $Team1Winning = null;

    #[Groups(["getAll"])]
    #[ORM\Column]
    private ?int $Team1GameWin = null;

    #[Groups(["getAll"])]
    #[ORM\Column]
    private ?bool $Team2Winning = null;

    #[Groups(["getAll"])]
    #[ORM\Column]
    private ?int $Team2GameWin = null;

    #[Groups(["getAll"])]
    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $CreatedAt = null;

    #[Groups(["getAll"])]
    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $UpdatedAt = null;

    #[Groups(["getAll"])]
    #[ORM\Column(length: 255)]
    private ?string $Status = null;

    #[ORM\ManyToOne(inversedBy: 'Bets')]
    private ?User $user = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMatchs(): ?Matchs
    {
        return $this->Matchs;
    }

    public function setMatchs(?Matchs $Matchs): static
    {
        $this->Matchs = $Matchs;

        return $this;
    }

    public function isTeam1Winning(): ?bool
    {
        return $this->Team1Winning;
    }

    public function setTeam1Winning(bool $Team1Winning): static
    {
        $this->Team1Winning = $Team1Winning;

        return $this;
    }

    public function getTeam1GameWin(): ?int
    {
        return $this->Team1GameWin;
    }

    public function setTeam1GameWin(int $Team1GameWin): static
    {
        $this->Team1GameWin = $Team1GameWin;

        return $this;
    }

    public function isTeam2Winning(): ?bool
    {
        return $this->Team2Winning;
    }

    public function setTeam2Winning(bool $Team2Winning): static
    {
        $this->Team2Winning = $Team2Winning;

        return $this;
    }

    public function getTeam2GameWin(): ?int
    {
        return $this->Team2GameWin;
    }

    public function setTeam2GameWin(int $Team2GameWin): static
    {
        $this->Team2GameWin = $Team2GameWin;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->CreatedAt;
    }

    public function setCreatedAt(\DateTimeInterface $CreatedAt): static
    {
        $this->CreatedAt = $CreatedAt;

        return $this;
    }

    public function getUpdatedAt(): ?\DateTimeInterface
    {
        return $this->UpdatedAt;
    }

    public function setUpdatedAt(\DateTimeInterface $UpdatedAt): static
    {
        $this->UpdatedAt = $UpdatedAt;

        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->Status;
    }

    public function setStatus(string $Status): static
    {
        $this->Status = $Status;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): static
    {
        $this->user = $user;

        return $this;
    }

}
