<?php
/*Escribe una función que reciba un argumento.

Dicha función comprobará:
Si el argumento recibido es una cadena de caracteres:
en dicho caso, verificará si está vacía y si es así devolverá:   "Este es el relleno porque estaba vacía"
Si tiene contenido, devolverá la cadena recibida en mayúscula.
Si el argumento no es un string devolverá el argumento recibido más el mensaje “no es una cadena de caracteres”.
*/

function cadenas($cadena)
{
    if (is_numeric($cadena)) {
        return "$cadena no es una cadena de caracteres";
    }
    if (empty($cadena)) {
        return "Este es el relleno porque estaba vacía";
    } else {
        return "La variable de texto no está vacía, tiene este contenido:" . strtoupper($cadena);
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Cadenas</title>
</head>
<body>
<?php
    $argumento= null;
    if (isset($_GET["cadena"]))
        $argumento = $_GET["cadena"];
    else
        $argumento="";

    echo cadenas($argumento);
?>
</body>
</html>
