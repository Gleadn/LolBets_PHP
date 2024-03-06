<?php

namespace App\Entity;

use App\Repository\MatchsRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

#[ORM\Entity(repositoryClass: MatchsRepository::class)]
class Matchs
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    #[Groups(["getAll"])]
    private ?int $id = null;

    #[Groups(["getAll"])]
    #[ORM\Column(length: 255)]
    private ?string $LeagueName = null;

    #[Groups(["getAll"])]
    #[ORM\Column(length: 255)]
    private ?string $GameType = null;

    #[Groups(["getAll"])]
    #[ORM\Column(length: 255)]
    private ?string $Status = null;

    #[Groups(["getAll"])]
    #[ORM\Column]
    private ?int $Bo = null;

    #[Groups(["getAll"])]
    #[ORM\Column(length: 255)]
    private ?string $Team1Name = null;

    #[Groups(["getAll"])]
    #[ORM\Column(nullable: true)]
    private ?int $Team1GameWin = null;

    #[Groups(["getAll"])]
    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Team1Result = null;

    #[Groups(["getAll"])]
    #[ORM\Column(length: 255)]
    private ?string $Team2Name = null;

    #[Groups(["getAll"])]
    #[ORM\Column(nullable: true)]
    private ?int $Team2GameWin = null;

    #[Groups(["getAll"])]
    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Team2Result = null;

    #[ORM\OneToMany(mappedBy: 'Matchs', targetEntity: Bets::class)]
    private Collection $bets;

    public function __construct()
    {
        $this->bets = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLeagueName(): ?string
    {
        return $this->LeagueName;
    }

    public function setLeagueName(string $LeagueName): static
    {
        $this->LeagueName = $LeagueName;

        return $this;
    }

    public function getGameType(): ?string
    {
        return $this->GameType;
    }

    public function setGameType(string $GameType): static
    {
        $this->GameType = $GameType;

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

    public function getBo(): ?int
    {
        return $this->Bo;
    }

    public function setBo(int $Bo): static
    {
        $this->Bo = $Bo;

        return $this;
    }

    public function getTeam1Name(): ?string
    {
        return $this->Team1Name;
    }

    public function setTeam1Name(string $Team1Name): static
    {
        $this->Team1Name = $Team1Name;

        return $this;
    }

    public function getTeam1GameWin(): ?int
    {
        return $this->Team1GameWin;
    }

    public function setTeam1GameWin(?int $Team1GameWin): static
    {
        $this->Team1GameWin = $Team1GameWin;

        return $this;
    }

    public function getTeam1Result(): ?string
    {
        return $this->Team1Result;
    }

    public function setTeam1Result(?string $Team1Result): static
    {
        $this->Team1Result = $Team1Result;

        return $this;
    }

    public function getTeam2Name(): ?string
    {
        return $this->Team2Name;
    }

    public function setTeam2Name(string $Team2Name): static
    {
        $this->Team2Name = $Team2Name;

        return $this;
    }

    public function getTeam2GameWin(): ?int
    {
        return $this->Team2GameWin;
    }

    public function setTeam2GameWin(?int $Team2GameWin): static
    {
        $this->Team2GameWin = $Team2GameWin;

        return $this;
    }

    public function getTeam2Result(): ?string
    {
        return $this->Team2Result;
    }

    public function setTeam2Result(?string $Team2Result): static
    {
        $this->Team2Result = $Team2Result;

        return $this;
    }

    /**
     * @return Collection<int, Bets>
     */
    public function getBets(): Collection
    {
        return $this->bets;
    }

    public function addBet(Bets $bet): static
    {
        if (!$this->bets->contains($bet)) {
            $this->bets->add($bet);
            $bet->setMatchs($this);
        }

        return $this;
    }

    public function removeBet(Bets $bet): static
    {
        if ($this->bets->removeElement($bet)) {
            // set the owning side to null (unless already changed)
            if ($bet->getMatchs() === $this) {
                $bet->setMatchs(null);
            }
        }

        return $this;
    }

}
