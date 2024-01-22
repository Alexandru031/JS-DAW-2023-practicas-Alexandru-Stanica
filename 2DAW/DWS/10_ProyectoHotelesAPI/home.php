<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplicacion Hoteles</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <form action="app.php" method="get">
        <div>
            <img src="./img/hoteles.png" alt="Aplicacion PHP">
        </div>
        <div>
            <button type="submit" name="accion" value="ver">GET ALL</button>
            <button type="submit" name="accion" value="verID">GET ID</button>
            <button type="submit" name="accion" value="anadir">POST</button>
            <button type="submit" name="accion" value="modificar">PUT</button>
            <button type="submit" name="accion" value="eliminar">DELETE</button>
            <button type="submit" name="accion" value="guardar">Restaurar Hoteles</button>
            <button type="submit" name="accion" value="borrar">Borrar Hoteles</button>
        </div>
    </form>
</body>

</html>