<?php
// Generar 20 valores aleatorios entre 0 y 100
$valores = array();
$cuadrados = array();
$cubos = array();

for ($i = 0; $i < 20; $i++) {
    $randomNumber = rand(0, 100);
    $valores[] = $randomNumber;
    $cuadrados[] = pow($randomNumber, 2); // Calcular el cuadrado
    $cubos[] = pow($randomNumber, 3); // Calcular el cubo
}

// Mostrar los resultados en una tabla
echo "<table border='1' cellpadding='10'>";
echo "<tr><th>Valor</th><th>Cuadrado</th><th>Cubo</th></tr>";
for ($i = 0; $i < 20; $i++) {
    echo "<tr>";
    echo "<td>" . $valores[$i] . "</td>";
    echo "<td>" . $cuadrados[$i] . "</td>";
    echo "<td>" . $cubos[$i] . "</td>";
    echo "</tr>";
}
echo "</table>";
?>