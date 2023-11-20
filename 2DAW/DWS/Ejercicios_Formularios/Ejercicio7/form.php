<?php
$sexo = "";
echo "<h1>Ejercicio7b.html</h1>
        <hr><ul>";
echo "<li>NOMBRE: " . $_GET['nombre'] . " </li>";
echo "<li>SEXO: " . $sexo = $_GET['sexo'] == "hombre" ? "Hombre</li>" : "Mujer</li>";
echo "<li>EDAD: " . $_GET['edad'] . "</li>";
echo "<li>PESO: " . $_GET['kg'] . "</li>";
echo "<li>ESTADO CIVIL: " . estado($_GET['estado']) . "</li>";
echo aficion();
echo "</ul>";
echo "<a href='index.php'>Volver</a>";

function estado($estado)
{
    if ($estado == "Soltero") {
        return "Soltero";
    } else if ($estado == "Casado") {
        return "Casado";
    } else {
        return "Otro";
    }
}

function aficion()
{
    if (isset($_GET['cine'])) {
        echo "<li>Afición: CINE</li>";
    }
    if (isset($_GET['literatura'])) {
        echo "<li>Afición: LITERATURA</li>";
    }
    if (isset($_GET['tebeos'])) {
        echo "<li>Afición: TEBEOS</li>";
    }
    if (isset($_GET['deporte'])) {
        echo "<li>Afición: DEPORTE</li>";
    }
    if (isset($_GET['musica'])) {
        echo "<li>Afición: MUSICA</li>";
    }
    if (isset($_GET['television'])) {
        echo "<li>Afición: TELEVISION</li>";
    }
}
