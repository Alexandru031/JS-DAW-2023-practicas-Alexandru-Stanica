<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $dato = $_GET['texto'];
    if ($_GET['valida'] == "email") {
        if (filter_var($dato, FILTER_VALIDATE_EMAIL)) {
            echo "La validacion de email es correcta";
        } else {
            echo "La validacion de email es incorrecta";
        }
    } else if ($_GET['valida'] == "dni") {
        if (validarDNI($dato)) {
            echo "La validacion de DNI es correcta";
        } else {
            echo "La validacion de DNI es incorrecta";
        }
    } else if ($_GET['valida'] == "numero") {
        if (filter_var($dato, FILTER_VALIDATE_INT)) {
            echo "La validacion de numero es correcta";
        } else {
            echo "La validacion de numero es incorrecta";
        }
    }
}
function validarDNI($dni)
{
    $pattern = '/^[0-9]{8}[A-Z]$/i';
    if (preg_match($pattern, $dni) == 1) {
        return true;
    } else {
        return false;
    }
}
