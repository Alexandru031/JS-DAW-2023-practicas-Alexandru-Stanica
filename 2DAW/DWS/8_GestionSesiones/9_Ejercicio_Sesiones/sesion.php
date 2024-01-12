<?php 
session_start();
if (isset($_POST['usuario']) && isset($_POST['contrasena']) && $_POST['usuario'] == 'Alex' && $_POST['contrasena'] == 'alex') {
    $_SESSION['usuario'] = $_POST['usuario'];
    $_SESSION['contrasena'] = $_POST['contrasena'];
    echo "<a href='mostrar.php'>Mostrar info</a>";
} else {
    echo "<h2>El usuario o la contrasena son incorrectos</h2>";
    echo "<a href='index.php'>Volver al Inico</a>";
}
?>