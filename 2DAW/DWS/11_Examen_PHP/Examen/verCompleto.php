<?php

header("Content-Type: application/json; charset=UTF-8");
include 'conexion.php';

$conectar = new Conexion();

$db1 = $conectar->prepare("SELECT * FROM usuario");
$db1->execute();

$mostrar = array();
while ($usuarios = $db1->fetch(PDO::FETCH_ASSOC)) {
    $e = array(
        "usuario" => array(
            "login" => $usuarios['login'],
            "password" => $usuarios['password']
        ),
        "equipo" => getEquipoUsuario($conectar, $usuarios['login'])
    );
    array_push($mostrar, $e);
}

function getEquipoUsuario($conectar, $usuario)
{
    $db2 = $conectar->prepare('SELECT * FROM equipo WHERE usuario = :usuario');
    $db2->bindValue(':usuario', $usuario);
    $db2->execute();

    while ($equipos = $db2->fetch((PDO::FETCH_ASSOC))) {
        $u = array(
            "jugador1" => getJugadorEquipo($conectar, $equipos['jugador1']),
            "jugador2" => getJugadorEquipo($conectar, $equipos['jugador2']),
            "jugador3" => getJugadorEquipo($conectar, $equipos['jugador3']),
            "jugador4" => getJugadorEquipo($conectar, $equipos['jugador4']),
            "jugador5" => getJugadorEquipo($conectar, $equipos['jugador5']),
        );
        return $u;
    }
};

function getJugadorEquipo($conectar, $idJugador)
{
    $db3 = $conectar->prepare('SELECT * FROM jugador WHERE id = :id');
    $db3->bindValue(':id', $idJugador);
    $db3->execute();

    while ($jugador = $db3->fetch(PDO::FETCH_ASSOC)) {
        $j = array(
            "id" => $jugador['id'],
            "nombre" => $jugador['nombre'],
            "posición" => $jugador['posicion'],
            "partidos" => getPartidoJugador($conectar, $jugador['id'])
        );
        return $j;
    }
}

/*
Para dar valor a la sentencia SQL en WHERE ponemos "?".
Ejemplo: jugador = ?

Una vez puesto, modificamos el metodo "execute()".
Ejemplo: $db->execute([$jugador])

De está forma no hace falta poner bindParam o BindValue
*/

function getPartidoJugador($conectar, $idJugador) {
    $db4 = $conectar->prepare('SELECT * FROM partido WHERE jugador = :jugador');
    $db4->bindValue(':jugador', $idJugador);
    $db4->execute();

    $partidos = array();
    while ($partido = $db4->fetch(PDO::FETCH_ASSOC)) {
        $p = array(
            "jornada" => $partido['jornada'],
            "jugador" => $partido['jugador'],
            "puntos" => $partido['puntos']
        );
        array_push($partidos, $p);
    }
    return $partidos;
}

echo json_encode($mostrar);
