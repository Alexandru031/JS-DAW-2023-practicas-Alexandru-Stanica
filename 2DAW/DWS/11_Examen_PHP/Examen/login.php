<?php 
session_start();

include "conexion.php";

if (isset($_GET['nombre'])  && isset($_GET['pass'])) {

    $conectar = conectar();
    $db = $conectar->prepare("SELECT * FROM usuario WHERE login = :login AND password = :pass");
    $db->bindValue(":login", $_GET['nombre']);
    $db->bindValue(":pass", $_GET['pass']);
    $db->execute();
    $stmt = $db->fetch(PDO::FETCH_ASSOC);

    if ($stmt == 0) { // Comprueba si existe el registro que tenga la misma usuario y contraseña
        $error = "El usuario o la contraseña son incorrectos";
    } else {
        $_SESSION['nombre'] = $_GET['nombre'];
        $_SESSION['pass'] = $_GET['pass'];
        header("Location: equipo.php");
    }
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
                    <?php 
                    if (isset($error)) echo "<p style='color:red;'>" . $error . "</p>";
                     ?>
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