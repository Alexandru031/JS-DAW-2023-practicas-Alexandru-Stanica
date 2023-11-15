<?php 
    $i = 0;
    do {
        if ($i % 5 == 0) {
            if ($i == 100) {
                echo $i." ";
            } else {
                echo $i.", ";
            }   
        }
        $i++;
    } while ($i <= 100);
?>