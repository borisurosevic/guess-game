<?php
namespace App\Domain\Team;

class Team
{
    private int $id;
    private string $name;
    private string $logo;

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
}