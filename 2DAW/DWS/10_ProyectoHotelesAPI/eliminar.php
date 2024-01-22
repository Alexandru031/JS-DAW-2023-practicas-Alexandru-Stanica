<?php

try {
    header("Content-Type: application/json; charset=UTF-8");
    $conexion = new PDO('mysql:host=localhost;dbname=hotel', 'root', '');

    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        $sql = "DELETE FROM hoteles  WHERE id = :id";
        $stmt = $conexion->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $resultado = $stmt->execute();
        if ($resultado) {
            echo json_encode(array("La id " . $id . " ha sido eliminado"));
        } else {
            echo json_encode(array("La id " . $id . " no ha sido eliminado"));
        }

    } else {
        echo json_encode(array("message"=>"Para eliminar un hotel habrá que añadir la id valida en la URL", "parametros" => array("id" => "Elige la id para eliminar el dato", ), "Ejemplo" => "'http://localhost:3000/xampp/htdocs/7_ProyectoHotelesSQL/eliminar.php?id=3',"));
    }
} catch (PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}