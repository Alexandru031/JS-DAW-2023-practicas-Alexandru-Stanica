<?php
try {
  header("Content-Type: application/json; charset=UTF-8");
  $conexion = new PDO('mysql:host=localhost;dbname=hotel', 'root', '');
  $query = 'DROP TABLE hoteles';
  $stmt = $conexion->prepare($query);
  $stmt->execute();
  echo json_encode(array("message" => "Los datos aún siguen vacíos, tienes que restaurar los hoteles"));
} catch (PDOException $e) {
  echo json_encode(array("message" => "ERROR al conectar a la base de datos. Motivo del error: " . $e->getMessage()));
}
