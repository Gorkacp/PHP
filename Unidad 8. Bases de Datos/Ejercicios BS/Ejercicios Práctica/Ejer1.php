<?php
// Definir las credenciales de la base de datos
$servername = "localhost"; // Servidor MySQL
$username = "root"; // Usuario de MySQL 
$password = ""; // Contraseña de MySQL 
$dbname = "usuarios"; // Nombre de la base de datos

// Crear la conexión
$conexion = new mysqli($servername, $username, $password, $dbname);

// Comprobar la conexión
if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}
$sql = "SELECT * FROM usuarios";
$query = mysqli_query($conexion, $sql);

if  (mysqli_num_rows($query) > 0){
    while ($row = mysqli_fetch_assoc($query)){
        echo "Codigo: " . $row["codigo"] . ",Nombre: " . $row["nombre"] . ",ROL: " . $row["rol"]. "<br>";
    }
}else{
    echo "No hay objetos";
}

// Cerrar la conexión
mysqli_close($conexion);
?>
