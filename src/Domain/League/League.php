<?php
namespace App\Domain\League;

class League
{
    private int $id;
    private string $name;
    private string $teamNameSlugged;
    private string $logo;
    private int $leagueApiId;



    /**
     * Get the value of id
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Set the value of id
     * @param int $id
     * @return self
     */
    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of name
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Set the value of name
     * @param string $name
     * @return self
     */
    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of teamNameSlugged
     * @return string
     */
    public function getTeamNameSlugged(): string
    {
        return $this->teamNameSlugged;
    }

    /**
     * Set the value of teamNameSlugged
     * @param string $teamNameSlugged
     * @return self
     */
    public function setTeamNameSlugged(string $teamNameSlugged): self
    {
        $this->teamNameSlugged = $teamNameSlugged;

        return $this;
    }

    /**
     * Get the value of logo
     * @return string
     */
    public function getLogo(): string
    {
        return $this->logo;
    }

    /**
     * Set the value of logo
     * @param string $logo
     * @return self
     */
    public function setLogo(string $logo): self
    {
        $this->logo = $logo;

        return $this;
    }

    /**
     * Get the value of leagueApiId
     * @return int
     */
    public function getLeagueApiId(): int
    {
        return $this->leagueApiId;
    }

    /**
     * Set the value of leagueApiId
     * @param int $leagueApiId
     * @return self
     */
    public function setLeagueApiId(int $leagueApiId): self
    {
        $this->leagueApiId = $leagueApiId;

        return $this;
    }
}