<?php

header("Content-Type: application/json; charset=UTF-8");
include 'conexion.php';

$conectar = new Conexion();

if (isset($_GET['id'])) {
    $id = $_GET['id']; 

$sql = 'SELECT * FROM jugador WHERE id = :id';
$db = $conectar->prepare($sql);
$db->bindParam(":id", $id, PDO::PARAM_INT);
$db->execute();

$jugador['jugador'] = array();
 while ($row = $db->fetch(PDO::FETCH_ASSOC)) {
    $e = array(
        "id" => $row['id'],
        "nombre" => $row['nombre'],
        "posición" => $row['posicion']
    );

    array_push($jugador['jugador'], $e);
 }
 echo json_encode($jugador);

}
?>