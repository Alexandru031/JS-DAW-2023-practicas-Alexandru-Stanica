<?php

try {
header("Content-Type: application/json; charset=UTF-8");
$conexion = new PDO('mysql:host=localhost;dbname=hotel', 'root', '');

$query = 'SELECT * FROM hoteles;';
$stmt = $conexion->prepare($query);
$stmt->execute();
$contador = $stmt->rowCount(); // Obtener el número total de filas

if ($_SERVER['REQUEST_METHOD'] == 'GET' && $contador > 0) {
    $hoteles['hoteles'] = array();
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        $e = array(
            "id" => $row['Id'],
            "Nombre" => $row['Nombre'],
            "Categoria"=> $row['Categoria'],
            "Habitantes"=> $row['Habitantes'],
            "Poblacion"=> $row['Poblacion'],
            "Direccion"=> $row['Direccion']
        );
        array_push($hoteles["hoteles"], $e);
    }
    echo json_encode($hoteles);
}

} catch (PDOException $e) {
    echo json_encode(array("message"=>"'ERROR: No existe la tabla de hoteles. Tienes que restaurar.'"));
}