<?php 

class Job
{
    // apsirasom savybes
    private $id;
    private $title;
    private $amount;
    private $done;

    // construktoriaus funkcija
    public function __construct($title, $amount)
    {
        $this->title = $title;
        $this->amount = $amount;
        $this->done = false;
    }

    // funkcia grazinanti ID (getter)
    public function getId() 
    {
        return $this->id;
    }

    // getteris nustatyti ar darbas yra pabaigtas
    public function done()
    {
        return $this->done;
    }

    // funkcija gauti Pinigu sumai us darba
    public function getAmount()
    {
        return $this->amount;
    }

    public function getTitle()
    {
        return $this->title;
    }

    // funcija kuria iskvietus darbas yra uzbaigiamas
    public function finishJob()
    {
        $this->done = true;
    }

}