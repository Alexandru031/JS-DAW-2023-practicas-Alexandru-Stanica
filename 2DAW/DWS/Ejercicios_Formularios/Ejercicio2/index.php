<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario 2</title>
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
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $result = 0;
        $num1 =  $_POST['num1'];
        $num2 = $_POST['num2'];

        if ($num1 == "") {
            $num1 = 0;
        }

        if ($num2 == "") {
            $num2 = 0;
        }

        if ($_POST['calcular'] == "suma") {
            $result = $num1 + $num2;
        } else if ($_POST['calcular'] == "restar") {
            $result = $num1 - $num2;
        } else if ($_POST['calcular'] == "mult") {
            $result = $num1 * $num2;
        } else if ($_POST['calcular'] == "div") {
            $result = $num1 / $num2;
        }
    }
?>
    <form action="" method="post">
        <label for="resultado">Resultado: <?php echo isset($result) ? $result : ''; ?></label><br><br>
    <label for="numero1">Número 1: <input type="text" name="num1" id="num1" value="<?php echo $num1 ?>"></label><br><br>
        <label for="numero2">Número 2: <input type="text" name="num2" id="num2" value="<?php echo $num2 ?>"></label><br>
        <p>
            <input type="radio" name="calcular" id="suma" value="suma"><label for="suma">+</label>
            <input type="radio" name="calcular" id="restar" value="restar"><label for="restar">-</label>
            <input type="radio" name="calcular" id="multiplicar" value="mult"><label for="multiplicar">*</label>
            <input type="radio" name="calcular" id="dividir" value="div"><label for="dividir">/</label>
        </p>
        <input type="submit" value="Calcular">
    </form>
    <script src="accion.js"></script>
</body>

</html>