<?php
//Escribe un programa que pinte por pantalla una pirámide rellena a base de asteriscos.
//La base de la pirámide debe estar formada por 9 asteriscos.
//El resultado debe de ser algo parecido a esto:
//Puedes utilizar la entidad de caracter "non breaking space" &nbsp; para separar 
//las palabras de tu menú de navegación tanto como quieras. (Recuerda que debes usar tantos &nbsp; 
//como espacios en blanco quieras incluir ya que si pones los espacios en blanco directamente el 
//navegador los agrupará como si fuese uno solo).


// Base de la pirámide
$base = 9;

// Calcular la altura de la pirámide
$altura = ($base + 1) / 2; // La altura es la mitad de la base más uno

// Imprimir la pirámide
for ($i = 0; $i < $altura; $i++) {
    // Imprimir espacios en blanco
    for ($j = $altura - $i - 1; $j > 0; $j--) {
        echo "&nbsp;"; // Espacios en blanco
    }
    
    // Imprimir asteriscos
    for ($k = 0; $k < (2 * $i + 1); $k++) {
        echo "*"; // Asteriscos
    }
    
    // Nueva línea
    echo "<br>";
}
?>