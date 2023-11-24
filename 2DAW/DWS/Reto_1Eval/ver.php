<?php
echo "<h1 style='text-align:center'>Mostrar Hoteles</h1>";
$my_Archivo = fopen("hoteles.csv", "r") or die("El archivo .csv no existe");

echo "<table style='border: 3px solid black; margin: 0 auto;' >";
echo "<tr>
        <th>Nombre</th>
        <th>Categoria</th>
        <th>Habitantes</th>
        <th>Población</th>
        <th>Dirección</th>
    </tr>";
while(($data = fgetcsv($my_Archivo,1000, ";")) == true) {
    echo "<tr>";
$num = count($data);
    for ($i=0; $i < $num; $i++) {
        echo "<td style='border: 1px solid black;'> $data[$i] </td>";
    }
    echo "</tr>";
}
echo "</table><br>";
echo "<form action='home.php'>
<button type='submit' name='volver' value='si'>Volver a Home</button>
    </form>";
fclose($my_Archivo);
?>