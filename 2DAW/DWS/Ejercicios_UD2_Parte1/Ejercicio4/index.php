<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nombre Edad</title>
</head>
<body>
    <?php 
        $nombre = "Juan";
        $edad = 18;

        if ($nombre == null) {
            echo "Hola desconocido";
        } else if ($nombre != null && $edad == null) {
            echo "Hola $nombre. No se tu edad";
        } else {
            echo "Hola $nombre, Tiene $edad años.";
        }
    ?>
</body>
</html>