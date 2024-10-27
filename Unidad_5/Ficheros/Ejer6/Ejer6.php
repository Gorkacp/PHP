<?php
// Define el nombre del directorio
$carpetaDestino = 'subidos/';

// Crea el directorio si no existe
if (!is_dir($carpetaDestino)) {
    mkdir($carpetaDestino, 0755, true); // Crea la carpeta con permisos 0755
}

// Verifica si se ha enviado el formulario
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Verifica si se ha subido un archivo
    if (isset($_FILES['archivo'])) {
        $archivo = $_FILES['archivo'];

        // Verifica si hay errores en la subida
        if ($archivo['error'] === UPLOAD_ERR_OK) {
            // Comprueba el tamaño del archivo (no debe superar 256 KB)
            if ($archivo['size'] <= 256 * 1024) {
                // Obtiene la extensión del archivo
                $extension = pathinfo($archivo['name'], PATHINFO_EXTENSION);
                // Define el nombre del archivo en el servidor
                $nombreArchivo = uniqid() . '.' . $extension;

                // Mueve el archivo subido a la carpeta de destino
                if (move_uploaded_file($archivo['tmp_name'], $carpetaDestino . $nombreArchivo)) {
                    echo "El archivo se ha subido correctamente: " . htmlspecialchars($nombreArchivo) . "<br>";
                } else {
                    echo "Error al mover el archivo subido.<br>";
                }
            } else {
                echo "El archivo supera el tamaño máximo permitido (256 KB).<br>";
            }
        } else {
            echo "Error al subir el archivo: " . $archivo['error'] . "<br>";
        }
    } else {
        echo "No se ha subido ningún archivo.<br>";
    }
}

// Muestra todos los archivos en la carpeta "subidos"
echo "<h2>Archivos en la carpeta 'subidos':</h2>";
if ($gestor = opendir($carpetaDestino)) {
    while (false !== ($archivo = readdir($gestor))) {
        // Ignora los directorios '.' y '..'
        if ($archivo != "." && $archivo != "..") {
            echo $archivo . "<br>"; // Muestra el nombre del archivo
        }
    }
    closedir($gestor); // Cierra el gestor de directorios
} else {
    echo "No se pudo abrir la carpeta.<br>";
}
?>