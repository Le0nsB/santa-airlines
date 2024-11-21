<?php

require_once 'Aircraft.php';

class Flight {
    public $flightCode;
    public $origin;        
    public $destination;    
    public $departureTime;
    public $aircraft;

    public function __construct($flightCode, $origin, $destination, DateTime $departureTime, Aircraft $aircraft) {
        if (!is_array($origin) || !is_array($destination)) {
            throw new InvalidArgumentException('Origin and Destination must be arrays with keys: name, lat, lon');
        }
        
        $this->flightCode = $flightCode;
        $this->origin = $origin;
        $this->destination = $destination;
        $this->departureTime = $departureTime;
        $this->aircraft = $aircraft;
    }

    public function getFlightInfo() {
        $departure = $this->departureTime->format('Y-m-d H:i:s');
        $aircraftInfo = $this->aircraft->getAircraftInfo();
        
        return "Flight Code: $this->flightCode\nOrigin: {$this->origin['name']}\nDestination: {$this->destination['name']}\nDeparture Time: $departure\nAircraft Info: $aircraftInfo";
    }

    public function getDistance() {
        $radius = 6371; 

        $lat1 = deg2rad($this->origin['lat']);
        $lon1 = deg2rad($this->origin['lon']);
        $lat2 = deg2rad($this->destination['lat']);
        $lon2 = deg2rad($this->destination['lon']);

        $dLat = $lat2 - $lat1;
        $dLon = $lon2 - $lon1;

        $a = sin($dLat / 2) ** 2 + cos($lat1) * cos($lat2) * sin($dLon / 2) ** 2;
        $c = 2 * atan2(sqrt($a), sqrt(1 - $a));

        return $radius * $c; 
    }

    public function getDuration(){
        $attalums = $this->getDistance();
        $atrums = $this->aircraft->averageSpeed;
        $laiks = $attalums / $atrums * 60 + 30;

        return $laiks;
    }



}
?>
