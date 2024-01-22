<?php

try {
    header("Content-Type: application/json; charset=UTF-8");
    $conexion = new PDO('mysql:host=localhost;dbname=hotel', 'root', '');

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $nombre = $_GET['nombre'];
        $categoria = $_GET['categoria'];
        $habitantes = $_GET['habitantes'];
        $poblacion = $_GET['poblacion'];
        $direccion = $_GET['direccion'];

        $sql = "UPDATE hoteles SET nombre = :nombre, categoria= :categoria, habitantes = :habitantes, poblacion = :poblacion, direccion = :direccion WHERE id = :id";
        $stmt = $conexion->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->bindParam(':nombre', $nombre, PDO::PARAM_STR);
        $stmt->bindValue(':categoria', $categoria, PDO::PARAM_INT);
        $stmt->bindValue(':habitantes', $habitantes, PDO::PARAM_INT);
        $stmt->bindValue(':poblacion', $poblacion, PDO::PARAM_STR);
        $stmt->bindValue(':direccion', $direccion, PDO::PARAM_STR);

        $resultado = $stmt->execute();

        if ($resultado) {

            $sqlSelect = "SELECT * FROM hoteles WHERE Id = :id";
            $stmtSelect = $conexion->prepare($sqlSelect);
            $stmtSelect->bindParam(':id', $id, PDO::PARAM_INT);
            $stmtSelect->execute();

            $nuevoRegistro = $stmtSelect->fetch(PDO::FETCH_ASSOC);

            echo json_encode($nuevoRegistro);
        } else {
            echo json_encode(array('error' => 'Error al crear usuario'));
        }
    } else {
        echo json_encode(array("message"=>"Para actualizar añadé los siguientes casos en los parametros de la URL", "parametros" => array("id" => "Elige la id para actualizar", 
        "nombre" => "Modicar el nombre de la id elegido",
        "categoria" => "Modicar la categoria de la id elegido",
        "habitantes" => "Modicar los habiatntes de la id elegido",
        "poblacion" => "Modificar la poblacion de la id elegido",
        "direccion" => "Mdoficar la direccion de la id elegido"), "Ejemplo" => "'?id=1&nombre=jose&categoria=2&habitantes=100&poblacion=Torrent&direccion=cami fondo'"));
    }
} catch (PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}
