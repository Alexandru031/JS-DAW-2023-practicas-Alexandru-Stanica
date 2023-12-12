<?php 
    define("LIMITE", rand(1, 10));
    $resultado = LIMITE % 2 == 0 ? "El numero " . LIMITE . " es par." : "El numero " . LIMITE . " es impar.";
    echo $resultado;
?> 