<?php
try {
  header("Content-Type: application/json; charset=UTF-8");
  $conexion = new PDO('mysql:host=localhost;dbname=hotel', 'root', '');

  $nombre = $_GET['nombre'];
  $categoria = $_GET['categoria'];
  $habitantes = $_GET['habitantes'];
  $poblacion = $_GET['poblacion'];
  $direccion = $_GET['direccion'];

  $sql = "INSERT INTO hoteles (Nombre, Categoria, Habitantes, Poblacion, Direccion) VALUES (?, ?, ?, ?, ?)";
  $stmt = $conexion->prepare($sql);
  $stmt->bindValue(1, $nombre);
  $stmt->bindValue(2, $categoria);
  $stmt->bindValue(3, $habitantes);
  $stmt->bindValue(4, $poblacion);
  $stmt->bindValue(5, $direccion);

  $resultado = $stmt->execute();

  if ($resultado) {
    $idInsertado = $conexion->lastInsertId();
    
    $sqlSelect = "SELECT * FROM hoteles WHERE ID = ?";
    $stmtSelect = $conexion->prepare($sqlSelect);
    $stmtSelect->bindValue(1, $idInsertado);
    $stmtSelect->execute();

    $nuevoRegistro = $stmtSelect->fetch(PDO::FETCH_ASSOC);

    echo json_encode($nuevoRegistro);
  } else {
    echo json_encode(array('error'=>'Error al crear usuario'));
  }
} catch (PDOException $e) {
  echo 'ERROR: '. $e->getMessage();
}