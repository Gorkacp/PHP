<?php 
require_once "Animal.php";

class Gato extends Animal {
    public function __construct(string $nombre, int $edad){
        parent::__construct($nombre, $edad);
    }

    public function hablar(): string{
        return "El gato " . $this->nombre . " maulla ";
    }
}
?>