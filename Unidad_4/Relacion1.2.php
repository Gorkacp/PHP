
<?php
   //Escribe un programa que calcule la longitud, la superficie y el volumen de una esfera dado el radio. 
   //Se pide que el resultado, en todos los casos, solo con dos decimales.
   //Ilustra las diferencias entre usas la función round() y la función printf().

   // Función para calcular la longitud, superficie y volumen de una esfera
function calcularEsfera($radio) {
    // Fórmulas
    $longitud = 2 * pi() * $radio; // Longitud de la circunferencia
    $superficie = 4 * pi() * pow($radio, 2); // Superficie de la esfera
    $volumen = (4/3) * pi() * pow($radio, 3); // Volumen de la esfera

    return [
        'longitud' => $longitud,
        'superficie' => $superficie,
        'volumen' => $volumen
    ];
}

// Definir el radio
$radio = 5; // Puedes cambiar este valor para probar con diferentes radios

// Calcular valores
$resultados = calcularEsfera($radio);

// Mostrar resultados usando round()
echo "<h3>Resultados usando round():</h3>";
echo "Longitud: " . round($resultados['longitud'], 2) . "<br>";
echo "Superficie: " . round($resultados['superficie'], 2) . "<br>";
echo "Volumen: " . round($resultados['volumen'], 2) . "<br><br>";

// Mostrar resultados usando printf()
echo "<h3>Resultados usando printf():</h3>";
printf("Longitud: %.2f<br>", $resultados['longitud']);
printf("Superficie: %.2f<br>", $resultados['superficie']);
printf("Volumen: %.2f<br>", $resultados['volumen']);




?>