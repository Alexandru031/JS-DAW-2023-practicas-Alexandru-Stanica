<?php 

$array = array();
$numero = 0;
$mostrar_array = "Los numeros son: ";

/* Genero los numeros aleatorios */
for ($i = 0; $i < 5; $i++) {
    $numero = rand(-10, 10);
    array_push($array, $numero);
    $mostrar_array .= $numero . " ";
}

/* Mostrar la media hasta el numero negativo */
$sumaPos = 0;
$sumaNeg = 0;
$contPos = 0;
$contNeg = 0;
$cont_cero = 0;

echo $mostrar_array . "<br>";
for ($j = 0; $j < count($array); $j++) {
    if ($array[$j] < 0) {
        $sumaNeg += $array[$j];
        $contNeg++;
    } else if ($array[$j] > 0) {
        $sumaPos += $array[$j];
        $contPos++;
    } else if ($array[$j] == 0) {
        $cont_cero++;
    }
}

echo "Los numeros de cero son: ".$cont_cero."<br>";
echo "La media de los numeros negativos es: ".$sumaNeg / $contNeg . "<br>";
echo "La media de los numeros positivos es: ".$sumaPos / $contPos . "<br>";

?>