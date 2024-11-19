<?php

class Airport {
    public function __construct(public $iata,
                                public $latitude,
                                public $longitude,
                                ) {
    }
}