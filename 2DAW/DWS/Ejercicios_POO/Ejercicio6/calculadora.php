<?php

    class Calculadora {

        public $num1;

        public function __construct()
        {
            $this->num1 = 8;
        }

        public static function sumar($num1, $num2) {
            return $num1 + $num2;
        }

        public static function restar($num1, $num2) {
            return $num1 - $num2;
        }

        public static function multiplicar($num1, $num2) {
            return $num1 * $num2;
        }

        public static function dividir($num1, $num2) {
            return $num1 / $num2;
        }
    }
    echo "El resultado de suma es: " . Calculadora::sumar(5,2) . "<br>";
    echo "El resultado de restar es: " . Calculadora::restar(5,2) . "<br>";
    echo "El resultado de multiplicación es: " . Calculadora::multiplicar(5,2) . "<br>";
    echo "El resultado de división es: " . Calculadora::dividir(5, 2) . "<br>";

    $sumar = new Calculadora();
    echo "Las suma es: ". $sumar->num1; // Muestra por defecto 8
?>