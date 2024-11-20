<?php 
// Ejemplo de consulta preparada con marcadores anónimos

$host = "localhost";
$database = "usuarios";
$username = "root";
$password = "";

try {
    // Conexión a la base de datos
    $pdo = new PDO("mysql:host=$host;dbname=$database;charset=utf8mb4", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Consulta preparada
    $preparada = $pdo->prepare("SELECT nombre FROM usuarios WHERE rol = ?");
    
    // Vincular el parámetro
    $rol = 2; // Valor del rol a buscar
    $preparada->bindParam(1, $rol, PDO::PARAM_INT);

    // Ejecutar la consulta
    $preparada->execute();

    // Leer los datos del resultado
    $preparada->setFetchMode(PDO::FETCH_ASSOC);
    while ($row = $preparada->fetch()) {
        echo "<p>Nombre: " . htmlspecialchars($row['nombre']) . "</p>";
    }

    // Mostrar el número de usuarios con el rol especificado
    echo "<p><strong>Número de usuarios con rol " . $rol . ": </strong>" . $preparada->rowCount() . "</p>";

} catch (PDOException $err) {
    // Manejo de errores
    die("Error ejecutando consulta SQL: " . $err->getMessage());
}
?>

