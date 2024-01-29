<?php

include 'conexion.php';

$conectar = new Conexion();

$sql = 'SELECT * FROM equipo';
$db = $conectar->prepare($sql);
$db->execute();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de Equipo</title>
</head>
<style>
    table, tr, td, th {
        border: 1px solid black;
    }
    th {
        padding: 10px;
    }
    td {
        text-align: center;
    }
</style>
<body>
    <h1>Tabla de Equipos</h1>
    <table>
        <tr>
            <th>usuario</th>
            <th>jugador1</th>
            <th>jugador2</th>
            <th>jugador3</th>
            <th>jugador4</th>
            <th>jugador5</th>
            <th>puntos</th>
        </tr>
        <?php 
        while ($row = $db->fetch(PDO::FETCH_ASSOC)) {
            echo "<tr>";
                echo "<td>" . $row['usuario'] . "</td>";
                echo "<td><a href='./verJugador.php?id=" . $row['jugador1'] .  "'>" . $row['jugador1'] . "</a></td>";
                echo "<td><a href='./verJugador.php?id=" . $row['jugador2'] .  "'>" . $row['jugador2'] . "</a></td>";
                echo "<td><a href='./verJugador.php?id=" . $row['jugador3'] .  "'>" . $row['jugador3'] . "</a></td>";
                echo "<td><a href='./verJugador.php?id=" . $row['jugador4'] .  "'>" . $row['jugador4'] . "</a></td>";
                echo "<td><a href='./verJugador.php?id=" . $row['jugador5'] .  "'>" . $row['jugador5'] . "</a></td>";
                echo "<td>" . $row['puntos'] . "</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>