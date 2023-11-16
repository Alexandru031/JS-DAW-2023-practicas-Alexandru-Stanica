<?php 

$alumnos = array();
$numero = 0;
$mostrar_array = "";
$nombres = array("Jose", "Juan", "Pepe", "Martin", "Carlos");

/* Genero los numeros aleatorios */
for ($i = 0; $i < 5; $i++) {
    $edad = rand(10, 40);
    $altura = 80 / rand(1,80);
    if ($altura < 2) {
        array_push($alumnos, array($nombres[$i], $edad, $altura));
        $mostrar_array .= "El nombre es: ". $nombres[$i] . " su edad es: " . $edad. " su altura es: ". number_format($altura,2) . "<br>";   
    } else {
        $i--;
    }
}
echo $mostrar_array . "<br>";

$cont_mayores = 0;
$cont_altura = 0;
$suma_edad = 0;
$suma_altura = 0;

for ($j=0; $j <= count($alumnos) ; $j++) { 
    if ($alumnos[$j][1] > 18) {
        $cont_mayores++;
    }
    if ($alumnos[$j][2] > 1.75) {
        $cont_altura++;
    }
    $suma_altura += $alumnos[$j][2];
    $suma_edad += $alumnos[$j][1];
}
echo "Cantidad de personas que son mayores de 18 años: ". $cont_mayores . "<br>";
echo "Cantidad de personas que miden más de 1.75: ". $cont_altura . "<br>";
echo "La edad media es: ". round($suma_edad / count($alumnos)) . "<br>";
echo "La altura media es: " . number_format($suma_altura / count($alumnos), 2) . "<br>";
?>