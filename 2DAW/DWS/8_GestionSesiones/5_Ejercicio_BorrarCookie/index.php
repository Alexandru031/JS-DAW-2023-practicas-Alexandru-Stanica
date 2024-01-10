<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Borrar Cookie</title>
</head>
<body>
    <h1>Borrar Cookie</h1>
    <p>Añadir un email valido que nos permite guardar en navegador o no, recordando el email mediante checkbox</p>
    <form action="acceder.php" method="post">
        <label for="emial">Introduce el Email: </label>
        <input type="email" name="email" id="email"><br>
        <label for="recordar">Recordar</label>
        <input type="checkbox" name="recordar" id="recordar"><br><br>
        <button type="submit">Acceder</button>
    </form>
</body>
</html>