<?php 

class Truck extends Vechicle
{
    private $loadWeight;

    // norim perrasyti construktoriu is tevinio el. 
    public function __construct($wheels, $year, $loadWeight)
    {
        $this->wheelCount = $wheels;
        $this->yearMade = $year;
        $this->loadWeight = $loadWeight;
    }

    // pasidarom getteri funkcija gauti metams
    public function getYear() {
        return $this->yearMade;
    }

    


}