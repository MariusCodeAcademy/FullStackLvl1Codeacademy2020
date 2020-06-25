<?php

class Vechicle
{
    // nurodom savybes
    private $wheelCount;
    private $fuelType;
    private $yearMade;

    // constuktoriu uzpildyti duomenims sukuriant 
    public function __construct($wheels, $fuel, $year)
    {
        $this->wheelCount = $wheels;
        $this->fuelType = $fuel;
        $this->yearMade = $year;
    }
}