<?php
require_once "Footballteam.php";

/**
 * @author joshmuleshi <jmules>
 * 
 */

class ClubTeam extends FootballTeam 
{

    public function __construct(
        string $name, 
        string $coach, 
        string $createdAt, 
        private string $stadium
    ) {
        parent::__construct($name, $coach, $createdAt);
    }

    #[\Override]
    public function playMatch(): void 
    {
        echo $this->getName() . " is playing a club match at " . $this->stadium . ".\n";
    }

    public function getStadium(): string 
    {
        return $this->stadium;
    }

    public function setStadium($stadium): void 
    {
        $this->stadium = $stadium;
    }
}
