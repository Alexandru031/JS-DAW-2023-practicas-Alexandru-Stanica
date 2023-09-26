/*
En el centro de Cheste tenemos distintos tipos registro de usuarios. Cada usuario tendrá un nombre, correo y contraseña para acceder a la plataforma.
Dentro de cada centro puede haber distintos tipos de usuarios: alumnosASIR, alumnosDAW, invitados, profesores, etc. además, dichos usuarios comparten gran parte de su funcionalidad y pueden acceder mediante un login (email y contraseña).

    La clase Usuario tendrá un nombre, email y contraseña. Además, tendrá los métodos saludo, y login (email, contraseña).
    AlumnoASIR tendrá, a parte de la funcionalidad de Usuario, un parámetro para añadir los cursos que será un array vacío y otro que nos indica si el alumno está activo o no.
    AlumnoDAW tendrá lo mismo que AlumnoAsir

Hola, soy Toni // sería alumno de DAW
true ​​​​​at ​​​​​​​​usuarioDaw.login('a@gmail.com', '1234')
false ​​​​​at ​​​​​​​​usuarioDaw.login('b@gmail.com', '12345')

Hola, soy Paco // sería alumno de DAW
true ​​​​​at ​​​​​​​​usuarioAsir.login('paco@gmail.com', '123..
*/

class Usuario {
    constructor(nombre, email, contraseña){
        this.nombre = nombre
        this.email = email
        this.contraseña = contraseña
    }

    saludo() {
        return `Hola, soy ${this.nombre}`
    }

    login(email, contraseña) {
        return this.email === email && this.contraseña === contraseña
    }
}

class AlumnoASIR extends Usuario {
    constructor(nombre, email, contraseña){
        super()
        this.nombre = nombre
        this.email = email
        this.contraseña = contraseña
        this.cursos = []
        this.activo = false
    }

    añadirCursos(curso) {
        return this.cursos.push(curso)
    }
}

class AlumnoDAW extends Usuario {
    constructor(nombre, email, contraseña){
        super()
        this.nombre = nombre
        this.email = email
        this.contraseña = contraseña
        this.cursos = []
        this.activo = false
    }

    añadirCursos(curso) {
        return this.cursos.push(curso)
    }
}

let usuarioDAW1 = new AlumnoDAW(`Toni`,`a@gmail.com`, `1234`)
let usuarioDAW2 = new AlumnoDAW(`Paco`,`paco@gmail.com`, `123`)

console.log(usuarioDAW1.saludo())
console.log(usuarioDAW1.login(`a@gmail.com`, `1234`))
console.log(usuarioDAW1.login(`b@gmail.com`, `12345`))

console.log(usuarioDAW2.saludo())
console.log(usuarioDAW2.login(`paco@gmail.com`, `123`))