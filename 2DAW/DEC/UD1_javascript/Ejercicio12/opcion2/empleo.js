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

        /* Crea los directores */
        let dr1 = new Director("Pepito");
        let dr2 = new Director("Manolo");
        let dr3 = new Director("Hortencia");

        /* Añadé info en informe de directores */
        dr2.informes.push("Informe producción enero");
        dr2.informes.push("Informe producción febrero");
        dr2.informes.push("Informe producción marzo");
        dr3.informes.push("informe despido becario");

        /* Crea los ingenieros */
        let ing1 = new Ingeniero("Juan");
        let ing2 = new Ingeniero("Carmen");
        let ing3 = new Ingeniero("Pablo");
        let ing4 = new Ingeniero("Emilio");

        /* Añadé info en informe de ingeniero */
        ing1.LenguajeProgramacion = "Java";
        ing2.LenguajeProgramacion = "C++";
        ing3.LenguajeProgramacion = "JS";
        ing4.LenguajeProgramacion = "HTML";

        /* Crea array para guardar los directores y los ingenieros */
        const directores = [];
        const ingenieros = []

        /* Añadé los directores */
        directores.push(dr1)
        directores.push(dr2)
        directores.push(dr3)

        /* Añade los ingenieros */
        ingenieros.push(ing1)
        ingenieros.push(ing2)
        ingenieros.push(ing3)
        ingenieros.push(ing4)


        // RESULTADOS
        /* Mostrar los directores y sus informes */
        document.write("________******** NOMBRES DIRECTORES ******** ________" + `<br>`)
        for (let key1 in directores) {
            document.write("Director --> " + directores[key1].getNombreDir() + `<br>`)
            if (!directores[key1].getInforme().length == 0) {
                document.write("________******** INFORMES de: " + directores[key1].getNombreDir() + ` : <br>`)
                for (let key2 in directores[key1].informes) {
                    document.write('------------------********* ' + directores[key1].informes[key2] + `<br>`)
                }
            }
        }

        /* Mostrar los ingenieros y sus informes */
        document.write(`<br>` + "________******** INGENIEROS ********________" + `<br>`)
        for (let key in ingenieros) {
            document.write('------------------********* ' + ingenieros[key].getInforme() + `<br>`)
        }