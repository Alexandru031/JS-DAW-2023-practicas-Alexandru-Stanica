<?php 

    $precio = 500;
    $unidades = 10;
    define("IVA", 0.21);

    $importe_base = 0;
    $importe_iva = 0;
    $importe_final = 0;

    $importe_base = $precio * $unidades;
    $importe_iva = $importe_base * IVA;
    $importe_final = $importe_base + $importe_iva;

    echo "El precio del producto es " . $precio 
    . "<br>" . "Las unidades adquiridas " . $unidades 
    . "<br>" . "El importe base es " . $importe_base 
    . "<br>" . "El importe de IVA es " . $importe_iva 
    . "<br>" . "El importe final es " .  $importe_final;
?>