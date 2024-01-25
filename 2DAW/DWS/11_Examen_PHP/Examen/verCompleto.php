<?php

header("Content-Type: application/json; charset=UTF-8");
include 'conexion.php';

$conectar = new Conexion();

$db1 = $conectar->prepare("SELECT * FROM usuario");
$db1->execute();

$db2 = $conectar->prepare('SELECT * FROM equipo');
$db2->execute();

$db3 = $conectar->prepare('SELECT * FROM jugador');
$db3->execute();


$mostrar['database'] = array();
$equipo['equipo'] = array();

while ($usuarios = $db1->fetch(PDO::FETCH_ASSOC)) {
    $e = array(
        "usuarios" => array(
            "login" => $usuarios['login'],
            "password" => $usuarios['password']
        )
    );
    while ($equipos = $db2->fetch((PDO::FETCH_ASSOC))) {
        $a = array (
            "equipo" => array(
                "jugador1" => $equipos['jugador1'],
                "jugador2" => $equipos['jugador2'],
                "jugador3" => $equipos['jugador3'],
                "jugador4" => $equipos['jugador4'],
                "jugador5" => $equipos['jugador5'],
            )
        );

        array_push($equipo['equipo'], $a);
    }
    array_push($mostrar['database'], $equipo['equipo']);
}

echo json_encode($mostrar);
