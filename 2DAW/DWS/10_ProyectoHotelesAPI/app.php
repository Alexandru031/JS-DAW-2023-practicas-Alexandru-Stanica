<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (isset($_GET['accion']) && $_GET['accion'] == "ver") {
        header("Location: ver.php");
        exit;
    } else if (isset($_GET['accion']) && $_GET['accion'] == "verID") {
        header("Location: verid.php");
        exit;
    } else if ($_GET['accion'] == "anadir") {
        header("Location: anadir.php");
        exit;
    } else if ($_GET['accion'] == "guardar") {
        include "guardar.php";
    } else if ($_GET['accion'] == "modificar") {
        header('Location: modificar.php');
        exit;
    } else if ($_GET['accion'] == "eliminar") {
        header('Location: eliminar.php');
        exit;
    } else {
        header('Location: borrarHoteles.php');
        exit;
    }
}
