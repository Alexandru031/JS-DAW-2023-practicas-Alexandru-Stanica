<?php 
    for ($i=0; $i <= 10 ; $i++) {
        echo "Tabla del " . $i . "<br>";;
        echo "**********<br>";
        for ($j=0; $j < 10 ; $j++) { 
            echo $i . " x " . $j . " = " . $i * $j . "<br>";
        }
        $cont++;
        echo "<br>";
    }
?>