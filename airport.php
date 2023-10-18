<?php

class airport {
    
    private int $planesOnPort;
    private int $planesOnParking;

    public function takeThePlane() {
        $planeOnPort++;
    }
    public function takeThePlane() {
        $planeOnPort--;
    }

    public function planeToParking() {
        $planesOnParking++;
    }
    public function planeFromParking() {
        $planesOnParking--;
    }
}