<?php 
    class Empleado {
        public $nombre;
        public $sueldo;
    
        public function setNombre($nombre) {
            $this->nombre = $nombre;
        }

        public function getNombre() {
            return $this->nombre;
        }

        public function setSueldo($sueldo) {
            $this->sueldo = $sueldo;
        }

        public function getSueldo() {
            return $this->sueldo;
        }

        public function mostrarDatos() {
            return $this->nombre . " tiene un sueldo de " . $this->sueldo . "€";
        }
    }

    $empleado = new Empleado();
    $empleado->nombre = "Pedro";
    $empleado->sueldo = "1200";

    echo $empleado->mostrarDatos();

?>