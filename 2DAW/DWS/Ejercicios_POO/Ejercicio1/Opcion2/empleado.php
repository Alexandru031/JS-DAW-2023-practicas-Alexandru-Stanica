<?php 
    class Empleado {
        public $nombre;
        public $sueldo;
    
        public function setNombre($nombre) {
            $this->nombre = $nombre;
        }

        public function __set($propiedad, $valor)
        {
            $this->$propiedad = $valor;
        }

        public function __get($propiedad)
        {
            return $this->$propiedad;
        }

        public function mostrarDatos() {
            return $this->nombre . " tiene un sueldo de " . $this->sueldo . "€";
        }
    }

    $empleado = new Empleado();
    $empleado->nombre = "Paco";
    $empleado->sueldo = "1200";

    echo $empleado->mostrarDatos();

?>