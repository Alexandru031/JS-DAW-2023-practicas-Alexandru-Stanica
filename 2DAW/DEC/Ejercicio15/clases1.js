/* Crea una clase para guardar datos del alumnado del Complejo de Cheste. Se quiere trabajar con los datos: matricula, NIA, nombre, apellidos, curso y modulo.
Además, se crearán dos métodos sencillos de intancia de la clase: iniciar y mostrar datos.

     Método iniciar: Se pondrá un string, a vuestro gusto.
     Método mostrarDatos: Solamente nos interesa, de momento, los datos de la matricula, NIA, curso y modulo.
*/

class Alumno {
    constructor(){
        this.matricula = " "
        this.nia = " "
        this.nombre = " "
        this.apellidos = " "
        this.curso = " "
        this.modulo = " "
    }

    iniciar(matricula, nia, curso, modulo) {
        this.matricula = matricula
        this.nia = nia
        this.curso = curso
        this.modulo = modulo
    }

    mostrarDatos() {
        return  `**********Datos alumnos del Complejo de Cheste**********\n` +
                `Matricula: ${this.matricula}\n` + 
                `NIA: ${this.nia}\n` + 
                `Curso: ${this.curso}\n` + 
                `Modulo: ${this.modulo}`
    }
}

let alumno1 = new Alumno()

alumno1.iniciar("2033DMH", "12345678", 2, "DAW")

console.log(alumno1.mostrarDatos())