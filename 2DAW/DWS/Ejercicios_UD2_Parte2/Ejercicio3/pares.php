<?php 

    $array = array();
    $numero = 0;

    /* Genero los numeros aleatorios */
    for ($i=0; $i < 100 ; $i++) { 
        $numero = rand(1, 100);
        array_push($array, $numero);
    }

    echo "Los 5 primeros numero pares <br>";

    /* Mostrar los 5 primeros pares */
    for ($a=0; $a <= 5; $a++) {
        if ($array[$a] % 2 == 0) {
            echo $array[$a]. " ";   
        }
    }
    echo "<br><br>";

    /* Mostrar todos los numero de array */
    echo "Todos los datos de un array <br>";
    for ($w=0; $w < count($array) ; $w++) { 
        echo $array[$w]." ";
    }
    echo "<br>";
?>