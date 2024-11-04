<?php 
require_once "Animal.php";

class Perro extends Animal {
    public function __construct(string $nombre, int $edad){
        parent::__construct($nombre, $edad);
    }

    public function hablar(): string {
        return "El perro " . $this->nombre . " ladra";
    }
}
?>