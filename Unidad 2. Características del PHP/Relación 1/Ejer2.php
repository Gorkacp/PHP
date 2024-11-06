<?php 
// Escribe un programa que calcule la longitud, la superficie y el volumen de una esfera dado el radio. Se pide que el resultado, en todos los casos, solo con dos decimales.
// Ilustra las diferencias entre usas la función round() y la función printf().

$radio = 5;

//Constante de PI
define("PI", 3.14159 );

// Cálculos
$longitud = 2 * PI * $radio;  // Longitud de la circunferencia de la esfera
$superficie = 4 * PI * pow($radio, 2);  // Superficie de la esfera
$volumen = (4/3) * PI * pow($radio, 3);  // Volumen de la esfera

// Mostrar los resultados usando round()
echo "Usando round():<br>";
echo "Longitud: " . round($longitud, 2) . "<br>";
echo "Superficie: " . round($superficie, 2) . "<br>";
echo "Volumen: " . round($volumen, 2) . "<br><br>";

// Mostrar los resultados usando printf()
echo "Usando printf():<br>";
printf("Longitud: %.2f<br>", $longitud);
printf("Superficie: %.2f<br>", $superficie);
printf("Volumen: %.2f<br>", $volumen);
?>