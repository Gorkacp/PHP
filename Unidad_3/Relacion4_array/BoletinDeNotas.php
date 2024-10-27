<?php
// Definir las asignaturas y las notas de los tres trimestres
$boletin = [
    'Matemáticas' => [8, 9, 10],
    'Lengua' => [7, 8, 7],
    'Física' => [9, 10, 8],
    'Latín' => [6, 5, 7],
    'Inglés' => [10, 9, 9]
];

// Función para calcular la media
function calcular_media($notas) {
    return array_sum($notas) / count($notas);
}

// Imprimir el encabezado de la tabla
echo "Asignatura\tTrimestre 1\tTrimestre 2\tTrimestre 3\tMedia\n";
echo "----------------------------------------------------------\n";

// Recorrer cada asignatura y sus notas
foreach ($boletin as $asignatura => $notas) {
    // Calcular la media
    $media = calcular_media($notas);
    
    // Imprimir los datos
    echo "$asignatura\t\t$notas[0]\t\t$notas[1]\t\t$notas[2]\t\t" . number_format($media, 2) . "\n";
}