<?php 
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "usuarios"; 

try {
    // Creamos la conexión. Asegúrate de usar el nombre correcto de la base de datos ($dbname)
    // También estamos utilizando el charset utf8mb4, que es adecuado para UTF-8.
    $conexion = new PDO("mysql:host=$servername; dbname=$dbname; charset=utf8mb4", $username, $password);

    // Configuramos PDO para que lance excepciones en caso de error
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Si la conexión es exitosa, mostramos el mensaje
    echo "<h2>Conexión realizada con éxito</h2>";

} catch (PDOException $e) {
    // Si hay un error en la conexión, mostramos un mensaje
    // Puedes personalizar el mensaje para mostrar más detalles si es necesario
    echo "<h2>Imposible conectar: " . $e->getMessage() . "</h2>";
}
?>
