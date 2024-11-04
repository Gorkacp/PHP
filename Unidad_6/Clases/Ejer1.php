<?php 
// Realiza las siguientes actividades:
// a.      Crea la clase Coche.  Ten en cuenta que de un coche sabemos color, marca, modelo, velocidad, caballos y nº de plazas.
// b.     Las propiedades tendrán los siguientes valores por defecto:
// c.      Implementa un método que permita frenar y otro acelerar ( suma y resta uno a la velocidad)
// d.     Guarda la clase en un archivo llamado coche.php
// e.      A partir de esta clase crea los objetos que necesites y el script que nos permita mostrar.

class Coche{
    //Propiedades con valors por defecto
    private $color = "Blanco";
    private $marca = "Genérica";
    private $modelo = "Modelo Base";
    private $velocidad = 100;
    private $caballos = 120;
    private $plazas = 4;

    //Constructor para personalizar
    public function _construct($color = null, $marca = null, $modelo = null, $caballos = null, $plazas = null) {
        if ($color) $this->color = $color;
        if ($marca) $this->marca = $marca;
        if ($modelo) $this->modelo = $modelo;
        if ($caballos) $this->caballos = $caballos;
        if ($plazas) $this->plazas = $plazas;
    }

    //Metodo para acelerar
    public function acelerar(){
        $this->velocidad +=1;
    }

    //Metodo para frenar
    public function frenar(){
        if ($this->velocidad > 0){
            $this->velocidad  -=1;
        }
    }

    //Métodos para obtener los valores de cada propiedad
    public function getColor() {
        return $this->color;
    }

    public function getMarca() {
        return $this->marca;
    }

    public function getModelo() {
        return $this->modelo;
    }

    public function getVelocidad() {
        return $this->velocidad;
    }

    public function getCaballos() {
        return $this->caballos;
    }

    public function getPlazas() {
        return $this->plazas;
    }
}

//Creación de un objeto Coche  script para mostrar valores
$coche1 = new Coche("Rojo", "Toyota", "Corolla", 150, 6);

//Aceleramos el coche 3 veces y frenamos una
$coche1->acelerar();
$coche1->acelerar();
$coche1->acelerar();
$coche1->frenar();

//Mostrar los valores
echo ("Color: " + $coche1->getColor() + "<br>");
echo ("Marca: " + $coche1->getMarca() + "<br>");
echo ("Modelo: " + $coche1->getModelo() + "<br>");
echo ("Velocidad: " + $coche1->getVelocidad() + "<br>");
echo ("Caballos: " + $coche1->getCaballos() + "<br>");
echo ("Plazas: " + $coche1->getPlazas() + "<br>");

?>