<?php

$array = array();
$numero = 0;
$mostrar_array = "Los numeros son: ";

/* Genero los numeros aleatorios */
for ($i = 0; $i < 20; $i++) {
    $numero = rand(-10, 10);
    array_push($array, $numero);
    $mostrar_array .= $numero . " ";
}

$nums_neg = "Los numeros negativos son: ";
$nums_pos = "Los numeros positivos son: ";

for ($j = 0; $j < count($array); $j++) {
    if ($array[$j] < 0) {
        $nums_neg .= $array[$j] . " ";
    } else if ($array[$j] > 0) {
        $nums_pos .= $array[$j] . " ";
    } else if ($array[$j] == 0) {
        break;
    }
}

echo $mostrar_array . "<br>";
echo $nums_neg . "<br>";
echo $nums_pos . "<br>";
