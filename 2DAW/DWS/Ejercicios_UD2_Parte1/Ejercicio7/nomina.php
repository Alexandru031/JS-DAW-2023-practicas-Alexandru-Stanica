<?php
    $nomina = 700;
    $resultado = 0;
    $estado = "";

    if ($nomina < 800) {
        $resultado = $nomina + ($nomina * 0.20);
        $estado = "incrementado un 20%";
    } else if ($nomina > 800 && $nomina < 1200) {
        $resultado = $nomina;
        $estado = "igualado";
    } else if ($nomina > 1200){
        $resultado = $nomina - ($nomina * 0.15);
        $estado = "decrementado un 15%";
    }
    echo "La nomina sea " . $estado . " de tu nomina " . $nomina . " a " . $resultado;
?>