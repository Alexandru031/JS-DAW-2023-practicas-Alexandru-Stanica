<?php 
    class Empleado {
        public $nombre;
        public $sueldo;
    
        public function __construct($nombre="", $sueldo=0)
        {
            $this->nombre = $nombre;
            $this->sueldo = $sueldo;
        }
        public function mostrarDatos() {
            return $this->nombre . " tiene un sueldo de " . $this->sueldo . "€";
        }
    }
    $empleado = new Empleado("Juan", 1200);
    echo $empleado->mostrarDatos();
?>