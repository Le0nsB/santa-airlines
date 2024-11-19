<?php

require_once 'Aircraft.php'; // Nodrošinām piekļuvi Aircraft klasei

class Flight {
    public $flightCode;
    public $origin;
    public $destination;
    public $departureTime;
    public $aircraft;

    // Konstruktoram ir jāpieņem visi 5 argumenti
    public function __construct($flightCode, $origin, $destination, DateTime $departureTime, Aircraft $aircraft) {
        $this->flightCode = $flightCode;
        $this->origin = $origin;
        $this->destination = $destination;
        $this->departureTime = $departureTime;
        $this->aircraft = $aircraft;
    }

    // Metode, lai iegūtu pilnu lidojuma informāciju
    public function getFlightInfo() {
        $departure = $this->departureTime->format('Y-m-d H:i:s');
        $aircraftInfo = $this->aircraft->getAircraftInfo();
        
        return "Flight Code: $this->flightCode\nOrigin: $this->origin\nDestination: $this->destination\nDeparture Time: $departure\nAircraft Info: $aircraftInfo";
    }
}
?>
