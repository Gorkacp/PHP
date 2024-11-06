<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $fecha_nacimiento = $_POST['fecha_nacimiento'];
    $correo = $_POST['correo'];
    $lenguajes = isset($_POST['lenguajes']) ? implode(", ", $_POST['lenguajes']) : "";
    $paginas_estaticas = $_POST['paginas_estaticas'];
    $comentarios = $_POST['comentarios'];
    $contrasena = $_POST['contrasena'];
    $repetir_contrasena = $_POST['repetir_contrasena'];

    // Verificación de contraseña
    if ($contrasena !== $repetir_contrasena) {
        die("Las contraseñas no coinciden.");
    }

    // Cargar o crear el archivo XML
    $xml_file = 'empleados.xml';
    if (file_exists($xml_file)) {
        $xml = simplexml_load_file($xml_file);
    } else {
        $xml = new SimpleXMLElement('<empleados></empleados>');
    }

    // Añadir un nuevo empleado
    $empleado = $xml->addChild('empleado');
    $empleado->addChild('nombre', htmlspecialchars($nombre));
    $empleado->addChild('apellidos', htmlspecialchars($apellidos));
    $empleado->addChild('fecha_nacimiento', $fecha_nacimiento);
    $empleado->addChild('correo', $correo);
    $empleado->addChild('lenguajes', $lenguajes);
    $empleado->addChild('paginas_estaticas', $paginas_estaticas);
    $empleado->addChild('comentarios', htmlspecialchars($comentarios));
    $empleado->addChild('telefono', '');  // Campo vacío para teléfono
    $empleado->addChild('codigo_postal', '');  // Campo vacío para código postal

    // Guardar el archivo XML
    $xml->asXML($xml_file);

    echo "Empleado registrado correctamente.";
}
?>
