<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (isset($_GET['accion']) && $_GET['accion'] == "ver") {
        header("Location: ver.php");
        exit;
    } else if ($_GET['accion'] == "anadir") {
        header("Location: anadir.php");
        exit;
    } else if ($_GET['accion'] == "guardar"){
        include "guardar.php";
    } else {
        include "borrarHoteles.php";
    }
}
?>