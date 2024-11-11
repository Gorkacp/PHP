<?php
session_start();
session_unset();
session_destroy();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cerrar sesión</title>
</head>
<body>
    <h2>Sesión finalizada</h2>
    <p>Ha cerrado sesión correctamente.</p>
    <a href="login.php">Volver a iniciar sesión</a>
</body>
</html>
