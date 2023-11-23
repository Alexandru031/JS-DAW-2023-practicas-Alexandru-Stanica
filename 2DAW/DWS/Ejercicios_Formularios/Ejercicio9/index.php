<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 9</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <form action="ejercicio9b.php" method="get">
        <h1>Alta usuario (Formulario)</h1><br>
        <fieldset>
            <legend>Formulario</legend>
            <label for="nombre_apellido">Nombre y apellidos: </label><input type="text" name="nombre_apellido" id="nombre_apellido"><br>
            <label for="email_texto">Email: </label><input type="text" name="email" id="email"><br>
            <label for="usuario_texto">Nombre de usuario: </label><input type="text" name="usuario" id="usuario"><br>
            <label for="contraseña_texto">Contraseña: </label><input type="password" name="password" id="password"><br>
            <label for="contraseña_intento_texto">Confirmar contraseña: </label><input type="password" name="password_intento" id="password"><br>
            <label for="boqueado_texto">Bloqueo: </label> <label for="si_texto"><input type="radio" name="confirmar" id="si" value="si">SI <input type="radio" name="confirmar" id="no" value="no">NO </label> <br>
            <label for="departamento_texto">Departamento: </label><br><input type="checkbox" name="comercial" id="comercial">  Comercial <input type="checkbox" name="marketing" id="marketing">Marketing <input type="checkbox" name="direccion" id="direccion">Dirección<br>
            <div class="panelButtons">
                <input type="submit" value="Enviar">
                <input type="reset" value="Borrar">
            </div>
        </fieldset>
    </form>
</body>

</html>