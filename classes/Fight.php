<?php
class Fight {
    function __construct(private Fighter $fighter1, private Fighter $fighter2){}

    public function fight() {
        while($this->areFightersAlive()) {
            echo "HOLA".PHP_EOL;
        }
    }
    public function areFightersAlive(): bool {
        return $this->fighter1->getLife() > 0 && $this->fighter2->getLife() > 0;
    }
}

?>