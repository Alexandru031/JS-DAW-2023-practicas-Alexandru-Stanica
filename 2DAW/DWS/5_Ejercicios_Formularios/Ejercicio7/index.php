<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario 7</title>
</head>

<body>
    <h1>Ejercicio7a.html</h1>
    <hr>
    <h1>Formulario Datos personales</h1>
    <form action="form.php" method="get">
        <label for="nombre">Escriba su nombre: <input type="text" name="nombre" id="nombre"></label><br>
        <label for="sexos">Sexo: <input type="radio" name="sexo" id="hombre" value="hombre">Hombre <input type="radio" name="sexo" id="mujer" value="mujer">Mujer</label><br>
        <label for="edades">Edad:
            <select name="edad" id="edad">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                <option value="13">13</option>
                <option value="14">14</option>
                <option value="15">15</option>
                <option value="16">16</option>
                <option value="17">17</option>
                <option value="18">18</option>
                <option value="19">19</option>
                <option value="20">20</option>
            </select><br>
        </label>
        <label for="peso">Peso kg: <input type="text" name="kg" id="kg" size="5"></label><br>
        <label for="estado_civil">Estado Civil: 
            <input type="radio" name="estado" id="soltero" value="Soltero">Soltero
            <input type="radio" name="estado" id="soltero" value="Casado">Casado
            <input type="radio" name="estado" id="soltero" value="Otro">Otro
        </label><br>
        <label for="aficiones">
            <input type="checkbox" name="cine" id="cine" value="cine"> Cine <br>
            <input type="checkbox" name="literatura" id="literatura" value="literatura"> Literatura <br>
            <input type="checkbox" name="tebeos" id="tebeos" value="tebeos"> Tebeos <br>
            <input type="checkbox" name="deporte" id="deporte" value="deporte"> Deporte <br>
            <input type="checkbox" name="musica" id="musica" value="musica"> Música <br>
            <input type="checkbox" name="television" id="television" value="television"> Televisión
        </label><br><br>
        <input type="submit" value="Enviar">
        <input type="reset" value="Borrar">
    </form>
</body>

</html>