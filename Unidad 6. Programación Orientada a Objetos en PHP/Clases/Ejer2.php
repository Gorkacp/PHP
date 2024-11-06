<?php 
// Modifica el constructor anterior y usa la promoción de propiedades de PHP 8

class Coche {
    public function __construct(
        private string $color = "Blanco",
        private string $marca= "Genérica",
        private string $modelo = "Modelo Base",
        private int $caballos = 132,
        private int $plazas = 2,
        private int $velocidad = 34
    ){}

    //                                             Métodos
    public function acelerar(): void{
        $this->velocidad +=1;
    }

    public function frenar(): void{
        if ($this->velocidad > 0){
            $this->velocidad -=1;
        }
    }

    public function getColor(): string {
        return $this->color;
    }

    public function getMarca(): string {
        return $this->marca;
    }

    public function getModelo(): string {
        return $this->modelo;
    }

    public function getVelocidad(): int {
        return $this->velocidad;
    }

    public function getCaballos(): int {
        return $this->caballos;
    }

    public function getPlazas(): int {
        return $this->plazas;
    }

    public function setColor(string $color): void {
        $this->color = $color;
    }
}

// Coche con valores por defecto
$cochePorDefecto = new Coche();
echo "<h3>Datos de coche por defecto</h3>";
echo ("Color: " . $cochePorDefecto->getColor() . "<br>");
echo ("Marca: " . $cochePorDefecto->getMarca() . "<br>");
echo ("Modelo: " . $cochePorDefecto->getModelo() . "<br>");
echo ("Velocidad: " . $cochePorDefecto->getVelocidad() . "<br>");
echo ("Caballos: " . $cochePorDefecto->getCaballos() . "<br>");
echo ("Plazas: " . $cochePorDefecto->getPlazas() . "<br>");

// Coche personalizado
$cochePersonalizado = new Coche("Rojo", "Toyota", "Corolla", 150, 5);
$cochePersonalizado->acelerar();
$cochePersonalizado->acelerar();
$cochePersonalizado->acelerar();
$cochePersonalizado->frenar();

// Cambiamos el color del coche
$cochePersonalizado->setColor("Azul");

echo("<h4>Cambiamos el color del coche y lo ponemos en " . $cochePersonalizado->getColor() . "</h4>");
echo("El nuevo color de mi coche es: " . $cochePersonalizado->getColor()."<br>");

echo ("<h3>Datos del nuevo coche</h3>");
echo ("Color: " . $cochePersonalizado->getColor() . "<br>");
echo ("Marca: " . $cochePersonalizado->getMarca() . "<br>");
echo ("Modelo: " . $cochePersonalizado->getModelo() . "<br>");
echo ("Velocidad: " . $cochePersonalizado->getVelocidad() . "<br>");
echo ("Caballos: " . $cochePersonalizado->getCaballos() . "<br>");
echo ("Plazas: " . $cochePersonalizado->getPlazas() . "<br>");
?>