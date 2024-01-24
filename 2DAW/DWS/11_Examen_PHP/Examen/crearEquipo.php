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
echo "El extremo es: " . $extremo . "<br>";

include "conexion.php";

$conexion = conectar();

try {
    $db = $conexion->prepare("UPDATE equipo SET jugador1 = :jugador1 , jugador2 = :jugador2, jugador3 = :jugador3, jugador4 = :jugador4, jugador5 = :jugador5 WHERE usuario = :usuario");

    $db->bindValue(":jugador1", getIDJugador($conexion, $_GET['defensa']), PDO::PARAM_INT);
    $db->bindValue(":jugador2", getIDJugador($conexion, $_GET['portero']), PDO::PARAM_INT);
    $db->bindValue(":jugador3", getIDJugador($conexion, $_GET['centrocampista']), PDO::PARAM_INT);
    $db->bindValue(":jugador4", getIDJugador($conexion, $_GET['delantero']), PDO::PARAM_INT);
    $db->bindValue(":jugador5", getIDJugador($conexion, $_GET['extremo']), PDO::PARAM_INT);
    $db->bindValue(":usuario", $_SESSION['nombre']);
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
    while($row = $db->fetch(PDO::FETCH_ASSOC)) {
        $punto = $row['puntos'];
    }
    return $punto;
}