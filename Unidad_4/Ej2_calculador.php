<?php
/* a. Escribe una función que nos devuelva el resultado de sumar los dos argumentos que se le pasen
      como parámetros. Construye igualmente otra para restar, multiplicar y dividir.*/

function suma($num1, $num2){
    return $num1 + $num2;
}
function resta($num1, $num2){
    return $num1 + $num2;
}
function multiplica($num1, $num2){
    return $num1 * $num2;
}

/*Escribe la función calculador. Dicha función recibirá tres parámetros: dos números y el nombre de la operación que
desea que se les aplique ( Observa que deben de coincidir con las funciones que hemos diseñado en el apartado anterior).
Según el nombre de la función que se pase como argumento se devolverá la suma, la resta, la división o la multiplicación
de los valores pasados en los otros dos argumentos.*/
function calculador($num1, $num2, $operacion){
    /*

   // Validar los datos
    if (!is_numeric($num1) || !is_numeric($num2)) {
        echo "Por favor, introduce dos números válidos.";
    } else {
        // Realizar la operación según el valor de 'operacion'
        switch ($operacion) {
            case '+':
                $resultado = $num1 + $num2;
                break;
            case '-':
                $resultado = $num1 - $num2;
                break;
            case '*':
                $resultado = $num1 * $num2;
                break;
            case '/':
                if ($num2 == 0) {
                    echo "No se puede dividir por cero.";
                } else {
                    $resultado = $num1 / $num2;
                }
                break;
            default:
                echo "Operación inválida($operacion)";
        }

        // Mostrar el resultado
        if (isset($resultado)) {
            echo "El resultado de la operación es: " . $resultado;
        }
    */

}
//=================================================
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Calculadora</title>
    </head>
    <body>
<?php
    const OPERACIONES_VALIDAS = array("+","-","*","/");
    // Obtener los números de la URL
    $num1 = $_GET["num1"];
    $num2 = $_GET["num2"];
    $operacion = urldecode($_GET["operacion"]);
    $resultado = 0;


    //Ej2_calculadora.php?num1=2&num2=5&operacion=%2B

    // Validar los datos
    if (!is_numeric($num1) || !is_numeric($num2)) {
        echo "Por favor, introduce dos números válidos.";
        return;
    }
    if (!in_array($operacion, OPERACIONES_VALIDAS)) {
        echo "Por favor, introduce una operación válida($operacion).";
        return;
    };

    //realizar operacion
    switch ($operacion) {
        case '+':
            $resultado = $num1 + $num2;
            break;
        case '-':
            $resultado = $num1 - $num2;
            break;
        case '*':
            $resultado = $num1 * $num2;
            break;
        case '/':
            if ($num2 == 0) {
                echo "No se puede dividir por cero.";
                return;
                } else {
                $resultado = $num1 / $num2;
            }
            break;
    }

    echo "<p>El resultado de la operación es: $resultado</p>"
?>
    </body>
</html>