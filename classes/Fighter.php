<?php 

class Fighter {

    private string $name;
    private int $life;
    private int $strenght;
    private int $defense;

    function __construct(string $name, int $strenght, int $defense) {
        $this->name = $name;
        $this->life = 10;
        $this->strenght = $strenght;
        $this->defense = $defense;
    }

    public function getName(): string {
        return $this->name;
    }

    public function getLife(): int {
        return $this->life;
    }

    public function getStrength(): int {
        return $this->strenght;
    }

    public function getDefense(): int {
        return $this->defense;
    }

}
?>
