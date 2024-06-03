<?php

require_once "Footballteam.php";

$firstClub = new ClubTeam("Mazembe", "Mputu", "1956", "TP Mazembe");
echo $firstClub->getName() . "\n";
echo $firstClub->getStadium() . "\n";

$firstCountry = new NationalTeam("Leopard", "Ibenge","1965","RDC");
echo $firstCountry->getName() . "\n";
echo $firstCountry->getCountry() . "\n";