<?php 
if (isset($_POST['color']) && $_POST['color'] != 'vacio') {
    setcookie("color", $_POST['color'], time() + 365*24*60*60);
    header("Location: pag1.php");
} else {
    echo "<h1>No has seleccionado el color</h1><br>";
    echo "<a href='pag1.php'>Volver</a>";
}
?>