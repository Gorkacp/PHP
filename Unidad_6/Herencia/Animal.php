<?php 
// Crea la clase Animal y haz que los animales creados en el ejercicio anterior hereden de ella .
// Modifica algunos métodos e incluso el constructor de alguno de los animales.
// Nota: Al usar varias clases que extienden a la misma, es mejor utilizar require_once() 
// para evitarnos la carga de la clase principal de nuevo

class Animal{
    protected string $nombre;
    protected int $edad;

    public function __construct(string $nombre, int $edad){
        $this->nombre = $nombre;
        $this->edad = $edad;
    }

    public function hablar() : string {
        return "El animal hace un sonido";
    }

    public function getNombre(): string{
        return $this->nombre;
    }

    public function getEdad(): int {
        return $this->edad;
    }
}

?>