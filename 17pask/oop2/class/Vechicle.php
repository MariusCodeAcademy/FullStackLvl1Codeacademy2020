<?php

class Vechicle
{
    // nurodom savybes
    protected $wheelCount;
    private $fuelType;
    protected $yearMade;

    // constuktoriu uzpildyti duomenims sukuriant 
    public function __construct($wheels, $fuel, $year)
    {
        $this->wheelCount = $wheels;
        $this->fuelType = $fuel;
        $this->yearMade = $year;
    }
}