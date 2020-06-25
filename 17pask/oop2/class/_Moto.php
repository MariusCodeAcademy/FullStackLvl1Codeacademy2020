<?php
class Moto extends Vechicle
{
    private $passengerNumber;

    public function __construct($wheels, $fuel, $year, $passengerNumber)
    {
        parent::__construct($wheels, $fuel, $year);
        $this->passengerNumber = $passengerNumber;
    }
}