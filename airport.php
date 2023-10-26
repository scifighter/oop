<?php

class Airport {

    private $planesOnPort;
    private $planesOnParking;
    
    public function __construct($planesOnPort, $planesOnParking)
    {
        $this->planesOnPort = $planesOnPort;
        $this->planesOnParking = $planesOnParking;
    }
    
    public function takePlane()
    {
        $this->planesOnPort++;
        Plane::alighting(); // Не понял как правильно использовать функцию, по отношению к конкретному объекту самолёта
        return "Самолет принят, самолётов в аэропорте: ".$this->planesOnPort;
    }
    public function letPlane()
    {   
        Plane::takeoff();
        $this->planesOnPort--;
        return "Самолёт взлетел, самолётов в аэропорте: ".$this->planesOnPort;
    }
    
    public function planeToParking()
    {
        $this->planesOnPort++;
        return "Самолёт отправлен на парковку, самолётов на парковке: ".$this->planesOnParking;
    }

    public function createPlane($planeType)
    {
        if ($planeType == 'tu') 
        {
            $planes[] = new planeTU();
        } else 
        {
            $planes[] = new planeMIG();
        }
    }

    public function destructAllPlanes()
    {
        unset($plane    );
    }
}