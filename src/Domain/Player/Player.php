<?php
namespace Guess\Domain\Player;

use DateTimeImmutable;
use DateTimeInterface;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Security\Core\User\UserInterface;

class Player implements UserInterface
{
    private int $id;
    private string $username;
    private string $password;
    private string $email;
    private DateTimeInterface $createdAt;
    private int $point;
    private int $avatar;
    private bool $isActive;
    private ArrayCollection $guesses;

    public function __construct(){
        $this->avatar = 1;
        $this->point = 0;
        $this->createdAt = new DateTimeImmutable();
        $this->isActive = true;
    }

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
     * Get the value of username
     * @return string
     */
    public function getUsername(): string
    {
        return $this->username;
    }


    /**
     * Set the value of username
     * @param string $username
     * @return self
     */
    public function setUsername(string $username): self
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get the value of password
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * Set the value of password
     * @param string $password
     * @return self
     */
    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get the value of email
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * Set the value of email
     * @param string $email
     * @return self
     */
    public function setEmail(string $email): self
    {
        $this->email = $email;

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
     * @return self
     */
    public function setCreatedAt(DateTimeInterface $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get the value of point
     * @return int
     */
    public function getPoint(): int
    {
        return $this->point;
    }

    /**
     * Set the value of point
     * @param int $point
     * @return self
     */
    public function setPoint(int $point): self
    {
        $this->point = $point;

        return $this;
    }

    /**
     * Get the value of avatar
     * @return int
     */
    public function getAvatar(): int
    {
        return $this->avatar;
    }

    /**
     * Set the value of avatar
     * @param int $avatar
     * @return self
     */
    public function setAvatar(int $avatar): self
    {
        $this->avatar = $avatar;

        return $this;
    }

    /**
     * Get the value of isActive
     * @return bool
     */
    public function getIsActive(): bool
    {
        return $this->isActive;
    }

    /**
     * Set the value of isActive
     * @param bool $isActive
     * @return self
     */
    public function setIsActive(bool $isActive): self
    {
        $this->isActive = $isActive;

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

    public function getRole()
    {
        return ['ROLE_USER'];
    }

    public function getSlat()
    {
        return null;
    }

    public function eraseCredentials()
    {
    }
}