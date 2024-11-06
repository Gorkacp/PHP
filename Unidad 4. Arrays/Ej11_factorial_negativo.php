<?php
global $x;
include "ejemplo_uso_global.php";
/*11. Ej 11: factorial negativo
Modifica el ejercicio cálculo de un factorial para que controle si el argumento es negativo utilizando una excepción.

Usa: InvalidArgumentException
*/
function factorial($numero){
    if ($numero > 1)
        return $numero * factorial($numero -1);
    else if ($numero >= 0 && $numero < 2)
        return 1;
    else if ($numero <0 )//numeros negativos
        throw new InvalidArgumentException("no existe el factorial de un número negativo");
}

// probamos la función, en caso de error simplemente se esta mostrando el mensaje
try {
    echo "El factorial de 4 es :" . factorial(-25);
}
catch (Exception $e){
    echo "Error: " . $e->getMessage();
}
