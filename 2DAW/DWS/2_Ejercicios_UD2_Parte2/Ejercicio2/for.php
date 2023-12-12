<?php 
    for ($i=0; $i <= 100; $i++) { 
        if ($i % 5 == 0) {
            if ($i == 100) {
                echo $i." ";
            } else {
                echo $i.", ";
            }
        }
    }
?>