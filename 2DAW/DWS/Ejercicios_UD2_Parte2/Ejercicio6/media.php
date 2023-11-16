<?php

$array = array();
$numero = 0;
$mostrar_array = "Los numeros son: ";

/* Genero los numeros aleatorios */
for ($i = 0; $i < 10; $i++) {
    $numero = rand(-3, 10);
    array_push($array, $numero);
    $mostrar_array .= $numero . " ";
}

/* Mostrar la media hasta el numero negativo */
$suma = 0;
$hayNegativos = false;
echo $mostrar_array . "<br>";
for ($j = 0; $j <= count($array); $j++) {
    if ($array[$j] < 0) {
        $hayNegativos = true;
    }
    if ($array[0] < 0) {
        echo "No hay valores para hacer la media <br>";
        break;
    }
    if ($array[$j] < 0) {
        echo "La media es: " . $suma / $j . "<br>";
        break;
    }
    if (!$hayNegativos && $j == count($array)) {
        echo "La media de todos los valores es " . $suma / count($array) ."<br>";
    }

    $suma += $array[$j];
    $cont++;
}
?>

