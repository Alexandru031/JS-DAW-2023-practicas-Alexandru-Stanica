<?php
    $my_Archivo = fopen("hoteles.csv", "r") or die("El archivo .csv no existe");

    echo '<!DOCTYPE html>
      <html>
      <head>
        <title>Ver Hoteles</title>
        <link rel="stylesheet"href="style.css">
      </head>
      <body>';
    echo "<form action='home.php' style='text-align:center;'>";
    echo "<h1 style='text-align:center'>Mostrar Hoteles</h1>";

    if (filesize("hoteles.csv") == 0) { /* Comprobar si el archivo esta vacio */
        echo "<h1 style='text-align:center; padding:10px 0px;'>Esta Vació</h1>";
    } else {
    echo "<table style='border: 3px solid black; margin: 0 auto;' >";
    echo "<tr>
        <th>Nombre</th>
        <th>Categoria</th>
        <th>Habitantes</th>
        <th>Población</th>
        <th>Dirección</th>
    </tr>";
    while (($data = fgetcsv($my_Archivo, 1000, ";")) == true) {
        echo "<tr>";
        $num = count($data);
        for ($i = 0; $i < $num; $i++) {
            echo "<td style='border: 1px solid black;'> $data[$i] </td>";
        }
        echo "</tr>";
    }
    echo "</table><br>";
}
    echo "<button type='submit' name='volver' style='padding:10px;border:2px solid black; border-radius:10px; font-size:16px;' >Volver a Home</button>
    </form>";
    fclose($my_Archivo);
