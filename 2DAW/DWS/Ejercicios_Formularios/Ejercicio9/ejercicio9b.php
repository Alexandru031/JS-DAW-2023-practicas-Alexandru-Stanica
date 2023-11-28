<?php 

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (validarCaracteres5()) {
        echo "ERROR. Debe introducir al menos 5 caracteres de nombre y apellido <br>";
    } else if (!validarSoloCadenas()) {
        echo "ERROR. Debe introducir solo letras<br>";
    } else {
        echo "Nombre: " . $_GET['nombre_apellido'] . "<br>";
    }

    if (!filter_var($_GET['email'], FILTER_VALIDATE_EMAIL)) {
        echo "ERROR. Debe introducir un email válido <br>";
    } else {
        echo "Email: " . $_GET['email'] . "<br>";
    }

    if (!validarLetrasNumeros()) {
        echo "ERROR. Debe introducir un usuario de letras y numeros o solo letras <br>";
    } else {
        echo "Usuario: " . $_GET['usuario'] . "<br>";
    }

    if (!validarLongNum8()) {
        echo "ERROR. Debe introducir un contraseña que tenga al menos 8 caracteres <br>";
    } else if (!validarPassword()) {
        echo "ERROR. Debe contenener numeros, letras y un caracter especial";
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
        if (isset($_GET['comercial'])) {
            echo "Departamento: Comercial <br>";
        }
        if (isset($_GET['marketing'])) {
            echo "Departamento: Marketing <br>";
        }
        if (isset($_GET['direccion'])) {
            echo "Departamento: Dirección <br>";
        }
    }
}

function validarCaracteres5() {
    if (strlen($_GET['nombre_apellido']) > 5) {
        return false;
    } else {
        return true;
    }
}

function validarLetrasNumeros() {
    $pattern = "/^[a-zA-Z\sñáéíóúÁÉÍÓÚ]+$|[a-zA-Z0-9\sñáéíóúÁÉÍÓÚ]+$/"; /* Valida solo cadena de texto o cadena de texto y numeros */
    if (preg_match($pattern, $_GET['usuario'])) {
        return true;
    } else {
        return false;
    }
}

function validarSoloCadenas() {
    $pattern = "/^[a-zA-Z\sñáéíóúÁÉÍÓÚ]+$/";
    if (preg_match($pattern, $_GET['nombre_apellido'])) {
        return true;
    } else {
        return false;
    }
}

function validarLongNum8() {
    if (strlen($_GET['password']) > 8) {
        return false;
    } else {
        return true;
    }
}

function validarPassword() {
    $contEspecial = 0;
    $contMayuscula = 0;
    $contNumero = 0;
    $contMinuscula = 0;
    $pass = $_GET['password'];

    $pattern = "/^[a-zA-Z0-9\sñáéíóúÁÉÍÓÚ]+$|[a-zA-Z0-9\sñáéíóúÁÉÍÓÚ]+$|[a-zA-Z0-9\sñáéíóúÁÉÍÓÚ]/";
    for ($i=0; $i < strlen($pass) ; $i++) { 
        if (is_int($pass[$i])) {
            $contNumero++;
        }
    }

    if ($contEspecial >= 1 && $contMayuscula >= 1 && $contNumero >= 1 && $contMinuscula >= 1) {
        # code...
    }
}
?>