<?php 

class Student extends Person
{
    private $university;
    private $studentYear;

    public function __construct($name, $surname, $uni, $year )
    {
        // kreipiames i tevine klase kad issaugoti duomenis
        parent::__construct($name, $surname, '', '000');
        $this->university = $uni;
        $this->studentYear = $year;
    }

    public function setSurnameStud($newSurname){
        // pakeiciame paveldeta protected savybe
        $this->setSurname($newSurname);
    }

}