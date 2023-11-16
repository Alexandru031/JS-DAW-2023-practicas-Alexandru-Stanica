<?php
    $i = 0;
    while ($i <= 100) {
        if ($i % 5 == 0) {
            if ($i == 100) {
                echo $i." ";
            } else {
                echo $i.", ";
            }
        }
        $i++;
    }

?>