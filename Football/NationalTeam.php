<?php

require_once "Footballteam.php";

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
