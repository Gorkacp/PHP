<?php

//Dada una variable que contenga una cadena de varios caracteres, escribe un script que nos permita escribir 
//esa cadena al revés  (empezando desde la última letra y acabando en la primera) sin hacer uso de la 
//función strrev(). 
//Para solucionarlo tienes que tener en cuenta que existen funciones que permiten extraer el carácter que 
//ocupa una posición determinada de una cadena. Por otro lado,  tienes que trabajar con estructuras iterativas, 
//para recorrer las distintas posiciones que tiene una cadena. Eso sí, necesitamos conocer su longitud, pero 
//para eso también tenemos funciones de cadena.
//Ten en cuenta que si hay caracteres especiales, como eñes o letras con tilde, 
//ocupan más de un byte y no se mostrarán adecuadamente. Busca la función adecuada e cadenas 
//de caracteres que debes usar.
// Cadena a invertir
$cadena = "Hola, ¿cómo estás?";

// Inicializamos la variable para la cadena invertida
$cadenaInvertida = "";

// Obtener la longitud de la cadena usando mb_strlen para manejar caracteres multibyte
$longitud = mb_strlen($cadena);

// Recorrer la cadena desde el final hasta el principio
for ($i = $longitud - 1; $i >= 0; $i--) {
    // Extraer el carácter en la posición $i usando mb_substr
    $cadenaInvertida .= mb_substr($cadena, $i, 1);
}

// Mostrar la cadena invertida
echo "Cadena original: $cadena<br>";
echo "Cadena invertida: $cadenaInvertida";
?>