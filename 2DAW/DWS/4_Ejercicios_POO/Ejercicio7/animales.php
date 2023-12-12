<?php 

    class Mamifero {
        public $especie;
        public $sonidos;
        public $familia;

        public function __construct($especie, $sonido)
        {
            $this->especie = $especie;
            $this->sonidos = $sonido;
        }

        public function sonido() {
            return "Sonido de {$this->especie}, de la familia {$this->familia}: {$this->sonidos}";
        }
    }

    class Perro extends Mamifero {
        public function __construct() {
            parent::__construct("Perro", "ladrido");
            $this->familia = "cánidos";
        }
    }
    
    class Gato extends Mamifero {
        public function __construct() {
            parent::__construct("Gato", "maullido");
            $this->familia = "felinos";
        }
    }

    $perro = new Perro();
    $gato = new Gato();

    echo $perro->sonido() . "<br>";
    echo $gato->sonido();

?>