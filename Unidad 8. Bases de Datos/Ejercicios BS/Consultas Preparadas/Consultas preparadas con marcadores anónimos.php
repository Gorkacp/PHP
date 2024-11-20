<?php
// Configuración de la conexión
$host = 'localhost';
$dbname = 'usuarios'; // Nombre de la base de datos
$user = 'root';       // Usuario de la base de datos
$password = '';       // Contraseña de la base de datos

try {
    // Conexión a la base de datos usando PDO
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Datos a insertar
    $nombre = 'Gorka';
    $clave = 'gorka123';
    $rol = 1;

    // Preparar la consulta con marcadores anónimos
    $sql = "INSERT INTO usuarios (nombre, clave, rol) VALUES (?, ?, ?)";
    $stmt = $pdo->prepare($sql);

    // Ejecutar la consulta con los valores
    $stmt->execute([$nombre, $clave, $rol]);

    echo "Usuario insertado correctamente.";
} catch (PDOException $e) {
    // Manejo de errores
    echo "Error: " . $e->getMessage();
}
?>
