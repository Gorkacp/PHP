<?php
session_start();

// Comprobar si la sesión está iniciada
if (!isset($_SESSION["usuario"])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Página protegida</title>
</head>
<body>
    <h2>Bienvenido</h2>
    <p>Ha iniciado sesión como <?php echo htmlspecialchars($_SESSION["usuario"]); ?></p>
    <form action="logout.php" method="post">
        <button type="submit">Cerrar sesión</button>
    </form>
</body>
</html>
