<?php
class Fight {
    //TO-DO: Possible refactor. Make this consts an enum?
    const LOW_AIM = 30;  
    const MED_AIM = 50;
    const HIGH_AIM = 70;
 
    function __construct(private Fighter $fighter1, private Fighter $fighter2){}

    public function fight() {
        while($this->areFightersAlive()) {
            //Decisión de diseño, puedo hacerlo desde fighter 1, o no.
            if($this->fighter1hits()) {
                //Resto vida a fighter 2
            }
            else {
                //resto vida a fighter 1
            }
            
        }
    }

    private function areFightersAlive(): bool {
        return $this->fighter1->getLife() > 0 && $this->fighter2->getLife() > 0;
    }

    private function fighter1hits(): bool {
        $hit_aim = self::MED_AIM;
        $random_number = rand(1,100);
        if ($this->isFighter1Stronger()) $hit_aim = self::HIGH_AIM;
        else if ($this->isFighter2Stronger()) $hit_aim = self::LOW_AIM;

        if($hit_aim <= $random_number) return true;
        return false;
    }

    private function isFighter1Stronger(): bool {
        return $this->fighter1->getStrength() > $this->fighter2->getStrength();
    }

    private function isFighter2Stronger(): bool {
        return $this->fighter1->getStrength() < $this->fighter2->getStrength();
    }
}

?>