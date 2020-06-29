<?php 

abstract class Employee 
{
    protected $name;
    protected $surname;

    public function __construct($name, $surname)
    {
        $this->name = $name;
        $this->surname = $surname;
    }

    public function getFullName()
    {
        return "{$this->name} {$this->surname}";
    }

    abstract public function withDrawSalary();
}