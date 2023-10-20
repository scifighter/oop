<?php

include_once "airport.php";
include_once "planes.php";

class planes {

    private string $name;
    private int $maxspeed;
    private bool $inTheAir;

    public function __construct($name, $maxspeed, $inTheAir)
    {
        $this->name = $name;
        $this->maxspeed = $maxspeed;
        $this->inTheAir = $inTheAir;
    }

    public function takeoff() 
    {
        echo "Взлететь";
        $inTheAir = true;
    }
    public function alighting() 
    {
        echo "Приземлиться";
        $inTheAir = false;
    }
    public function getStatus() 
    {
        if ($inTheAir == true) 
        {
            echo "Самолёт в воздухе";
        } else 
        {
            echo "Самолёт на земле";
        }
    }
}
