<?php 
function comprobar_usuario($nombre, $clave) {
    if ($nombre === "usuario" && $clave === "1234") {
        $usu["nombre"] = "usuario";
        $usu["rol"] = 0;
    } elseif ($nombre === "admin" && $clave === "1234") {
        $usu["nombre"] = "admin";
        $usu["rol"] = 1;
        return $usu;
    } else {
        return FALSE;
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usu = comprobar_usuario($_POST["usuario"], $_POST["clave"]);
    if ($usu == FALSE) {
        $err = TRUE;
        $usuario = $_POST["usuario"];
    } else {
        session_start();
        $_SESSION["usuario"] = $_POST["usuario"];
        header("Location: sessiones1_principal.php");
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Formulario Login</title>
</head>
<body>
    <?php if (isset($_GET["redirigido"])): ?>
        <p>Revise usuario y contraseña</p>
    <?php endif; ?>
    
    <?php if (isset($err) && $err == true): ?>
        <p>Revise usuario y contraseña</p>
    <?php endif; ?>

    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        Usuario:
        <input id="usuario" name="usuario" type="text">
        <br>
        Clave:
        <input id="clave" name="clave" type="password">
        <br>
        <input type="submit" value="Iniciar sesión">
    </form>
</body>
</html>
