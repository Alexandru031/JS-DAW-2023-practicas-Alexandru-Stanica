<?php
    if (isset($_COOKIE["contador"])) {
        $contador = $_COOKIE["contador"] + 1;
    } else {
        $contador = 1;
    }
    setcookie("contador", $contador, time() + 365*24*60*60, "/");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contador Cookie</title>
</head>
<body>
    <h1>Contador Cookie</h1>
    <p>Nos permite mostrar cuantas veces entramos en el navegador</p>
    <?php
        echo "<p>Las veces que he entrado en el navegador son: $contador </p>";
    ?>
</body>
</html>