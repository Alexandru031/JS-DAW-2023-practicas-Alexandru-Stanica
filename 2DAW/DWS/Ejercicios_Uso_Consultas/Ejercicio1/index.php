<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda</title>
</head>
<style>
    table,tr,td,th {
        border: 1px solid black;
        padding: 5px;
        margin: 0 auto;
    }
    h2 {
        text-align: center;
    }
    td:nth-of-type(1), td:nth-child(4) {
        text-align: center;
    }
    th{
        background-color: black;
        color: white;
    }
</style>

<body>
    <h1>Mostrar todos los datos de la tienda</h1>
    <table>
        <?php

        $dsn = 'mysql:host=localhost;dbname=tienda';
        $opciones = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');
        $conexion = new PDO($dsn, 'alexandru', 'alexandru', $opciones);

        $fabricante = $conexion->query('SELECT * FROM fabricante');

        echo "<h2>Tabla de Fabricantes</h2>";
        echo "<tr>
                <th>Codigo</th>
                <th>Nombre</th>
            </tr>";
        while ($registro = $fabricante->fetch()) {
            echo "<tr>";
            echo "<td>" . $registro['codigo'] . "</td> <td>" . $registro['nombre'] . "</td>";
            echo "</tr>";
        }
        ?>
    </table>
    <table>

        <?php

        $dsn = 'mysql:host=localhost;dbname=tienda';
        $opciones = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');
        $conexion = new PDO($dsn, 'alexandru', 'alexandru', $opciones);

        $articulo = $conexion->query('SELECT * FROM artículo');

        echo "<h2>Tabla de Artículos</h2>";
        echo "<tr>
                <th>Codigo</th>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Fabricante</th>
            </tr>";
        while ($registro = $articulo->fetch()) {
            echo "<tr>";
            echo "  <td>{$registro['codigo']}</td>
                    <td>{$registro['nombre']}</td>
                    <td>{$registro['precio']}</td>
                    <td>{$registro['fabricante']}</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>

</html>