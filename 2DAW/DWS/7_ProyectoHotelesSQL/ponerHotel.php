<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
  $conexion = new PDO('mysql:host=localhost;dbname=hotel', 'root', '');
  $consulta = $conexion->prepare("INSERT INTO hoteles (Nombre, Categoria, Habitantes, Poblacion, Direccion) VALUES (:nombre, :categoria, :habitantes, :poblacion, :direccion)");

  $consulta->bindParam(':nombre', $_GET["nombre"]);
  $consulta->bindParam(':categoria', $_GET["categoria"]);
  $consulta->bindParam(':habitantes', $_GET["habitantes"]);
  $consulta->bindParam(':poblacion', $_GET["poblacion"]);
  $consulta->bindParam(':direccion', $_GET["direccion"]);

  $resultado = $consulta->execute();

  echo '<!DOCTYPE html>
      <html>
      <head>
        <title>Ver Hoteles</title>
        <link rel="stylesheet"href="style.css">
      </head>
      <body>';
  echo "<form action='home.php' style='text-align:center;'>";
  echo "<h1 style='text-align:center; padding-top:50px;'>Agregó correctamente el hotel</h1><br>";
  echo "<form action='home.php' style='text-align:center;'>
<button type='submit' name='volver' style='padding:10px;border:2px solid black; border-radius:10px; font-size:16px;' >Volver a Home</button>
    </form>";
}
