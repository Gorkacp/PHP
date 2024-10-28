<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];

    echo "Usuario: " . htmlspecialchars($usuario) . "<br>";
    echo "Contraseña: " . htmlspecialchars($contrasena);
} else {
    echo "Acceso no permitido.";
}
?>
