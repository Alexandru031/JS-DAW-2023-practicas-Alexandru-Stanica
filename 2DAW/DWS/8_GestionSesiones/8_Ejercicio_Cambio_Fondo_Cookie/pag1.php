<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cambio de Fondo con Cookie</title>
</head>
<style>
    a {
        text-decoration: none;
        border-radius: 5px;
        border: 2px solid black;
    }
</style>
<body style="background-color:<?php echo $_COOKIE['color']?>">
    <h1>Cambio de Fondo Cookie</h1>
    <form action="cookie.php" method="post">
        <select name="color" id="color">
            <option value="vacio" selected=true>Selecciona</option>
            <option value="blue">azul</option>
            <option value="red">rojo</option>
            <option value="yellow">Amarillo</option>
            <option value="orange">Naranja</option>
        </select>
        <button type="submit">Enviar</button>
        <a href="borrar.php">Borrar</button>
        <a href="pag2.php">Acceder pag2.php</a>
    </form>
</body>
</html>