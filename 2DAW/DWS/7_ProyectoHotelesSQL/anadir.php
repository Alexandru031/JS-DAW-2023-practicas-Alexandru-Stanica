<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Añadir Hotel</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="ponerHotel.php" method="get">
        <h1 style='text-align:center;'>Añadir Hotel</h1>
        <label for="nombre_txt">Nombre: </label><input type="text" name="nombre" id="nombre" required><br>
        <label for="categoria_txt">Categoria: </label><input type="number" name="categoria" id="categoria" required><br>
        <label for="habitantes_txt">Habitantes: </label><input type="number" name="habitantes" id="habitantes" required><br>
        <label for="población_txt">Población: </label><input type="text" name="poblacion" id="poblacion" required><br>
        <label for="direccion_txt">Dirección: </label><input type="text" name="direccion" id="direccion" required><br>
        <div class="panelButtons">
            <input type="submit" value="Agregar Hotel">
            <input type="reset" value="Borrar">
            <input type="button" name="volver" value="Volver a Home" onclick="location.href='home.php'">
        </div>
    </form>
    <script src="volver.js"></script>
</body>
</html>