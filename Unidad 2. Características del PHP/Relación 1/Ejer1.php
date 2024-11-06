<?php 
//Crear tres variables: país, habitantes y continente a los que les darás un valor. 
//A continuación, muestra su valor por pantalla junto con el tipo de dato que tiene cada una de ellas

//Definimos las variables
$pais = "España";
$habitantes = 47350000;
$continente = "Europa";

//Mostrar los valores y tipos de datos
echo ("País: " . $pais . "<br>");
echo ("Tipo de dato de país: " . gettype($pais) . "<br>");

echo "Habitantes: " . $habitantes . "<br>";
echo "Tipo de dato de habitantes: " . gettype($habitantes) . "<br><br>";

echo "Continente: " . $continente . "<br>";
echo "Tipo de dato de continente: " . gettype($continente) . "<br>";
?>