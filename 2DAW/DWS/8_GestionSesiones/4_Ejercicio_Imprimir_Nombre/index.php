<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imprimir Nombre</title>
</head>
<body>
    <h1>Imprimir Nombre</h1>
    <p>Formulario para impirmir un nombre y que cada vez que entremos nos da la bienvenida del mismo nombre</p>
    <!-- <h2>Hola $_COOKIE['visitante']</h2>; -->
    <?php
    if (isset($_COOKIE['visitante'])) {
        echo "<h2>Bienvenido {$_COOKIE['visitante']}</h2>";
    } else {
        echo '<form method="post" action="enviar.php">
                <label form="nombre">Introduce Nombre: </label>
                <input type="text" name="nombre" id="nombre">
                <button type="submit">Enviar</button>
        </form>';
    }
    ?>
</body>
</html>