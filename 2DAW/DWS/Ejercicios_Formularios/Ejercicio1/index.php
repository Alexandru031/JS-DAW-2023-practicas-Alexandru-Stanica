<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario 1</title>
</head>
<style>
    * {
        box-sizing: border-box;
        margin: 0;
    }

    form {
        background-color: #d1d7d8;
        border: 1px solid black;
        border-radius: 10px;
        padding: 10px;
        margin: 10px auto;
        text-align: center;
        width: 25%;
    }

    input[type="radio"] {
        margin: 20px 0;
        margin-left: 5px;
    }

    p>label {
        margin-left: 5px;
    }

    input[type="submit"], input[type="button"] {
        margin-top: 20px;
        padding: 10px 5px;
    }
</style>

<body>
    <form action="" method="post">
        <label for="numero1">Número 1: <input type="text" name="num1" id="num1"></label><br><br>
        <label for="numero2">Número 2: <input type="text" name="num2" id="num2"></label><br>
        <p>
            <input type="radio" name="calcular" id="suma" value="suma"><label for="suma">+</label>
            <input type="radio" name="calcular" id="restar" value="restar"><label for="restar">-</label>
            <input type="radio" name="calcular" id="multiplicar" value="mult"><label for="multiplicar">*</label>
            <input type="radio" name="calcular" id="dividir" value="div"><label for="dividir">/</label>
        </p>
        <label for="resultado">Resultado: <input type="text" name="rest" id="rest" value="<?php include "form.php"; ?>"></label><br><br>
        <input type="submit" value="Calcular">
        <input type="button" value="Borrar" onclick="borrar()">
    </form>
    <script src="accion.js"></script>
</body>

</html>