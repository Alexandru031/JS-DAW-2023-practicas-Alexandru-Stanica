<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sesiones</title>
</head>
<body>
    <h1>Mostrar las info de Sesion</h1>
    <?php 
    session_start();
    echo "<h3>El usuario es: " . $_SESSION['usuario'] . "</h3>";
    echo "<h3>La contrasena es: " . $_SESSION['contrasena'] . "</h3><br>";
    echo "<a href='index.php'>Volver a Inicio</a>"
    ?>
</body>
</html>