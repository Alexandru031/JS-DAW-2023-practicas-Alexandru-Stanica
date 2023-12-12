<?php

$facturas = array();
$mostrar_array = "";

/* Genero los numeros aleatorios */
for ($i = 0; $i < 5; $i++) {
    $cod_art = $i+1;
    $cant_litros = rand(1, 150);
    $precio_lit = rand(1, 10);

    array_push($facturas, array($cod_art, $cant_litros, $precio_lit));
    $mostrar_array .= "El codigo de producto es: " . $cod_art . " la cantidad de litros: " . $cant_litros . " y el precio por litro: " . $precio_lit . "<br>";
}
echo $mostrar_array . "<br>";


$factura_total = 0;
$cont_fac_600 = 0;

/* Factura Total */
for ($j=0; $j < count($facturas) ; $j++) { 
    $factura_total += $facturas[$j][1] * $facturas[$j][2];
    if ($facturas[$j][1] * $facturas[$j][2] > 600) {
        $cont_fac_600++;
    }
}

echo "Cantidad de facturas emitidas más de 600€ es: " . $cont_fac_600 . "<br>";
echo "Cantidad de litros vendidos en el articulo 1 es: " . $facturas[0][1] * $facturas[0][2] . "€<br>";
echo "La factura total es: " . $factura_total . "€";