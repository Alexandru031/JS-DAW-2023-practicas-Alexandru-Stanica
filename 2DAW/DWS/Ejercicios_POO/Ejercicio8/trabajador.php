<?php
class Trabajador
{
    public $nombre;
    public $sueldo;

    public function __construct($nombre)
    {
        $this->nombre = $nombre;
    }

    public function calcularSueldo()
    {
        return $this->sueldo;
    }
}

class Empleado extends Trabajador
{
    public function __construct($nombre)
    {
        parent::__construct($nombre);
        $this->sueldo = 9.50 * 20;
    }
}

class Gerente extends Trabajador
{
    private $sueldoBase = 2500;
    private $porcentaje;

    public function __construct($nombre, $porcentaje)
    {
        parent::__construct($nombre);
        $this->porcentaje = $porcentaje;
    }

    public function calcularSueldo()
    {
        $beneficio = 5000;
        $this->sueldo = $this->sueldoBase + ($beneficio * $this->porcentaje);
        return $this->sueldo;
    }
}

$empleado1 = new Empleado("Pedro");
echo "El empleado {$empleado1->nombre} tiene un sueldo de {$empleado1->calcularSueldo()} <br>";

$gerente1 = new Gerente("Manolo", 0.2);
echo "El gerente {$gerente1->nombre} tiene un sueldo de {$gerente1->calcularSueldo()}";

?>