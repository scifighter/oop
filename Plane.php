<?php
// Как я понял - достаточно определить только отличие самолётов, а остальное
// определится за счёт наследования.
class PlaneMIG extends class Plane {
    
    public function attack() {
        echo "Атаковать";
    }
}

class PlaneTU extends class Plane {

}  