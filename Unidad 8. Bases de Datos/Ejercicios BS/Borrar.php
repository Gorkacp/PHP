<?php
// Definir las credenciales de la base de datos
$servername = "localhost"; // Servidor MySQL
$username = "root"; // Usuario de MySQL (por defecto, 'root' en XAMPP)
$password = ""; // Contraseña de MySQL (por defecto, vacía en XAMPP)
$dbname = "usuarios"; // Nombre de la base de datos

// Crear la conexión
$conexion = new mysqli($servername, $username, $password, $dbname);

// Comprobar la conexión
if ($conexion->connect_error) {
    die("Error en conexión a base de datos: " . $conexion->connect_error);
}

// Consulta SQL
$sql = "DELETE FROM usuarios WHERE nombre='Mateo'";
$delete = $conexion->query($sql);

if ($delete){
    echo "Datos insertados correctamente";
}else{
    echo "Error: " .$conexion->connect_error;
}
?>