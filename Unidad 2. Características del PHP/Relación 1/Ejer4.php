<?php 
// Realiza un conversor de euros a dólares

// Definir el tipo de cambio actual
$tipo_cambio = 1.0878;

// Cantidad en euros a convertir
$euros = 100; // Puedes cambiar este valor según tus necesidades

// Realizar la conversión
$dolares = $euros * $tipo_cambio;

// Mostrar el resultado
echo "€$euros equivalen a $" . number_format($dolares, 2) . " dólares estadounidenses.";
?>

?>