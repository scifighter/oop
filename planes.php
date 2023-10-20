<?php
// Как я понял - достаточно определить только отличие самолётов, а остальное
// определится за счёт наследования.
class planeMIG extends class planes {
    
    public function __construct($name, $maxspeed, $inTheAir)
    {
        $this->name = $name;
        $this->maxspeed = $maxspeed;
        $this->inTheAir = $inTheAir;
    }
    public function attack() {
        echo "Атаковать";
    }
}

class planeTU extends class planes {
}  