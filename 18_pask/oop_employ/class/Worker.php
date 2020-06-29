<?php

class Worker extends Employee
{
    // apsirasom savybes
    private $hoursWorked;
    private $hourPay;

    // konstruktorius
    public function __construct($name, $surname, $hourPay)
    {
        parent::__construct($name, $surname);
        $this->hoursWorked = 0;
        $this->hourPay = $hourPay;
    }

    // darbo valandu skaiciavimo funkcija
    public function work($hours)
    {
        $this->hoursWorked += $hours;
    }

    public function withDrawSalary()
    {
        // atlyginimas yra kiek valandu isdirbta padaugini is valandinio
        $amount = $this->hoursWorked * $this->hourPay;
        // nunuliname valandas uz kurias jau sumoketa
        $this->hoursWorked = 0;
        // graziname moketina suma
        return $amount;
    }



}