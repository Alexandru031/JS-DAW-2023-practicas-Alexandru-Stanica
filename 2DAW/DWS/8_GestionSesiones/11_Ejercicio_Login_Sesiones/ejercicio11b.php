<?php
session_start();
if (isset($_POST['usuario']) && isset($_POST['contrasena']) && $_POST['usuario'] == 'admin' && $_POST['contrasena'] == 'admin') {
    $_SESSION['nombre'] = "Administrador";
    echo "Bienvenido " . $_SESSION['nombre'];
} else {
    echo '<h2>No tienes acceso al panel de Administración</h2>';
    echo "<a href='ejercicio11a.html'>Volver a Login</a>";
}
?>