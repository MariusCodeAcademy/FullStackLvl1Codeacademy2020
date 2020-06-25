<?php

class Fruit
{
    // properties savybes 
    public $name;
    public $color; 


    // Methods metodai
    public function set_name($paduotasName) {
        $this->name = $paduotasName;
    }

    // getteris 
    public function get_color() {
        return $this->color;

    }

}

