<?php
//Escribe un programa que resuelva una ecuación de segundo grado.
//Aprovecha para ilustrar la diferencia entre echo, print y printf.
//Recuerda que aún no sabemos cómo recoger valores desde el teclado.

// Definición de los coeficientes de la ecuación de segundo grado
$a = 1;  // Coeficiente de x²
$b = -3; // Coeficiente de x
$c = 2;  // Término independiente

// Calcular el discriminante
$discriminante = $b * $b - 4 * $a * $c;

// Mostrar resultados usando echo
echo "<h2>Resultados usando echo:</h2>";

if ($discriminante > 0) {
    $x1 = (-$b + sqrt($discriminante)) / (2 * $a);
    $x2 = (-$b - sqrt($discriminante)) / (2 * $a);
    echo "Dos soluciones: x1 = $x1 y x2 = $x2<br>";
} elseif ($discriminante === 0) {
    $x = -$b / (2 * $a);
    echo "Una única solución: x = $x<br>";
} else {
    echo "No hay soluciones reales.<br>";
}

// Mostrar resultados usando print
print "<h2>Resultados usando print:</h2>";

if ($discriminante > 0) {
    $x1 = (-$b + sqrt($discriminante)) / (2 * $a);
    $x2 = (-$b - sqrt($discriminante)) / (2 * $a);
    print "Dos soluciones: x1 = $x1 y x2 = $x2<br>";
} elseif ($discriminante === 0) {
    $x = -$b / (2 * $a);
    print "Una única solución: x = $x<br>";
} else {
    print "No hay soluciones reales.<br>";
}

// Mostrar resultados usando printf
printf("<h2>Resultados usando printf:</h2>");

if ($discriminante > 0) {
    $x1 = (-$b + sqrt($discriminante)) / (2 * $a);
    $x2 = (-$b - sqrt($discriminante)) / (2 * $a);
    printf("Dos soluciones: x1 = %.2f y x2 = %.2f<br>", $x1, $x2);
} elseif ($discriminante === 0) {
    $x = -$b / (2 * $a);
    printf("Una única solución: x = %.2f<br>", $x);
} else {
    printf("No hay soluciones reales.<br>");
}


?>