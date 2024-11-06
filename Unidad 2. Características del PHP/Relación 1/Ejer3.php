<?php 
//Escribe un programa que resuelva una ecuación de segundo grado.
//Aprovecha para ilustrar la diferencia entre echo, print y printf.
//Recuerda que aún no sabemos cómo recoger valores desde el teclado.

// Coeficientes de la ecuación cuadrática
$a = 1;
$b = -3;
$c = 2;

// Calcular el discriminante
$discriminante = pow($b, 2) - (4 * $a * $c);

// Comprobar si la ecuación tiene soluciones reales
if ($discriminante < 0) {
    echo "La ecuación no tiene soluciones reales.<br>";
} else {
    // Calcular las dos soluciones
    $x1 = (-$b + sqrt($discriminante)) / (2 * $a);
    $x2 = (-$b - sqrt($discriminante)) / (2 * $a);

    // Mostrar las soluciones usando echo
    echo "Usando echo:<br>";
    echo "Solución x1: " . $x1 . "<br>";
    echo "Solución x2: " . $x2 . "<br><br>";

    // Mostrar las soluciones usando print
    print "Usando print:<br>";
    print "Solución x1: " . $x1 . "<br>";
    print "Solución x2: " . $x2 . "<br><br>";

    // Mostrar las soluciones usando printf
    printf("Usando printf:<br>");
    printf("Solución x1: %.2f<br>", $x1);
    printf("Solución x2: %.2f<br>", $x2);
}
?>