<?php
class Fight {
    function __construct(private Fighter $fighter1, private Fighter $fighter2){}

    public function fight() {
        while($this->areFightersAlive()) {
            //Decisión de diseño, puedo hacerlo desde fighter 1, o no.
            $fighter1_aim = $this->getAim();
            var_dump($fighter1_aim);
            exit();
        }
    }

    private function areFightersAlive(): bool {
        return $this->fighter1->getLife() > 0 && $this->fighter2->getLife() > 0;
    }

    private function getAim(): int {
        if ($this->isFighter1Stronger()) return 70;
        else if ($this->isFighter2Stronger()) return 30;
        else return 50;
    }

    private function isFighter1Stronger(): bool {
        return $this->fighter1->getStrength() > $this->fighter2->getStrength();
    }

    private function isFighter2Stronger(): bool {
        return $this->fighter1->getStrength() < $this->fighter2->getStrength();
    }
}

?>