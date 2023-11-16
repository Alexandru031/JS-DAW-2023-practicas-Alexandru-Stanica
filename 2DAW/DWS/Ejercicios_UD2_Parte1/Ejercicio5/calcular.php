<?php 
    $num1 = random_int(1, 100);
    $num2 = random_int(1, 100);
    if ($num1 > $num2) {
        echo "$num1 es mayor que $num2";
    } else {
        echo "$num1 es menor que $num2";
    }
?>