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

echo "<br><br>";

$origin = ["name" => "Riga International Airport", "lat" => 56.9236, "lon" => 23.9711];

$destination = ["name" => "London Heathrow", "lat" => 51.4700, "lon" => -0.4543];

$departureTime = new DateTime('2024-12-01 14:00:00', new DateTimeZone('Europe/Riga'));

$flight = new Flight("SA503", $origin, $destination, $departureTime, $manaLidmasina);

echo nl2br($flight->getFlightInfo() . "\n");

echo "Distance: " . $flight->getDistance() . " km\n";
echo "<br> Duration:" . $flight->getDuration();
?>
