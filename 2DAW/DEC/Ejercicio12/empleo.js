        // Empleado
        // Clase Padre
        function Empleado(nombre) {
            this.nombre = nombre || '';
            this.departamento = 'Informático';
        }

        //Director
        // Clase que hereda de Empleado
        function Director() {
            Empleado.call(this, nombre);
            this.informes = [];
            this.getNombreDir = function () {
                return this.nombre
            }
        }

        // Añade al prototipo que hereda de Empleado()
        Director.prototype = new Empleado();

        // Estable el constructor de Director
        Director.prototype.constructor = Director();

        function Trabajador(nombre) {
            Empleado.call(this, nombre);
            this.proyectos = [];
        }

        Trabajador.prototype = new Empleado();

        Trabajador.prototype.constructor = new Trabajador();

        function Ingeniero(nombre) {
            Trabajador.call(this, nombre);
            this.LenguajeProgramacion = '';
            this.getInforme = function () {
                return "El ingeniero " + this.nombre + " usa el lenguaje de programación " + this.LenguajeProgramacion + " en el departamento Ingeniería"
            }
        }

        Ingeniero.prototype = new Trabajador();

        Ingeniero.prototype.constructor = new Ingeniero();

        let dr1 = new Director("Pepito");
        let dr2 = new Director("Manolo");

        Director = dr2.informes.push("Informe producción enero");
        Director = dr2.informes.push("Informe producción febrero");
        Director = dr2.informes.push("Informe producción marzo");

        let dr3 = new Director("Hortencia");

        Director = dr3.informes.push("informe despido becario");

        let ing1 = new Ingeniero("Juan");
        let ing2 = new Ingeniero("Carmen");
        let ing3 = new Ingeniero("Pablo");
        let ing4 = new Ingeniero("Emilio");

        Ingeniero = ing1.LenguajeProgramacion('Java');
        Ingeniero = ing2.LenguajeProgramacion('C++');
        Ingeniero = ing3.LenguajeProgramacion('JS');
        Ingeniero = ing4.LenguajeProgramacion('HTML5');

        document.write("________******** NOMBRES DIRECTORES ******** ________\n");
        document.write("Director --> " + dr1.getNombreDir() + "\n")
        document.write("Director --> " + dr2.getNombreDir() + "\n")