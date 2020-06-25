<?php 

class Person
{
    public $name;
    protected $surname;
    private $ocupation;
    private $pinCode;

    public function __construct($name, $surname, $ocupation, $pinCode)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->ocupation = $ocupation;
        $this->pinCode = $pinCode;
    }

    // // norim pakeisti pin koda
    // public function setNewPin($code){
    //     // realizuojamos apsaugos
    //     if ($_SESSION['admin'] === true) {
    //         $this->pinCode = $code;
    //         echo "pin was changed";
    //     } else {
    //         echo 'errror, you are not authorized to do this.';
    //     }
        
    // }

    // set surname metodas
    protected function setSurname($newSurname){
        $this->surname = $newSurname;
    } 
}