<?php
namespace App\Domain\Player;

use DateTimeInterface;
use App\Domain\Game\Game;
use Guess\Domain\Player\Player;

class Guess
{
    private int $id;
    private string $guess;
    private DateTimeInterface $createdAt;
    private Game $game;
    private Player $player;

    /**
     * Get the value of id
     *
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
     * Get the value of guess
     * @return string
     */
    public function getGuess(): string
    {
        return $this->guess;
    }

    /**
     * Set the value of guess
     * @param string $guess
     * @return self
     */
    public function setGuess(string $guess): self
    {
        $this->guess = $guess;

        return $this;
    }

    /**
     * Get the value of createdAt
     * @return DateTimeInterface
     */
    public function getCreatedAt(): DateTimeInterface
    {
        return $this->createdAt;
    }

    /**
     * Set the value of createdAt
     * @param DateTimeInterface $createdAt
     *
     * @return self
     */
    public function setCreatedAt(DateTimeInterface $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get the value of game
     * @return Game
     */
    public function getGame(): Game
    {
        return $this->game;
    }

    /**
     * Set the value of game
     * @param Game $game
     * @return self
     */
    public function setGame(Game $game): self
    {
        $this->game = $game;

        return $this;
    }

    /**
     * Get the value of player
     * @return Player
     */
    public function getPlayer(): Player
    {
        return $this->player;
    }

    /**
     * Set the value of player
     * @param Player $player
     * @return self
     */
    public function setPlayer(Player $player): self
    {
        $this->player = $player;

        return $this;
    }
}