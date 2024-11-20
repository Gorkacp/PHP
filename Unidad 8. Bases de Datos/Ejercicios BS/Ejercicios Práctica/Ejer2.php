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
$sql = "SELECT * FROM usuarios";
$query = $conexion->query($sql);

// Verificar si hay registros
if (mysqli_num_rows($query) > 0) {
    while ($obj = $query->fetch_object()) {
        // Acceder a las propiedades del objeto con '->'
        echo "Código: " . $obj->codigo . ", Nombre: " . $obj->nombre . ", ROL: " . $obj->rol . "<br>";
    }
} else {
    echo "No hay registros";
}

// Cerrar la conexión al final
$conexion->close();
?>

