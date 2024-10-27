<?php
    /*Escribe una función que calcule el máximo común divisor de dos números y un programa para probarla.
    */
    function mcd($a, $b) {
        while ($b != 0) {
            $t = $b;
            $b = $a % $b;
            $a = $t;
        }
        return $a;
    }

    // Ejemplo de uso:
    if (isset($_GET['num1']) && isset($_GET['num2'])) {
        $num1 = intval($_GET['num1']);
        $num2 = intval($_GET['num2']);
        $resultado = mcd($num1, $num2);
        echo "El máximo comúnHTHRTHRTHRH divisor de $num1 y $num2 es: $resultado";
    } else {
        echo "Por favor, ingresa dos números en la URL.";
    }
?>