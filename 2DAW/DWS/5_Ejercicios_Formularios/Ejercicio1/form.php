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
        echo $_POST['res'] = $result;
    }
?>