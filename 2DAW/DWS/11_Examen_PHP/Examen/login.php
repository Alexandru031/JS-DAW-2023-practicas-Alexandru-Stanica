<?php 
session_start();

if ($_GET['nombre'] && $_GET['pass']) {
    $_SESSION['nombre'] = $_GET['nombre'];
    $_SESSION['pass'] = $_GET['pass'];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="content">
        <form method="get">
            <header>
                <h1>Iniciar Sesión</h1>
            </header>
            <div class="datos">
                <div class="info">
                    <div>
                        <label for="nombre">Nombre: </label>
                        <input type="text" name="nombre" id="nombre">
                    </div>
                    <div>
                        <label for="pass">Contraseña: </label>
                        <input type="password" name="pass" id="pass">
                    </div>
                </div>
                <div class="botones">
                    <button type="submit">Acceder</button>
                    <button type="reset">Borrar</button>
                </div>
            </div>
        </form>
    </div>
</body>

</html>