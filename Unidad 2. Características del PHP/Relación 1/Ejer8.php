
<?php
// Imprimir la pirámide del ejercicio anterior pero hueca por dentro
// Base de la pirámide
$base = 9;

// Calcular la altura de la pirámide
$altura = ($base + 1) / 2; // La altura es la mitad de la base más uno

// Imprimir la pirámide hueca
for ($i = 0; $i < $altura; $i++) {
    // Imprimir espacios en blanco antes de los asteriscos
    for ($j = $altura - $i - 1; $j > 0; $j--) {
        echo "&nbsp;"; // Espacios en blanco
    }
    
    // Imprimir los bordes de la pirámide
    for ($k = 0; $k < (2 * $i + 1); $k++) {
        // Imprimir el asterisco solo en el borde izquierdo, derecho y en la base
        if ($k == 0 || $k == (2 * $i) || $i == $altura - 1) {
            echo "*";
        } else {
            echo "&nbsp;"; // Espacio en blanco dentro de la pirámide
        }
    }
    
    // Nueva línea
    echo "<br>";
}
?>