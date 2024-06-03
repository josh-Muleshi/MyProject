<?php

require_once "Footballteam.php";
require_once "ClubTeam.php";
require_once "NationalTeam.php";

$firstClub = new ClubTeam("Mazembe", "Mputu", "1956", "TP Mazembe");
echo $firstClub->getName() . "\n";
echo $firstClub->getStadium() . "\n";

$firstCountry = new NationalTeam("Leopard", "Ibenge","1965","RDC");
echo $firstCountry->getName() . "\n";
echo $firstCountry->getCountry() . "\n";