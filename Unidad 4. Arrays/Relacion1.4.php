<?php
//  Realiza un conversor de euros a dólares
$tipoCambio = 1.1; // 1 euro = 1.1 dólares (esto es solo un ejemplo)

// Función para convertir euros a dólares
function convertirEurosADolares($euros, $tipoCambio) {
    return $euros * $tipoCambio;
}

// Verificar si se ha enviado un valor a través de POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $euros = $_POST['euros']; // Obtener la cantidad en euros

    // Validar la entrada
    if (is_numeric($euros) && $euros >= 0) {
        $dolares = convertirEurosADolares($euros, $tipoCambio);
        echo "<h2>Conversión:</h2>";
        echo "$euros euros son " . number_format($dolares, 2) . " dólares.";
    } else {
        echo "Por favor, ingrese un valor numérico válido.";
    }
}
?>
