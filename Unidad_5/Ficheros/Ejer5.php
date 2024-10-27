<?php
// 5.-Seleccionar un fichero usando un formulario y subirlo al servidor.
// El tamaño del fichero no debe superar 256 *1024
// Se precisa crear la carpeta "subidos" para que la siguiente solución sea válida:


// Verifica si se ha enviado el formulario
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Verifica si se ha subido un archivo
    if (isset($_FILES['archivo'])) {
        $archivo = $_FILES['archivo'];

        // Verifica si hay errores en la subida
        if ($archivo['error'] === UPLOAD_ERR_OK) {
            // Comprueba el tamaño del archivo (no debe superar 256 KB)
            if ($archivo['size'] <= 256 * 1024) {
                // Define la carpeta de destino
                $carpetaDestino = 'subidos/';
                // Obtiene la extensión del archivo
                $extension = pathinfo($archivo['name'], PATHINFO_EXTENSION);
                // Define el nombre del archivo en el servidor
                $nombreArchivo = uniqid() . '.' . $extension;

                // Mueve el archivo subido a la carpeta de destino
                if (move_uploaded_file($archivo['tmp_name'], $carpetaDestino . $nombreArchivo)) {
                    echo "El archivo se ha subido correctamente: " . htmlspecialchars($nombreArchivo);
                } else {
                    echo "Error al mover el archivo subido.";
                }
            } else {
                echo "El archivo supera el tamaño máximo permitido (256 KB).";
            }
        } else {
            echo "Error al subir el archivo: " . $archivo['error'];
        }
    } else {
        echo "No se ha subido ningún archivo.";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subir Archivo</title>
</head>
<body>
    <h1>Sube un archivo</h1>
    <form action="" method="POST" enctype="multipart/form-data">
        <input type="file" name="archivo" required>
        <button type="submit">Subir</button>
    </form>
</body>
</html>