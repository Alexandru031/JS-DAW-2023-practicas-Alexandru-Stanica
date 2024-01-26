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

/* 
Para validar usuario y contraseña y que muestré la información de 
forma independiente podemos hacer de la siguiente forma.

Utilizamos la sentencia SQL para que coja el mismo nombre de usuario.
Si no lo coge el usuario, entonces el usuario es incorrecto porque no
existe, si existe sige con el siguiente paso.

EL siguiente paso es coger la contraseña del registro y comprobar mediante
"if" para ver si es la misma contraseña o no.
*/


/* 
Otra forma de recorrer el array de la base de datos podemos usar
la siguiente forma.
Ejempo: $registros = $db->fetchAll(PDO::FETCH_ASSOC);

Nos permite coger todos los registros de SQL y lo guarda en el array
"$registros". Tambien está array puede utilizar como un booleano
para comprobar si hay datos en el array o no.

Para recorrerlo vamos a usar "foreach" para acceder a los datos
de array.
Ejemplo: 
    foreach ($registros as $registro) {
        echo "ID: " . $registro['id'] . "<br>";
    }
*/

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
                    <button type="submit" class="boton">Acceder</button>
                    <button type="reset" class="boton">Borrar</button>
                </div>
            </div>
        </form>
    </div>
</body>

</html>