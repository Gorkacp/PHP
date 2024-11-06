<?php
//Realiza un formulario que nos permita subir imágenes al servidor.
//Los ficheros con las imágenes se guardarán en una carpeta especifica para ello llamada "images".
//Cada vez que se suba una imagen se mostrarán las imágenes que hay en dicha carpeta.



// Define el nombre del directorio
$carpetaDestino = 'imagenes/';

// Crea el directorio si no existe
if (!is_dir($carpetaDestino)) {
    mkdir($carpetaDestino, 0755, true); // Crea la carpeta con permisos 0755
}

// Verifica si se ha enviado el formulario
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Verifica si se ha subido un archivo
    if (isset($_FILES['imagen'])) {
        $imagen = $_FILES['imagen'];

        // Verifica si hay errores en la subida
        if ($imagen['error'] === UPLOAD_ERR_OK) {
            // Comprueba el tamaño del archivo (puedes ajustar este límite)
            if ($imagen['size'] <= 2 * 1024 * 1024) { // Máximo 2 MB
                // Obtiene la extensión del archivo
                $extension = pathinfo($imagen['name'], PATHINFO_EXTENSION);
                // Define el nombre del archivo en el servidor
                $nombreArchivo = uniqid() . '.' . $extension;

                // Mueve el archivo subido a la carpeta de destino
                if (move_uploaded_file($imagen['tmp_name'], $carpetaDestino . $nombreArchivo)) {
                    echo "La imagen se ha subido correctamente: " . htmlspecialchars($nombreArchivo) . "<br>";
                } else {
                    echo "Error al mover la imagen subida.<br>";
                }
            } else {
                echo "La imagen supera el tamaño máximo permitido (2 MB).<br>";
            }
        } else {
            echo "Error al subir la imagen: " . $imagen['error'] . "<br>";
        }
    } else {
        echo "No se ha subido ninguna imagen.<br>";
    }
}

// Muestra todas las imágenes en la carpeta "imagenes"
echo "<h2>Imágenes en la carpeta 'imagenes':</h2>";
if ($gestor = opendir($carpetaDestino)) {
    while (false !== ($archivo = readdir($gestor))) {
        // Ignora los directorios '.' y '..'
        if ($archivo != "." && $archivo != "..") {
            echo '<img src="' . htmlspecialchars($carpetaDestino . $archivo) . '" alt="' . htmlspecialchars($archivo) . '" style="width: 100px; height: auto; margin: 5px;">';
        }
    }
    closedir($gestor); // Cierra el gestor de directorios
} else {
    echo "No se pudo abrir la carpeta.<br>";
}
?>