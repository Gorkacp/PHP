<?php 
//Este ejercicio lo haremos por partes:
//a.   Escribe una función que nos devuelva el resultado de sumar los dos argumentos que 
// se le pasen como parámetros. Construye igualmente otra para restar, multiplicar y dividir.

//b.   Escribe la función calculador. Dicha función recibirá tres parámetros: dos números y el 
// nombre de la operación que desea que se les aplique ( Observa que deben de coincidir con las 
// funciones que hemos diseñado en el apartado anterior). Según el nombre de la función que se pase 
// como argumento se devolverá la suma, la resta, la división o la multiplicación de los valores pasados en los otros dos argumentos.

//El script deberá recoger los valores en la URL. Recuerda comprobar que los valores que recibes son numéricos 
// y que la operación es: +,-,*,/.  Si las operaciones se reciben de esta forma habrá problemas para reconocer 
// los valores recibidos por GET. Se recomienda el uso de urlencode()

// Funciones para las operaciones
function sumar($a, $b) {
    return $a + $b;
}

function restar($a, $b) {
    return $a - $b;
}

function multiplicar($a, $b) {
    return $a * $b;
}

function dividir($a, $b) {
    // Comprobación para evitar la división por cero
    if ($b == 0) {
        return "Error: División por cero.";
    }
    return $a / $b;
}

// Función calculador
function calculador($num1, $num2, $operacion) {
    switch ($operacion) {
        case '+':
            return sumar($num1, $num2);
        case '-':
            return restar($num1, $num2);
        case '*':
            return multiplicar($num1, $num2);
        case '/':
            return dividir($num1, $num2);
        default:
            return "Operación no válida.";
    }
}

// Recoger valores de la URL
if (isset($_GET['num1']) && isset($_GET['num2']) && isset($_GET['operacion'])) {
    $num1 = $_GET['num1'];
    $num2 = $_GET['num2'];
    $operacion = $_GET['operacion'];

    // Comprobación de que los valores son numéricos
    if (is_numeric($num1) && is_numeric($num2) && in_array($operacion, ['+', '-', '*', '/'])) {
        $resultado = calculador($num1, $num2, $operacion);
        echo "El resultado de $num1 $operacion $num2 es: $resultado";
    } else {
        echo "Error: Asegúrate de que los números son válidos y la operación es correcta.";
    }
} else {
    echo "Error: Falta algún parámetro en la URL.";
}

// http://tudominio.com/calculadora.php?num1=10&num2=5&operacion=+

?>
