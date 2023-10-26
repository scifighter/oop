<?php

include_once "Airport.php";
include_once "Mig.php";
include_once "Tu.php";

class Plane {

    private string $name;
    private int $maxspeed;
    private bool $inTheAir;

    public function __construct($name, $maxspeed, $inTheAir) {
        $this->name = $name;
        $this->maxspeed = $maxspeed;
        $this->inTheAir = $inTheAir;
    }

    public static function takeoff() {
        echo "Взлететь";
        $inTheAir = true;
    }
    public static function alighting() {
        echo "Приземлиться";
        $inTheAir = false;
    }
    public function getStatus() {
        if ($inTheAir == true) {
            echo "Самолёт в воздухе";
        } else {
            echo "Самолёт на земле";
        }
    }
}
