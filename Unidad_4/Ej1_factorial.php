<?php
/*Escribe una función para calcular el factorial de un número que recibirá como argumento.
Prueba a hacerlo usando recursividad.
*/

function factorial($numero){
    if ($numero > 1)
        return $numero * factorial($numero -1);
    else
        return 1;
}

echo "El factorial de 4 es :" . factorial(4);
