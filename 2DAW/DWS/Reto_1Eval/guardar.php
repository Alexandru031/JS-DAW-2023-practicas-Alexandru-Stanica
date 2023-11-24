<?php
$hoteles = array(
    array("Abashiri (NH)", 3, 168, "46013 Valencia", "Avenida Ausias March, 59"),
    array("Abba Acteon", 4, 189, "46023 Valencia", "Escultor Vicente Bertrán Grimal, 2"),
    array("Acta Atarazanas", 4, 42, "46011 Valencia", "Plaza Tribunal de las Aguas, 4"),
    array("Acta del Carmen", 3, 25, "46003 Valencia", "Blanquerías, 11"),
    array("AC Valencia (AC Hotels)", 4, 183, "46023 Valencia", "Avenida de Francia, 67"),
    array("Ad Hoc Monumental Valencia", 3, 28, "46003 Valencia", "Boix, 4"),
    array("Alkazar", 1, 18, "46003 Valencia", "Mosén Femades, 11")
);

$mi_Archivo = fopen("hoteles.csv", "w") or die("El archivo no existe");
$delimitador = ";";

foreach ($hoteles as $linea) {
    fputcsv($mi_Archivo, $linea, $delimitador);
}
rewind($mi_Archivo);
fclose($mi_Archivo);

echo "Se han restaurado los hoteles<br><br>";
echo '<a href="home.php">Volver a Home</a>';
?>