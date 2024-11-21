<?php

class Aircraft {
    public $manufacturer;
    public $model;
    public $seatCapacity;
    public $averageSpeed;

    // Konstruktoram ir jāpieņem visi 4 argumenti
    public function __construct($manufacturer, $model, $seatCapacity, $averageSpeed) {
        $this->manufacturer = $manufacturer;
        $this->model = $model;
        $this->seatCapacity = $seatCapacity;
        $this->averageSpeed = $averageSpeed;
    }

    // Metode, lai parādītu lidmašīnas informāciju
    public function getAircraftInfo() {
        return "Manufacturer: $this->manufacturer, Model: $this->model, Seats: $this->seatCapacity, Average Speed: $this->averageSpeed km/h";
    }
}
?>
