<?php
// Ejemplo de consulta preparada con marcadores conocidos o por nombre
$host = "localhost";
$database = "usuarios";
$username = "root";
$password = "";

try {
    // Conexión a la base de datos
    $bd = new PDO("mysql:host=$host;dbname=$database;charset=utf8mb4", $username, $password);
    $bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    try {
        // Preparar la consulta
        $preparada = $bd->prepare("SELECT nombre FROM usuarios WHERE rol = :rol");
        $preparada->bindParam(":rol", $rol);
        // Asignar valor al marcador
        $rol = 2;
        // Ejecutar la consulta
        $preparada->execute();
        // Leer los datos del resultado
        $data = $preparada->fetchAll(PDO::FETCH_ASSOC); // Se obtienen todas las filas
        foreach ($data as $row) {
            echo "Nombre: " . htmlspecialchars($row['nombre']) . "<br>";
        }
        // Mostrar el número de usuarios con el rol seleccionado
        echo "<p><strong>Número de usuarios con rol " . $rol . ":</strong> " . $preparada->rowCount() . "</p>";
    } catch (PDOException $err) {
        die("Error ejecutando la consulta SQL: " . $err->getMessage());
    }
} catch (PDOException $err) {
    die("Error conectando a la base de datos: " . $err->getMessage());
}
// Liberar recursos y cerrar conexión
$preparada = null;
$bd = null;
?>
