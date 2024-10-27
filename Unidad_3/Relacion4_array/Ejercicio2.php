<?php
// Función para generar un grupo de animales aleatorios
function generarGrupoAnimales($min, $max) {
    $numAnimales = rand($min, $max); // Número aleatorio de animales entre 20 y 30
    $animales = array();

    // Generar el array de animales con código Unicode entre 128000 y 128060
    for ($i = 0; $i < $numAnimales; $i++) {
        $animales[] = "&#" . rand(128000, 128060) . ";";
    }

    return $animales;
}

// Función para seleccionar un animal al azar y eliminarlo del grupo
function eliminarAnimal(&$animales) {
    $indiceAleatorio = array_rand($animales); // Seleccionar un índice aleatorio
    $animalSuelto = $animales[$indiceAleatorio]; // Obtener el animal al azar
    unset($animales[$indiceAleatorio]); // Eliminar el animal del array
    return $animalSuelto;
}

// Función para mostrar el grupo de animales
function mostrarGrupoAnimales($animales) {
    foreach ($animales as $animal) {
        echo $animal . " ";
    }
    echo "<br>";
}

// Generar el grupo de animales
$grupoInicial = generarGrupoAnimales(20, 30);

// Mostrar el grupo inicial de animales
echo "Grupo inicial de animales:<br>";
mostrarGrupoAnimales($grupoInicial);

// Seleccionar un animal al azar y eliminarlo del grupo
$animalSuelto = eliminarAnimal($grupoInicial);

// Mostrar el animal suelto
echo "<br>Animal suelto eliminado: " . $animalSuelto . "<br>";

// Mostrar el grupo después de eliminar el animal suelto
echo "<br>Grupo tras eliminar el animal suelto:<br>";
mostrarGrupoAnimales($grupoInicial);

// Mostrar el número total de animales que quedan
echo "<br>Número total de animales que quedan: " . count($grupoInicial) . "<br>";
?>