<?php 
//Crea la clase Perro. De un perro sabemos su tamaño, raza, color y nombre.
//Guarda la clase perro en un fichero llamado perro.php.
//Debes de tener en cuenta que si no existe el archivo se generará un error, por lo tanto debes  incluir el código oportuno dentro de un bloque de excepción.
//Crea el método mostrar_propiedades. Dicho método imprime por ejemplo: “el tamaño del perro es XXX, su color XXXX, su raza XXX y su nombre:XXX.
//Crea un objeto de la clase perro llamado labrador y muestra sus propiedades justo después de crearlo
//Añade a la clase perro el método speak  que haga hablar al animal.
//Crea un segundo objeto llamado caniche.
//Crea una librería con varios animales con sus propiedades y métodos.
//Para la clase perro crea el método get_color , get_raza, etc. Y también los correspondientes set_nombre,…
//Controla los valores que se darán a cada una de las propiedades. Incluye en tu código  las instrucciones necesarias para que, por ejemplo, el nombre del perro sea una cadena de caracteres y no exceda de 21. En caso contrario se debería de dar un mensaje de error
//Por último, modifica tu código para que cuando se hagan cambios en una propiedad se tengan en cuenta los posibles errores. Ejemplo:
//bool $perro_error_message = $labrador->set_nombre('Luna');
//print $perro_error_message ? 'Nombre actualizado correctamente' : 'Nombre no modificado'

//Bloque para la clase si no existe el archivo
try {
    if (!file_exists("perro.php")) {
        throw new Exception("Error: Archivo perro.php no encontrado.");
    } else {
        // Incluye el archivo perro.php si existe
        require_once "perro.php";
    }
} catch (Exception $e) {
    echo $e->getMessage();
}

// Clase Perro
class Perro {
    private $tamaño;
    private $raza;
    private $color;
    private $nombre;
    
    // Constructor para los atributos de Perro
    public function __construct($tamaño, $raza, $color, $nombre) {
        $this->set_tamaño($tamaño);
        $this->set_raza($raza);
        $this->set_color($color);
        $this->set_nombre($nombre);
    }
    
    // Método para mostrar las propiedades del perro
    public function mostrar_propiedades() {
        echo "El tamaño del perro es $this->tamaño, su raza $this->raza, su color $this->color y su nombre: $this->nombre.<br>";
    }
    
    // Método para hacer hablar al perro
    public function speak() {
        echo ("$this->nombre dice: ¡Guau!<br>");
    }

    // Métodos get
    public function get_tamaño() {
        return $this->tamaño;
    }

    public function get_raza() {
        return $this->raza;
    }

    public function get_color() {
        return $this->color;
    }

    public function get_nombre() {
        return $this->nombre;
    }
    
    // Métodos set con validación
    public function set_tamaño($tamaño) {
        $this->tamaño = $tamaño;
    }

    public function set_raza($raza) {
        $this->raza = $raza;
    }

    public function set_color($color) {
        $this->color = $color;
    }

    public function set_nombre($nombre) {
        // Valida que el nombre sea una cadena y tenga máximo 21 caracteres
        if (is_string($nombre) && strlen($nombre) <= 21) {
            $this->nombre = $nombre;
            return true;
        } else {
            echo ("Error: El nombre debe ser una cadena de texto de máximo 21 caracteres.<br>");
            return false;
        }
    }
}

// Crear y mostrar el primer objeto de la clase perro
$labrador = new Perro("Grande", "Labrador", "Negro", "Rex");
$labrador->mostrar_propiedades();// Muestra las propiedades del labrador
$labrador->speak();// Hace que el labrador hable

// Intentar modificar el nombre con el método set_nombre
$perro_error_message = $labrador->set_nombre('Triana');
echo ($perro_error_message ? 'Nombre actualizado correctamente<br>' : 'Nombre no modificado<br>');

// Crear y mostrar el segundo objeto de la clase perro
$caniche = new Perro("Pequeño", "Caniche", "Blanco", "Fifi");
$caniche->mostrar_propiedades();
$caniche->speak();

?>