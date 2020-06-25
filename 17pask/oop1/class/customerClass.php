<?php 


class Customer
{
    // klases savybes 
    public $name;
    public $surname;
    public $accountNr;

    // construktoriaus funkcija, vygdoma kai sukuriamas objektas
    public function __construct($fName, $fSurname, $fAccount)
    {
        // uzpildyti visus kliento duomenis sukuriant objekta
        $this->name = $fName;
        $this->surname = $fSurname;
        $this->accountNr = $fAccount;
    }

    


}