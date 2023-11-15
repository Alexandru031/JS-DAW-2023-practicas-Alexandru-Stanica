<?php 

    $codigo = 1;
    $nombre = "Tom";
    $apellidos = "Smith";
    $puesto = "Vendedor";
    $sueldo = 7500;
    $edad = 26;
    $num_hijos = 0;
    $sucursal = "New York";
    $retencion = 0;
    $tipoRetencion = 0;

    /* Retencion 1 */
    if ($puesto == "Vendedor" && $sueldo > 7000) {
        $retencion = 0.10;
        $tipoRetencion = 1;
    } else {
        $retencion = 0.20;
        $tipoRetencion = 1;
    }

    /* Retencion 2 */
    if ($edad > 50 || $num_hijos > 2) {
        $retencion = 0.05;
        $tipoRetencion = 2;
    } else {
        $retencion = 0.10;
        $tipoRetencion = 2;
    }

    /* Retencion 3 */
    if ($sueldo > 50000 && $sueldo < 80000) {
        $retencion = 0.05;
        $tipoRetencion = 3;
    } else {
        $retencion = 0.12;
        $tipoRetencion = 3;
    }

    /* Retencion 4 */
    if ($num_hijos == 1 || $num_hijos == 2) {
        $retencion = 0.10;
        $tipoRetencion = 4;
    } else {
        $retencion = 0.05;
        $tipoRetencion = 4;
    }

    /* Retencion 5 */
    if ($sueldo > 80000 || $num_hijos == 0) {
        $retencion = 0.15;
        $tipoRetencion = 5;
    } else {
        $retencion = 0.05;
        $tipoRetencion = 5;
    }

    /* Calcular retencion */
    $restaRetencion = $sueldo * $retencion;
    $resultado = $sueldo - $restaRetencion;

    echo "<table style='border:3px solid black; margin:0 auto;'> 
    <tr> 
    <th style='border:1px solid black; background-color:gray;'> Codigo </th>
    <th style='border:1px solid black; background-color:gray;'> Nombre </th>
    <th style='border:1px solid black; background-color:gray;'> Apellidos </th>
    <th style='border:1px solid black; background-color:gray;'> Puesto </th>
    <th style='border:1px solid black; background-color:gray;'> Sueldo </th>
    <th style='border:1px solid black; background-color:gray;'> Edad </th>
    <th style='border:1px solid black; background-color:gray;'> Num_hijos </th>
    <th style='border:1px solid black; background-color:gray;'> Sucursal </th>
    </tr>
    <tr style='border:1px solid black;'> 
    <td style='border:1px solid black;'> $codigo </td>
    <td style='border:1px solid black;'> $nombre </td>
    <td style='border:1px solid black;'> $apellidos </td>
    <td style='border:1px solid black;'> $puesto </td>
    <td style='border:1px solid black;'> $sueldo </td>
    <td style='border:1px solid black;'> $edad </td>
    <td style='border:1px solid black;'> $num_hijos </td>
    <td style='border:1px solid black;'> $sucursal </td>
    </tr> 
    </table> <br>";

    echo "El tipo de retencion: " . $tipoRetencion 
    . "<br>" . "El salario: " . $sueldo 
    . "<br>" . "La retencion que se aplica: " . $retencion * 100 . "%"
    . "<br>" . "Resta la retencion: " . $restaRetencion
    . "<br>" . "Total: " . $resultado;
?>