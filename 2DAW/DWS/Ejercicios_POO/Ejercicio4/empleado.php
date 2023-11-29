<?php 
    class Empleado {
        public $nombre;
        public $sueldo;
    
        public function __construct($nombre="", $sueldo=0)
        {
            $this->nombre = $nombre;
            $this->sueldo = $sueldo;
        }

        public function __get($propiedad)
        {
            return $this->$propiedad;
        }

        public function getPaga($paga) {
            if ($paga > 1200) {
                return true;
            } else {
                return false;
            }
        }

        public function mostrarFrase() {
            $booleano = "";
            if ($this->getPaga($this->sueldo)) {
                $booleano = $this->nombre . " tiene que pagar impuestos <br>";
            } else {
                $booleano = $this->nombre . " no tiene que pagar impuestos<br>";
            }
            return $booleano . $this->nombre . " tiene un sueldo de " . $this->sueldo;
        }
    }
    $empleado = new Empleado("Juan", 800);
    echo $empleado->mostrarFrase();
?>