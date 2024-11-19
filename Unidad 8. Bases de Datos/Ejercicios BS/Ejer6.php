<?php 
// Registra una función anónima para autoloading de clases.
spl_autoload_register(function ($clase){
    // Reemplaza las barras invertidas (\) del nombre de la clase (para namespaces)
    // por barras normales (/) para que sea compatible con las rutas de archivo.
    // Por ejemplo: 'Lib\Database' se convertirá en 'Lib/Database'
    $directorio_clase = str_replace( '\\', '/', $clase);

    // Verifica si el archivo que corresponde a la clase existe.
    // El archivo debe tener la extensión '.php' y debe coincidir con el nombre de la clase.
    if (file_exists($directorio_clase . '.php')){
        // Si el archivo existe, se incluye en el script.
        // Esto hace que la clase definida en ese archivo sea cargada.
        require $directorio_clase . '.php';
    }
});
?>
