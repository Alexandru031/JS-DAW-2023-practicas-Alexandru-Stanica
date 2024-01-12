<?php
session_start();
$_SESSION['actual'] = time();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Almacenar la hora</title>
</head>
<body>
    <h1>Almacenar la hora</h1>
    <a href="salir.php">Salir</a>
</body>
</html>