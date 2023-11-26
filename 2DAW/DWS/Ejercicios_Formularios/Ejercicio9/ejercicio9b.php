<?php 

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if ($_GET['nombre_apellido'] == "") {
        echo "ERROR. Debe introducir el nombre y el apellido <br>";
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

    if ($_GET['password'] == "") {
        echo "ERROR. Debe introducir un contraseña <br>";
    } else {
        echo "Contraseña: " . $_GET['password'] . "<br>";
    }

    if ($_GET['password_intento'] == "") {
        echo "ERROR. Debe introducir un contraseña de intento <br>";
    } else if ($_GET['password'] != $_GET['password_intento']) {
        echo "ERROR. Debe introducir la misma contraseña <br>";
    } else {
        echo "Contraseña de intento: " . $_GET['password'] . "<br>";
    }

    if ($_GET['confirmar'] == "si") {
        echo "La cuenta está bloqueado<br>";
    } else {
        echo "La cuenta no está bloqueado<br>";
    }

    if (!$_GET['comercial'] && !$_GET['marketing'] && !$_GET['direccion']) {
        echo "ERROR. Debes seleccionar al menos 1 departamento<br>";
    } else {
        if ($_GET['comercial']) {
            echo "Departamento: Comercial <br>";
        }
        if ($_GET['marketing']) {
            echo "Departamento: Marketing <br>";
        }
        if ($_GET['direccion']) {
            echo "Departamento: Dirección <br>";
        }
    }
}
?>