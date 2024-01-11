<?php 
if (isset($_COOKIE['color'])) {
    setcookie("color", $_COOKIE['color'], time() - (365*24*60*60));
    header("Location: pag1.php");
} else {
    echo "<h1>No existe la cookie</h1>";
    echo "<a href='pag1.php'>Volver</a>";
}
?>