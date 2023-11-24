<?php 
$my_Archivo = fopen("borrar.php", "w");

while(($data = fgetcsv($my_Archivo,1000, ";")) == true) {
    $data = "";
    fputcsv($mi_Archivo, $data, $delimitador);
}
rewind($mi_Archivo);
fclose($mi_Archivo);
?>