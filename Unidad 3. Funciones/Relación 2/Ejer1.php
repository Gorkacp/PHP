<?php 
//Escribe una función para calcular el factorial de un número que recibirá como argumento. 
//Prueba a hacerlo usando recursividad.

function factorial($n){
    //Caso base: factorial de 0 o 1 = 1
    if($n <=1){
        return 1;
    }
    //llamada recursiva 
    return $n * factorial($n-1);
}

//Ejemplo de uso
$numero = 5;
echo ("El factorial de $numero es: " . factorial($numero));
?>