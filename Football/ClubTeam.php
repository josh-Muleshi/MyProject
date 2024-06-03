<?php
require_once "Footballteam.php";

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
