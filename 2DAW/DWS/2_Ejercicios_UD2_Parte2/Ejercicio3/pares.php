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
    $cont_pares = 0;
    for ($j=0; $j < count($array) ; $j++) { 
        if ($array[$j] % 2 == 0) {
            echo $array[$j]." ";
            $cont_pares++;
        }
        if ($cont_pares == 5) {
            break;
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