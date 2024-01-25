<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtén el valor seleccionado del formulario
    $idiomaSeleccionado = $_POST["idioma"];
    
    // Establecer la cookie con el idioma seleccionado
    setcookie("preferencia_idioma", $idiomaSeleccionado, time() + (86400 * 30), "/"); // Caduca en 30 días
    
    // Redirigir a la página principal o a donde sea necesario
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cambiar el Idioma</title>
</head>
<body>
<form action="" method="post">
    <label for="idioma">Selecciona tu idioma:</label>
    <select name="idioma" id="idioma">
        <option value="es">Español</option>
        <option value="en">Inglés</option>
        <!-- Agrega más opciones según sea necesario -->
    </select>
    <input type="submit" value="Guardar">
</form>
</body>
</html>