<?php
include "Aircraft.php";
include "Airport.php";
include "Flight.php";

echo "Wassup😛 <br><br>"; 
echo "(✈)  ";
$manaLidmasina = new Aircraft("Airbus", "A220-300", 120, 850);
var_dump($manaLidmasina);

echo "<br><br>";
echo "(🧳)  ";
$manaLidosta = new Airport("RIX", "56.924", "23.971");
var_dump($manaLidosta);

$departureTime = new DateTime('2024-12-01 14:00:00', new DateTimeZone('Europe/Riga'));


$flight = new Flight("SA503", "Riga International Airport", "London Heathrow", $departureTime, $manaLidmasina);
echo "<br><br>";
echo $flight->getFlightInfo();
