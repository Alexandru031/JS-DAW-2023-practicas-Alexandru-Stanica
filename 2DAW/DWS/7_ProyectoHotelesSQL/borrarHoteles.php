<?php

$conexion = new PDO('mysql:host=localhost;dbname=hotel', 'root', '');
$seleccionar = $conexion->query('DELETE FROM hoteles;');

echo '<!DOCTYPE html>
      <html>
      <head>
        <title>Ver Hoteles</title>
        <link rel="stylesheet"href="style.css">
      </head>
      <body>';
echo "<form action='home.php' style='text-align:center;'>";
echo "<h1 style='text-align:center; padding-top:50px;'>Se borró los hoteles correctamente</h1><br>";
echo "<form action='home.php' style='text-align:center;'>
<button type='submit' name='volver' style='padding:10px;border:2px solid black; border-radius:10px; font-size:16px;' >Volver a Home</button>
    </form>";
?>