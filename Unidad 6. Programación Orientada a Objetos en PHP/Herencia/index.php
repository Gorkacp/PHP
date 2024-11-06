<?php 
require_once "Perro.php";
require_once "Gato.php";

$perro = new Perro("Fido", 3);
$gato = new Gato("Miau", 2);

echo("<h2>Detalles de los animales</h2>");
echo("<h3>Perro</h3>");
echo("Nombre: " . $perro->getNombre() . "<br>");
echo("Edad: " . $perro->getEdad() . "años<br>");
echo ($perro->hablar() . "<br>");

echo("<h3>Gato</h3>");
echo "Nombre: " . $gato->getNombre() . "<br>";
echo "Edad: " . $gato->getEdad() . " años<br>";
echo $gato->hablar() . "<br>";
?>

