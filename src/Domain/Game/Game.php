<?php
namespace App\Domain\Game;

use DateTimeInterface;
use App\Domain\League\League;
use App\Domain\Team\Team;
use Doctrine\Common\Collections\ArrayCollection;

class Game
{
    private int $id;
    private string $score;
    private Team $homeTeam;
    private Team $awayTeam;
    private DateTimeInterface $gameTime;
    private ArrayCollection $guesses;
    private League $league;

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
     * Get the value of score
     * @return string
     */
    public function getScore(): string
    {
        return $this->score;
    }

    /**
     * Set the value of score
     * @param string $score
     * @return self
     */
    public function setScore(string $score): self
    {
        $this->score = $score;

        return $this;
    }

    /**
     * Get the value of homeTeam
     * @return Team
     */
    public function getHomeTeam(): Team
    {
        return $this->homeTeam;
    }

    /**
     * Set the value of homeTeam
     * @param Team $homeTeam
     * @return self
     */
    public function setHomeTeam(Team $homeTeam): self
    {
        $this->homeTeam = $homeTeam;

        return $this;
    }

    /**
     * Get the value of awayTeam
     * @return Team
     */
    public function getAwayTeam(): Team
    {
        return $this->awayTeam;
    }

    /**
     * Set the value of awayTeam
     * @param Team $awayTeam
     * @return self
     */
    public function setAwayTeam(Team $awayTeam): self
    {
        $this->awayTeam = $awayTeam;

        return $this;
    }

    /**
     * Get the value of gameTime
     * @return DateTimeInterface
     */
    public function getGameTime(): DateTimeInterface
    {
        return $this->gameTime;
    }

    /**
     * Set the value of gameTime
     * @param DateTimeInterface $gameTime
     * @return self
     */
    public function setGameTime(DateTimeInterface $gameTime): self
    {
        $this->gameTime = $gameTime;

        return $this;
    }

    /**
     * Get the value of guesses
     * @return ArrayCollection
     */
    public function getGuesses(): ArrayCollection
    {
        return $this->guesses;
    }

    /**
     * Set the value of guesses
     * @param ArrayCollection $guesses
     * @return self
     */
    public function setGuesses(ArrayCollection $guesses): self
    {
        $this->guesses = $guesses;

        return $this;
    }

    /**
     * Get the value of league
     * @return League
     */
    public function getLeague(): League
    {
        return $this->league;
    }

    /**
     * Set the value of league
     * @param League $league
     * @return self
     */
    public function setLeague(League $league): self
    {
        $this->league = $league;

        return $this;
    }
}