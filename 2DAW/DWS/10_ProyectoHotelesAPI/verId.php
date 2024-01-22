<?php

header("Content-Type: application/json; charset=UTF-8");
$conexion = new PDO('mysql:host=localhost;dbname=hotel', 'root', '');

/* Comprobar si se ha conectado a la base de datos */
if ($conexion == false) {
    die("Conexion no establecida");
}

/* Si utliza el metodo GET en la URL */
if ($_SERVER['REQUEST_METHOD'] == "GET") {
    if (isset($_GET['id'])) {
        $id = $_GET['id']; /* Cogemos la ID de URL */

        // Preparar y ejecutar la consulta
        $query = 'SELECT * FROM hoteles WHERE Id = :id';
        $stmt = $conexion->prepare($query);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT); /* Vincula la id de URL en el marcador de posición ":id" de la sentencia SQL. Añadé el tipo de la variable que es entero */
        $stmt->execute();

        $hoteles['hoteles'] = array();

        // Recorrer los resultados de la consulta
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $e = array(
                "id" => $row['Id'],
                "Nombre" => $row['Nombre'],
                "Categoria" => $row['Categoria'],
                "Habitantes" => $row['Habitantes'],
                "Poblacion" => $row['Poblacion'],
                "Direccion" => $row['Direccion']
            );
            array_push($hoteles["hoteles"], $e);
        }

        if (!empty($hoteles["hoteles"])) {
            echo json_encode($hoteles);
        } else {
            http_response_code(404);
            echo json_encode(array("message" => "No se encontró ningún hotel con la ID proporcionada."));
        }
    } else {
        http_response_code(400);
        echo json_encode(array("message" => "Se debe proporcionar una ID en la URL. Ejemplo: /verid.php/?id=1"));
    }
} else {
    http_response_code(405);
    echo json_encode(array("message" => "Método no permitido."));
}

/* Para acceder:
URL: http://localhost:3000/xampp/htdocs/7_ProyectoHotelesSQL/verid.php?id=1
Valores: id = 5

Para seleccionar otro habrá que cambiar en la URL el valor de la ID en 1 o 2 o 3, etc.
*/