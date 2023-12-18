<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    /*if ($_SERVER['volver'] == "Volver a Home") {
                include "home.php";
            }*/
    $my_Archivo = fopen("hoteles.csv", "a");
    fputcsv($my_Archivo, array($_GET['nombre'], $_GET['categoria'], $_GET['habitantes'], $_GET['poblacion'], $_GET['direccion']), ";");
    fclose($my_Archivo);

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
?>