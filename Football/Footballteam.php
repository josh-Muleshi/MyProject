<?php

abstract class FootballTeam 
{

    public function __construct(
        private string $name,
        private string $coach,
        private string $createdAt
    ) {
    }

    abstract public function playMatch(): void;

    public function getName(): string 
    {
        return $this->name;
    }

    public function setName($name): void 
    {
        $this->name = $name;
    }

    public function getCoach(): string 
    {
        return $this->coach;
    }

    public function setCoach($coach): void 
    {
        $this->coach = $coach;
    }

    public function getCreatedAt(): string 
    {
        return $this->createdAt;
    }

    public function setcreatedAt($createdAt): void 
    {
        $this->createdAt = $createdAt;
    }
}



