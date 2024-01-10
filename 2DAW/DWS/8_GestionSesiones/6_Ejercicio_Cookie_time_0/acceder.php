<?php
if (isset($_POST['usuario']) && isset($_POST['contrasena']) && $_POST['usuario'] == "Alex" && $_POST['contrasena'] == 'alex') {
    setcookie("usuario", $_POST['usuario'], 0);
    setcookie("contrasena", $_POST['contrasena'], 0);
    $acceder = true;
} else {
    $acceder = false;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie con time 0</title>
</head>
<body>
    <?php 
    if ($acceder) {
        echo '<nav>
        <div><a href="">Empresa</a></div>
        <div><a href="">Servicios</a></div>
        <div><a href="">Contacto</a></div>
        </nav>';
    } else {
        echo "Error de usuario y contraseña";
    }
    ?>
</body>
</html>