<?php
session_start();

$defensa = $_GET['defensa'];
$portero = $_GET['portero'];
$delantero = $_GET['delantero'];
$centrocampista = $_GET['centrocampista'];
$extremo = $_GET['extremo'];

echo "La defensa es: " . $defensa . "<br>";
echo "El portero es: " . $portero . "<br>"; 
echo "El delantero es: " . $delantero . "<br>";
echo "El centrocampista es: " . $centrocampista . "<br>";
echo "El extremo es: " . $extremo . "<br><br>";
echo "<a href='salir.php' style='text-decoration:none;color:black;border:1px solid black; padding:10px;'>Cerrar Sesión</a>";
echo "<a href='verEquipo.php' style='text-decoration:none;color:black;border:1px solid black; padding:10px;'>Ver Todos los Equipos</a>";

include "conexion.php";

$conexion = conectar();

try {
    $db = $conexion->prepare("UPDATE equipo SET jugador1 = :jugador1 , jugador2 = :jugador2, jugador3 = :jugador3, jugador4 = :jugador4, jugador5 = :jugador5, puntos = :puntos WHERE usuario = :usuario");

    $id_defensa = getIDJugador($conexion, $defensa);
    $id_portero = getIDJugador($conexion, $portero);
    $id_delantero = getIDJugador($conexion, $delantero);
    $id_centrocampista = getIDJugador($conexion, $centrocampista);
    $id_extremo = getIDJugador($conexion, $extremo);

    $db->bindValue(":jugador1", $id_defensa, PDO::PARAM_INT);
    $db->bindValue(":jugador2", $id_portero, PDO::PARAM_INT);
    $db->bindValue(":jugador3", $id_delantero, PDO::PARAM_INT);
    $db->bindValue(":jugador4", $id_centrocampista, PDO::PARAM_INT);
    $db->bindValue(":jugador5", $id_extremo, PDO::PARAM_INT);
    $db->bindValue(":usuario", $_SESSION['nombre']);
    $db->bindValue(":puntos", getPuntos(getPuntoJugador($conexion, $id_defensa, 1), getPuntoJugador($conexion, $id_portero, 1), getPuntoJugador($conexion, $id_delantero, 1), getPuntoJugador($conexion, $id_centrocampista, 1), getPuntoJugador($conexion, $id_extremo, 1)), PDO::PARAM_INT);
    $db->execute();
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

function getIDJugador($conect, $jugador) {
    $db = $conect->prepare("SELECT id FROM jugador WHERE nombre = :nombre");
    $db->bindValue(":nombre", $jugador);
    $db->execute();
    while($row = $db->fetch(PDO::FETCH_ASSOC)) {
        $id = $row['id'];
    }
    return $id;
}

function getPuntoJugador($conect, $id, $jornada) {
    $db = $conect->prepare("SELECT puntos FROM partido WHERE jugador = :id AND jornada = :jornada");
    $db->bindValue(":id", $id, PDO::PARAM_INT);
    $db->bindValue(":jornada", $jornada, PDO::PARAM_INT);
    $db->execute();
    $punto = 0;
    while($row = $db->fetch(PDO::FETCH_ASSOC)) {
        $punto = $row['puntos'];
    }
    return $punto;
}

function getPuntos($punto1, $punto2, $punto3, $punto4, $punto5){
    return $punto1 + $punto2 + $punto3 + $punto4 + $punto5;
}