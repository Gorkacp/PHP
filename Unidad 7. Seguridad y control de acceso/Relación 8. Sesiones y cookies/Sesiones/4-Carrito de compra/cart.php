<?php
session_start();

// Comprobar si hay productos en el carrito
$carritoVacio = empty($_SESSION["productosEnCesta"]);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Carrito de la Compra</title>
</head>
<body>
    <h2>Carrito de la Compra</h2>

    <?php if ($carritoVacio): ?>
        <p>El carrito está vacío.</p>
    <?php else: ?>
        <table border="1">
            <tr>
                <th>Producto</th>
                <th>Cantidad</th>
            </tr>
            <?php foreach ($_SESSION["productosEnCesta"] as $producto => $cantidad): ?>
                <tr>
                    <td><?php echo htmlspecialchars($producto); ?></td>
                    <td><?php echo htmlspecialchars($cantidad); ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>

    <br>
    <a href="index.php">Añadir más productos</a>
    <br><br>
    <form action="clear_cart.php" method="post">
        <button type="submit">Vaciar carrito</button>
    </form>
</body>
</html>
