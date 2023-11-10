<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina PHP inicio</title>
</head>
<body>
    <h1>Alumnos de clase</h1>

    <?php
        $alumnos = array("Juan", "Carlos", "Antonio", "Francisco", "Pedro", "Pepe");
        $arraylenght = count($alumnos);

        echo "<ul>";
        for ($i=0 ; $i < $arraylenght ; $i++) { 
            echo "<li> $alumnos[$i] </li>";
        }
        echo "</ul>";
    ?>
</body>
</html>