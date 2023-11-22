<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 9</title>
    <style>
        input[type=text],
        input[type=password],
        input[type=checkbox] select {
            width: 50%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        label {
            width: 20%;
            font-weight: 800;
            display: inline-block;
        }

        input[type=submit] {
            width: 50%;
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type=submit]:hover {
            background-color: #45a049;
        }

        input[type=reset] {
            width: 50%;
            background-color: #4c8baf;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type=reset]:hover {
            background-color: #4546a0;
        }

        form {
            width: 800px;
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 20px;
            margin: 0 auto;
        }

        .panelButtons {
            display: flex;
            flex-direction: row;
        }
    </style>
</head>

<body>
    <h1>Alta usuario (Formulario)</h1><br>
    <form action="ejercicio9b.php" method="get">
        <fieldset>
            <legend>Formulario</legend>
            <label for="nombre_apellido">Nombre y apellidos: </label><input type="text" name="nombre_apellido" id="nombre_apellido"><br>
            <label for="email_texto">Email: </label><input type="text" name="email" id="email"><br>
            <label for="usuario_texto">Nombre de usuario: </label><input type="text" name="usuario" id="usuario"><br>
            <label for="contraseña_texto">Contraseña: </label><input type="password" name="password" id="password"><br>
            <label for="contraseña_intento_texto">Confirmar contraseña: </label><input type="password" name="password" id="password"><br>
            <label for="boqueado_texto">Bloqueo: </label> <label for="si_texto"><input type="radio" name="confirmar" id="si" value="si">SI <input type="radio" name="confirmar" id="no" value="no">NO </label> <br>
            <label for="departamento_texto">Departamento: <br> <input type="checkbox" name="comercial" id="comercial">Comercial <input type="checkbox" name="marketing" id="marketing">Marketing <input type="checkbox" name="direccion" id="direccion">Dirección</label><br>
            <input type="submit" class="panelButtons" value="Enviar">
            <input type="reset" class="panelButtons" value="Borrar">
        </fieldset>
    </form>
</body>

</html>