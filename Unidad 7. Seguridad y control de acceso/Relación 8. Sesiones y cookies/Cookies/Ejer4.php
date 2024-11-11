<?php
// Crea un página en la que se muestre un cartel avisando que debe aceptar la política de Cookies con un botón.
// Cuando sea pulsado crea una cookie.
// No vuelvas a mostrar el cartel mientras exista.


// Verificar si la cookie de aceptación de cookies ya existe
$cookie_accepted = isset($_COOKIE["accept_cookies"]);

// Si se ha enviado el formulario, establecer la cookie
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    setcookie("accept_cookies", "true", time() + 86400 * 30, "/"); // Cookie de 30 días
    $cookie_accepted = true;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aviso de Cookies</title>
    <style>
        /* Estilos básicos */
        body { font-family: Arial, sans-serif; }
        #cookie-banner {
            position: fixed;
            bottom: 0;
            width: 100%;
            background-color: #333;
            color: #fff;
            padding: 15px;
            text-align: center;
            display: <?= $cookie_accepted ? 'none' : 'block' ?>;
        }
        #cookie-banner button {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            font-size: 16px;
            margin-left: 10px;
        }
    </style>
</head>
<body>

<?php if (!$cookie_accepted): ?>
    <div id="cookie-banner">
        <p>Este sitio web utiliza cookies para mejorar la experiencia de usuario. Debe aceptar nuestra política de cookies.</p>
        <form method="post">
            <button type="submit">Aceptar</button>
        </form>
    </div>
<?php endif; ?>

</body>
</html>
