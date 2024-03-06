<?php

namespace App\Entity;

use App\Repository\TempMatchRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TempMatchRepository::class)]
class TempMatch
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $startTime = null;

    #[ORM\Column(length: 255)]
    private ?string $state = null;

    #[ORM\Column(length: 255)]
    private ?string $blockName = null;

    #[ORM\Column(length: 255)]
    private ?string $leagueSlug = null;

    #[ORM\Column(length: 255)]
    private ?string $leagueName = null;

    #[ORM\Column(length: 255)]
    private ?string $matchId = null;

    #[ORM\Column(length: 255)]
    private ?string $team1Name = null;

    #[ORM\Column(length: 255)]
    private ?string $team1Code = null;

    #[ORM\Column(length: 255)]
    private ?string $team2Name = null;

    #[ORM\Column(length: 255)]
    private ?string $team2Code = null;

    #[ORM\Column]
    private ?int $team1GameWin = null;

    #[ORM\Column]
    private ?int $team2GameWin = null;

    #[ORM\Column]
    private ?int $strategyType = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $team1Result = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $team2Result = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getStartTime(): ?string
    {
        return $this->startTime;
    }

    public function setStartTime(string $startTime): static
    {
        $this->startTime = $startTime;

        return $this;
    }

    public function getState(): ?string
    {
        return $this->state;
    }

    public function setState(string $state): static
    {
        $this->state = $state;

        return $this;
    }

    public function getBlockName(): ?string
    {
        return $this->blockName;
    }

    public function setBlockName(string $blockName): static
    {
        $this->blockName = $blockName;

        return $this;
    }

    public function getLeagueSlug(): ?string
    {
        return $this->leagueSlug;
    }

    public function setLeagueSlug(string $leagueSlug): static
    {
        $this->leagueSlug = $leagueSlug;

        return $this;
    }

    public function getLeagueName(): ?string
    {
        return $this->leagueName;
    }

    public function setLeagueName(string $leagueName): static
    {
        $this->leagueName = $leagueName;

        return $this;
    }

    public function getMatchId(): ?string
    {
        return $this->matchId;
    }

    public function setMatchId(string $matchId): static
    {
        $this->matchId = $matchId;

        return $this;
    }

    public function getTeam1Name(): ?string
    {
        return $this->team1Name;
    }

    public function setTeam1Name(string $team1Name): static
    {
        $this->team1Name = $team1Name;

        return $this;
    }

    public function getTeam1Code(): ?string
    {
        return $this->team1Code;
    }

    public function setTeam1Code(string $team1Code): static
    {
        $this->team1Code = $team1Code;

        return $this;
    }

    public function getTeam2Name(): ?string
    {
        return $this->team2Name;
    }

    public function setTeam2Name(string $team2Name): static
    {
        $this->team2Name = $team2Name;

        return $this;
    }

    public function getTeam2Code(): ?string
    {
        return $this->team2Code;
    }

    public function setTeam2Code(string $team2Code): static
    {
        $this->team2Code = $team2Code;

        return $this;
    }

    public function getTeam1GameWin(): ?int
    {
        return $this->team1GameWin;
    }

    public function setTeam1GameWin(int $team1GameWin): static
    {
        $this->team1GameWin = $team1GameWin;

        return $this;
    }

    public function getTeam2GameWin(): ?int
    {
        return $this->team2GameWin;
    }

    public function setTeam2GameWin(int $team2GameWin): static
    {
        $this->team2GameWin = $team2GameWin;

        return $this;
    }

    public function getStrategyType(): ?int
    {
        return $this->strategyType;
    }

    public function setStrategyType(int $strategyType): static
    {
        $this->strategyType = $strategyType;

        return $this;
    }

    public function getTeam1Result(): ?string
    {
        return $this->team1Result;
    }

    public function setTeam1Result(?string $team1Result): static
    {
        $this->team1Result = $team1Result;

        return $this;
    }

    public function getTeam2Result(): ?string
    {
        return $this->team2Result;
    }

    public function setTeam2Result(?string $team2Result): static
    {
        $this->team2Result = $team2Result;

        return $this;
    }
}
