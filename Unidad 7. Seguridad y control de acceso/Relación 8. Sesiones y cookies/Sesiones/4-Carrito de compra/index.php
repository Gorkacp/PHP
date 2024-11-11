<?php
session_start();

// Procesar la compra si se envió el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $producto = $_POST["producto"];
    $cantidad = (int)$_POST["cantidad"];

    // Comprobar si el producto ya está en el carrito
    if (isset($_SESSION["productosEnCesta"][$producto])) {
        // Si el producto ya existe, sumar la cantidad
        $_SESSION["productosEnCesta"][$producto] += $cantidad;
    } else {
        // Si el producto no existe, agregarlo con la cantidad indicada
        $_SESSION["productosEnCesta"][$producto] = $cantidad;
    }

    // Redirigir a la página del carrito después de añadir el producto
    header("Location: cart.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Carrito de la Compra</title>
</head>
<body>
    <h2>Añadir productos al carrito</h2>
    <form method="POST" action="">
        <label for="producto">Producto:</label>
        <input type="text" name="producto" id="producto" required>
        <br><br>
        <label for="cantidad">Cantidad:</label>
        <input type="number" name="cantidad" id="cantidad" required min="1">
        <br><br>
        <input type="submit" value="Comprar">
    </form>

    <p><a href="cart.php">Ver carrito de la compra</a></p>
</body>
</html>
