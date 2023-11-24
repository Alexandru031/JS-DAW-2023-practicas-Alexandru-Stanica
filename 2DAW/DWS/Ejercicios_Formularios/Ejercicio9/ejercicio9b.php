<?php 

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if ($_GET['nombre_apellido'] == "" || $_GET['nombre_apellido']) {
        echo "ERROR. Debe introducir un nombre válido <br>";
    } else {
        echo "Nombre: " . $_GET['nombre_apellido'] . "<br>";
    }

    if (!filter_var($_GET['email'], FILTER_VALIDATE_EMAIL) || $_GET['email'] == "") {
        echo "ERROR. Debe introducir un email válido <br>";
    } else {
        echo "Email: " . $_GET['email'] . "<br>";
    }

    if ($_GET['usuario'] == "") {
        echo "ERROR. Debe introducir un user válido <br>";
    } else {
        echo "Usuario: " . $_GET['usuario'] . "<br>";
    }
}
?>