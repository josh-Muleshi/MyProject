<?php

abstract class FootballTeam {

    public function __construct(
        private string $name,
        private string $coach,
        private string $createdAt
    ) {
    }

    abstract public function playMatch();

    public function getName(): string {
        return $this->name;
    }

    public function setName($name): void {
        $this->name = $name;
    }

    public function getCoach(): string {
        return $this->coach;
    }

    public function setCoach($coach): void {
        $this->coach = $coach;
    }

    public function getCreatedAt(): string {
        return $this->createdAt;
    }

    public function setEstablishedYear($createdAt): void {
        $this->createdAt = $createdAt;
    }
}


class ClubTeam extends FootballTeam {

    public function __construct(string $name, string $coach, string $createdAt, private string $stadium) {
        parent::__construct($name, $coach, $createdAt);
    }

    public function playMatch() {
        echo $this->getName() . " is playing a club match at " . $this->stadium . ".\n";
    }

    public function getStadium() {
        return $this->stadium;
    }

    public function setStadium($stadium) {
        $this->stadium = $stadium;
    }
}

class NationalTeam extends FootballTeam {

    public function __construct(string $name, string $coach, string $createdAt, private string $country) {
        parent::__construct($name, $coach, $createdAt);
    }

    public function playMatch() {
        echo $this->getName() . " is playing an international match for " . $this->country . ".\n";
    }

    public function getCountry() {
        return $this->country;
    }

    public function setCountry($country) {
        $this->country = $country;
    }
}
