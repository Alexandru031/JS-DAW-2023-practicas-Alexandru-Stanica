<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Equipo</title>
</head>

<body>

    <header>
        <h1>Seleccionar Equipo</h1>
    </header>
    <div class="content">
        <form action="crearEquipo.php" method="get">
            <label for="defensa">Selecciona el jugador de la defensa: </label>
            <select name="defensa" id="defensa">
                <?php

                include 'conexion.php';

                $conectar = conectar();
                $db = $conectar->prepare("SELECT * FROM jugador WHERE posicion = 'Defensa'");
                $db->execute();

                while ($row = $db->fetch(PDO::FETCH_ASSOC)) {
                    echo "<option value='" . $row['nombre'] . "'>" . $row['nombre'] . "</option>";
                }
                ?>
            </select><br>
            <label for="portero">Selecciona el jugador de la portero: </label>
            <select name="portero" id="portero">
                <?php

                $db = $conectar->prepare("SELECT * FROM jugador WHERE posicion = 'Portero'");
                $db->execute();

                while ($row = $db->fetch(PDO::FETCH_ASSOC)) {
                    echo "<option value='" . $row['nombre'] . "'>" . $row['nombre'] . "</option>";
                }
                ?>
            </select><br>
            <label for="centrocampista">Selecciona el jugador de la centrocampista: </label>
            <select name="centrocampista" id="centrocampista">
                <?php

                $db = $conectar->prepare("SELECT * FROM jugador WHERE posicion = 'Centrocampista'");
                $db->execute();

                while ($row = $db->fetch(PDO::FETCH_ASSOC)) {
                    echo "<option value='" . $row['nombre'] . "'>" . $row['nombre'] . "</option>";
                }
                ?>
            </select><br>
            <label for="delantero">Selecciona el jugador de la delantero: </label>
            <select name="delantero" id="delantero">
                <?php

                $db = $conectar->prepare("SELECT * FROM jugador WHERE posicion = 'Delantero'");
                $db->execute();

                while ($row = $db->fetch(PDO::FETCH_ASSOC)) {
                    echo "<option value='" . $row['nombre'] . "'>" . $row['nombre'] . "</option>";
                }
                ?>
            </select><br>
            <label for="extremo">Selecciona el jugador de la extremo: </label>
            <select name="extremo" id="extremo">
                <?php

                $db = $conectar->prepare("SELECT * FROM jugador WHERE posicion = 'Extremo'");
                $db->execute();

                while ($row = $db->fetch(PDO::FETCH_ASSOC)) {
                    echo "<option value='" . $row['nombre'] . "'>" . $row['nombre'] . "</option>";
                }
                ?>
            </select><br><br>
            <button type="submit">Crear Equipo</button>
            <button type="reset">Borrar Equipo</button>
        </form>
    </div>
</body>

</html>