<?php 
namespace Lib;
use mysqli;

class DataBase {
    private mysqli $conexion;

    // El constructor debe ser __construct()
    public function __construct(
        private string $servidor,
        private string $usuario,
        private string $pass,
        private string $baseDatos
    ) {
        $this->conexion = $this->conectar(); // Establece la conexión en el constructor
    }

    // Función para conectar a la base de datos
    private function conectar(): mysqli {
        // Crear la conexión
        $conexion = new mysqli($this->servidor, $this->usuario, $this->pass, $this->baseDatos);
        
        // Verificar si hay error de conexión
        if ($conexion->connect_error) {
            die("Error en la conexión a la base de datos: " . $conexion->connect_error);
        }
        
        // Devolver la conexión si no hay errores
        return $conexion;
    }
}
?>
