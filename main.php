<?php

include_once "airport.php";
include_once "planes.php";

class planes {

    private string $name;
    private int $maxspeed;
    private bool $inTheAir;

    private function takeoff() {
        echo "Взлететь";
    }
    private function alighting() {
        echo "Приземлиться";
    }
    private function getStatus() {
        if ($inTheAir == true) {
            echo "Самолёт в воздухе";
        } else {
            echo "Самолёт на земле";
        }
    }
}
