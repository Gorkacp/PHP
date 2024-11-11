<?php
session_start();

// Inicializar el contador en la sesión si no existe
if (!isset($_SESSION['contador'])) {
    $_SESSION['contador'] = 0;
}

// Comprobar si el parámetro 'action' está presente en la URL
if (isset($_GET['action'])) {
    if ($_GET['action'] == '1') {
        // Aumenta el contador en 1
        $_SESSION['contador'] += 1;
    } elseif ($_GET['action'] == '0') {
        // Disminuye el contador en 1
        $_SESSION['contador'] -= 1;
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Contador con Sesión</title>
</head>
<body>
    <h2>Valor del Contador: <?php echo $_SESSION['contador']; ?></h2>
    
    <p>
        <a href="?action=1">Aumentar en 1</a> |
        <a href="?action=0">Disminuir en 1</a>
    </p>
</body>
</html>
