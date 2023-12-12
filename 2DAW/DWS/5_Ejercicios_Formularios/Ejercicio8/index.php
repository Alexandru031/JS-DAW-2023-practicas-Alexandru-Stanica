<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 8</title>
</head>
<body>
    <h1>Validar contenido</h1>
    <form action="ejercicio8b.php" method="get">
        <label for="texto_escrito">Escriba un texto a validar: <input type="text" name="texto" id="texto"></label><br>
        <label for="escoger_validacion">Escoger validación: 
            <input type="radio" name="valida" id="email" value="email">E-mail 
            <input type="radio" name="valida" id="dni" value="dni">DNI 
            <input type="radio" name="valida" id="numero" value="numero">Números
        </label><br>
        <input type="submit" value="Enviar">
        <input type="reset" value="Borrar">
    </form>
</body>
</html>