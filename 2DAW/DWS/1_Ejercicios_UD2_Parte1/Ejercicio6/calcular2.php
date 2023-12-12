<?php

$num1 = random_int(1, 5);
$num2 = random_int(1, 5);

$variable = 0;

if ($num1 == $num2) {
    $variable = 0;
} else if ($num1 > $num2) {
    $variable = 1;
} else {
    $variable = 2;
}

switch ($variable) {
    case 0:
        echo "$num1 es igual a $num2";
        break;
    case 1:
        echo "$num1 es mayor a $num2";
        break;
    case 2:
        echo "$num1 es menor a $num2";
        break;
}
