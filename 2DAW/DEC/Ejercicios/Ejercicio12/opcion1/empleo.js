        // Empleado
        // Clase Padre
        function Empleado(nombre) {
            this.nombre = nombre || '';
            this.departamento = 'Informático';
        }


        //Director
        // Clase que hereda de Empleado
        function Director(nombre) {
            Empleado.call(this, nombre);
            this.informes = [];
            this.getNombreDir = function () {
                return this.nombre
            }
            this.getInforme = function () {
                return this.informes
            }
        }

        // Añade al prototipo que hereda de Empleado()
        Director.prototype = new Empleado();

        // Estable el constructor de Director
        Director.prototype.constructor = new Empleado();

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

        dr2.informes.push("Informe producción enero");
        dr2.informes.push("Informe producción febrero");
        dr2.informes.push("Informe producción marzo");

        let dr3 = new Director("Hortencia");

        dr3.informes.push("informe despido becario");

        let ing1 = new Ingeniero("Juan");
        let ing2 = new Ingeniero("Carmen");
        let ing3 = new Ingeniero("Pablo");
        let ing4 = new Ingeniero("Emilio");

        ing1.LenguajeProgramacion = "Java";
        ing2.LenguajeProgramacion = "C++";
        ing3.LenguajeProgramacion = "JS";
        ing4.LenguajeProgramacion = "HTML";

        document.write("________******** NOMBRES DIRECTORES ******** ________" + `<br>`)
        document.write("Director --> " + dr1.getNombreDir() + `<br>`)
        document.write("Director --> " + dr2.getNombreDir() + `<br>`)
        document.write("________******** INFORMES de: " + dr2.getNombreDir() + ` : <br>`)
        for (let key in dr2.informes) {
            document.write('------------------********* ' + dr2.informes[key] + `<br>`)
        }
        document.write(`Director --> ` + dr3.getNombreDir() + `<br>`)
        document.write("________******** INFORMES de: " + dr3.getNombreDir() + ` : <br>`)
        for (let key in dr3.informes) {
            document.write('------------------********* ' + dr3.informes[key] + `<br><br>`)
        }
        document.write("________******** INGENIEROS ********________" + `<br>`)
        document.write('------------------********* ' + ing1.getInforme() + `<br>`)
        document.write('------------------********* ' + ing2.getInforme() + `<br>`)
        document.write('------------------********* ' + ing3.getInforme() + `<br>`)
        document.write('------------------********* ' + ing4.getInforme() + `<br>`)