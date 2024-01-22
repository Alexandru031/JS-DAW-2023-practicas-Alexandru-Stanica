<?php
try {
$conexion = new PDO('mysql:host=localhost;dbname=hotel', 'root', '');
$conexion->exec('USE hotel');
$conexion->exec('CREATE TABLE IF NOT EXISTS hoteles (
                                        Id int(255) NOT NULL AUTO_INCREMENT PRIMARY KEY,
                                        Nombre varchar(20) NOT NULL,
                                        Categoria int(1) NOT NULL,
                                        Habitantes int(255) NOT NULL,
                                        Poblacion varchar(20) NOT NULL,
                                        Direccion varchar(50) NOT NULL)');

$conexion->exec("INSERT INTO hoteles (Nombre, Categoria, Habitantes, Poblacion, Direccion) VALUES 
        ('Abashiri (NH)', 3, 168, '46013 Valencia', 'Avenida Ausias March, 59'), 
        ('Abba Acteon', 4, 189, '46023 Valencia', 'Escultor Vicente Bertrán Grimal, 2'), 
        ('Acta Atarazanas', 4, 42, '46011 Valencia', 'Blanquerías, 11'),
        ('Acta del Carmen', 3, 25, '46003 Valencia', 'Plaza Tribunal de las Aguas, 4'),
        ('AC Valencia (AC Hotels)', 4, 183, '46023 Valencia', 'Avenida de Francia, 67'),
        ('Ad Hoc Monumental Valencia', 3, 28, '46003 Valencia', 'Boix, 4'), 
        ('Alkazar', 1, 18, '46003 Valencia', 'Mosén Femades, 11')");

echo '<!DOCTYPE html>
      <html>
      <head>
        <title>Ver Hoteles</title>
        <link rel="stylesheet"href="style.css">
      </head>
      <body>';
echo "<form action='home.php' style='text-align:center;'>";
echo "<h1 style='text-align:center; padding-top:50px;'>Se han restaurado los Hoteles</h1><br>";
echo "<form action='home.php' style='text-align:center;'>
<button type='submit' name='volver' style='padding:10px;border:2px solid black; border-radius:10px; font-size:16px;' >Volver a Home</button>
    </form>";
  } catch (PDOException $e) {
    echo 'Error de conexión: ' . $e->getMessage();
  }