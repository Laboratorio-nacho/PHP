<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario PHP</title>
</head>
<body>

    <h2>Formulario de Saludo</h2>
    <!-- El formulario envía los datos a esta misma página usando POST -->
    <form action="formulario.php" method="POST">
        <label for="nombre">Introduce tu nombre:</label>
        <input type="text" id="nombre" name="nombreUsuario" required>
        <button type="submit">Enviar</button>
    </form>

    <br>

    <?php
    // Validamos si el formulario ya fue enviado mediante el método POST
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Guardamos el dato ingresado limpiando espacios en blanco
        $nombre = trim($_POST["nombreUsuario"]);
        
        // Mostramos el saludo en pantalla
        echo "<h3>¡Hola, " . htmlspecialchars($nombre) . "! Bienvenido a PHP. OSIOSI</h3>";
    }
    ?>

</body>
</html>
