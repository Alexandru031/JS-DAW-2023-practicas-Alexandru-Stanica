
    <?php
    header("Content-Type: application/json; charset=UTF-8");
    include "conexion.php";
    $conexion = new Conexion();
    $db = $conexion->prepare("SELECT * FROM usuario");
    $db->execute();

        // Inicializar el array de usuarios
        $mostrar["usuarios"] = array();

        // Obtener resultados y agregar al array
        while ($row = $db->fetch(PDO::FETCH_ASSOC)) {
            $e = array(
                "login" => $row['login'],
                "pass" => $row['password']
            );
            array_push($mostrar["usuarios"], $e);
        }
        // Imprimir el resultado como JSON
        echo json_encode($mostrar);
    ?>
