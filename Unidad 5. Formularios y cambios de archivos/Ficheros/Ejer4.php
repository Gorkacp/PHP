<?php
// 4.-Crea un fichero de texto con varias líneas
// Ábrelo en modo escritura.
// Lee su contenido con fgets() y muestra el contenido.
// Cierra el archivo.
// Escribe dentro de ese archivo un nuevo texto, recuerda que ahora no tendrá que estar abierto en modo lectura.
// Copia ese fichero de texto en el mismo directorio con otro nombre.
// Renombra el archivo de texto anterior.
// Elimina este último archivo.


// 1. Crea un fichero de texto con varias líneas
$nombreArchivo = 'archivo.txt';
$contenidoInicial = "Línea 1: Este es el contenido de la primera línea.\n";
$contenidoInicial .= "Línea 2: Aquí está la segunda línea.\n";
$contenidoInicial .= "Línea 3: Y esta es la tercera línea.\n";

// 2. Ábrelo en modo escritura
$fileHandle = fopen($nombreArchivo, 'w');
if ($fileHandle) {
    // Escribe el contenido inicial en el archivo
    fwrite($fileHandle, $contenidoInicial);
    fclose($fileHandle); // Cierra el archivo
} else {
    die("No se pudo abrir el archivo para escritura.");
}

// 3. Lee su contenido con fgets() y muestra el contenido
$fileHandle = fopen($nombreArchivo, 'r');
if ($fileHandle) {
    echo "Contenido del archivo:\n";
    while (($line = fgets($fileHandle)) !== false) {
        echo $line; // Muestra cada línea del archivo
    }
    fclose($fileHandle); // Cierra el archivo
} else {
    die("No se pudo abrir el archivo para lectura.");
}

// 4. Escribe dentro de ese archivo un nuevo texto
$fileHandle = fopen($nombreArchivo, 'a'); // Abre en modo append para agregar contenido
if ($fileHandle) {
    $nuevoContenido = "Línea 4: Este es un nuevo contenido añadido.\n";
    fwrite($fileHandle, $nuevoContenido);
    fclose($fileHandle); // Cierra el archivo
} else {
    die("No se pudo abrir el archivo para agregar contenido.");
}

// 5. Copia ese fichero de texto en el mismo directorio con otro nombre
$nombreArchivoCopia = 'archivo_copia.txt';
if (!copy($nombreArchivo, $nombreArchivoCopia)) {
    die("Error al copiar el archivo.");
}

// 6. Renombra el archivo de texto anterior
$nombreArchivoRenombrado = 'archivo_renombrado.txt';
if (!rename($nombreArchivo, $nombreArchivoRenombrado)) {
    die("Error al renombrar el archivo.");
}

// 7. Elimina este último archivo
if (!unlink($nombreArchivoRenombrado)) {
    die("Error al eliminar el archivo renombrado.");
}

echo "Operaciones completadas con éxito.";
?>
