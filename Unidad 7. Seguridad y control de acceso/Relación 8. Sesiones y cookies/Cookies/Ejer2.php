
<?php

// Verificamos si se ha enviado un formulario con un idioma seleccionado
if (isset($_POST['idioma'])) {
    // Guardamos la elección en una cookie por 30 días
    setcookie('idioma', $_POST['idioma'], time() + (30 * 24 * 60 * 60), "/"); // 30 días
    header("Location: index.php"); // Redirigimos para evitar reenvíos al actualizar la página
    exit;
}

// Si la cookie 'idioma' existe, la usamos para mostrar el idioma
$idiomaSeleccionado = isset($_COOKIE['idioma']) ? $_COOKIE['idioma'] : 'es'; // Por defecto 'es' (español)
?>

<!-- Incluimos el archivo HTML aquí -->
<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selección de Idioma</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background-color: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 300px;
        }
        h1 {
            margin-bottom: 20px;
        }
        select {
            padding: 10px;
            width: 100%;
            margin-bottom: 20px;
            font-size: 16px;
            border-radius: 5px;
            border: 1px solid #ddd;
        }
        button {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Selecciona tu idioma</h1>
        
        <!-- Formulario para seleccionar el idioma -->
        <form method="POST" action="index.php">
            <label for="idioma">Idioma:</label>
            <select name="idioma" id="idioma">
                <option value="es" <?php echo $idiomaSeleccionado == 'es' ? 'selected' : ''; ?>>Español</option>
                <option value="en" <?php echo $idiomaSeleccionado == 'en' ? 'selected' : ''; ?>>English</option>
            </select>
            <button type="submit">Guardar</button>
        </form>
        
        <p>Tu idioma seleccionado: <span id="idiomaSeleccionado"><?php echo $idiomaSeleccionado == 'en' ? 'English' : 'Español'; ?></span></p>
    </div>

</body>
</html>
