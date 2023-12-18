<?php

$conexion = new PDO('mysql:host=localhost;dbname=hotel', 'root', '');
$seleccionar = $conexion->query('SELECT * FROM hoteles;');

echo '<!DOCTYPE html>
      <html>
      <head>
        <title>Ver Hoteles</title>
        <link rel="stylesheet" href="style.css">
      </head>
      <body>';
    echo "<form action='home.php' style='text-align:center;'>";
    echo "<h1 style='text-align:center'>Mostrar Hoteles</h1>";

    if ($seleccionar->rowCount() == 0) {
        echo "<h2>Esta vacío</h2><br>";
    } else {
        echo "<table style='border: 3px solid black; margin: 0 auto;' >";
        echo "<tr>
        <th>Nombre</th>
        <th>Categoria</th>
        <th>Habitantes</th>
        <th>Población</th>
        <th>Dirección</th>
        </tr>";
        while ($registro = $seleccionar->fetch()) {
            echo "<tr>";
            echo '<td>' . $registro['Nombre'] . '</td>';
            echo '<td>' . $registro['Categoria'] . '</td>';
            echo '<td>' . $registro['Habitantes'] . '</td>';
            echo '<td>' . $registro['Poblacion'] . '</td>';
            echo '<td>' . $registro['Direccion'] . '</td>';
            echo '</tr>';
        }
    }
    echo "</table><br>";
    echo "<button type='submit' name='volver' style='padding:10px;border:2px solid black; border-radius:10px; font-size:16px;' >Volver a Home</button>
    </form>";
?>