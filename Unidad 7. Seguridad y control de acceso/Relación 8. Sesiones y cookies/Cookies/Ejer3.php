<?php 
// Crea una página web con un formulario para elegir el color de fondo. Almacena la elección del usuario con 
// una cookie para que la siguiente vez que el usuario se conecte a la página aparezca directamente con ese color.
// Establecer el color de fondo si se ha enviado el formulario
// Establecer el color de fondo si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $color = $_POST["color"] ?? "#ffffff";
    setcookie("background_color", $color, time() + 86400 * 30, "/"); // Cookie de 30 días
} else {
    // Obtener el color de fondo desde la cookie, o usar blanco por defecto
    $color = $_COOKIE["background_color"] ?? "#ffffff";
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elegir Color de Fondo</title>
</head>
<body style="background-color: <?= htmlspecialchars($color) ?>;">

<h2>Elige el color de fondo:</h2>
<form action="" method="post">
    <label for="color">Selecciona un color:</label>
    <input type="color" id="color" name="color" value="<?= htmlspecialchars($color) ?>">
    <button type="submit">Guardar color</button>
</form>

</body>
</html>
