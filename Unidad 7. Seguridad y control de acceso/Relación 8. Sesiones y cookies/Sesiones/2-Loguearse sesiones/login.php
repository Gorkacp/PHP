<?php 
session_start();

//Funcion para verificar el usuario y la contraseña
function verificar_usuario($nombre, $clave){
    return $nombre === "usuario" && $clave === "1234";
}

//Procesar formulario de inicio de sesion
if ($_SERVER["REQUEST_METHOD"] === "POST"){
    $nombre = $_POST["usuario"];
    $clave = $_POST["clave"];

    if(verificar_usuario($nombre, $clave)){
        $_SESSION["usuario"] = $nombre;
        header("Location: protected.php");
        exit();
    }else{
        $error = "Usuario o contraseña incorrectos";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>  
    <meta charset="UTF-8">
    <title>Iniciar Sesion</title>
</head>
<body>
    <h2>Iniciar Sesion</h2>
    <?php if (isset($error)) echo "<p style='color:red;'>$error</p>"; ?>
    
    <form method="POST" action="">
        <label for="usuario">Usuario:</label>
        <input type="text" name="usuario" id="usuario" required>
        <br><br>
        <label for="clave">Contraseña:</label>
        <input type="password" name="clave" id="clave" required>
        <br><br>
        <input type="submit" value="Iniciar sesión">
    </form>
</body>
</html>