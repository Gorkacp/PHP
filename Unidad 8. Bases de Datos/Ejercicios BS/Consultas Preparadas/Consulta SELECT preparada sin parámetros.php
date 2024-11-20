<?php
// Ejemplo de consulta preparada sin parámetros

$host = "localhost";
$database = "usuarios";
$username = "root";
$password = "";

try {
    // Conexión a la base de datos
    $bd = new PDO("mysql:host=$host;dbname=$database;charset=utf8mb4", $username, $password);
    $bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    try {
        // Consulta preparada
        $stm = $bd->prepare("SELECT * FROM usuarios");
        $stm->execute();

        // Iterar sobre los resultados y mostrarlos
        foreach ($stm->fetchAll(PDO::FETCH_ASSOC) as $row) {
            echo "Nombre: " . htmlspecialchars($row["nombre"]) . " , Rol: " . htmlspecialchars($row["rol"]) . "<br>";
        }
    } catch (PDOException $err) {
        die("Error ejecutando la consulta SQL: " . $err->getMessage());
    }
} catch (PDOException $e) {
    die("Error con la base de datos: " . $e->getMessage());
}

// Liberamos los recursos utilizados
$stm = null;
// Se recomienda cerrar la conexión para liberar recursos de forma más rápida
$bd = null;
?>
