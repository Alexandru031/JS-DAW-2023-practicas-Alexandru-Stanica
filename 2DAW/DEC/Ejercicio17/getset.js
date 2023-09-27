/*
Crea una clase llamada AlumnoDaw (nombre, apellido, email y edad) y creat sus getters y setters. Realiza todas las pruebas que consideres oportunas.
*/

class AlumnoDAW {
    constructor(nombre, apellido, email, edad){
        this.nombre = nombre
        this.apellido = apellido
        this.email = email
        this.edad = edad
    }

    getDatos(){
        return  `Nombre: ${this.nombre}\n` + 
                `Apellido: ${this.apellido}\n` +
                `Email: ${this.email}\n` + 
                `Edad: ${this.edad}\n`
    }

    setNombre(nombre) {
        return this.nombre = nombre
    }

    setEdad(edad) {
        return this.edad = edad
    }
}

let Usuario1 = new AlumnoDAW("Alexandru", "Stanica" , "hola@gmail.com", 20)

Usuario1.setNombre("Toni")

console.log(Usuario1.getDatos())