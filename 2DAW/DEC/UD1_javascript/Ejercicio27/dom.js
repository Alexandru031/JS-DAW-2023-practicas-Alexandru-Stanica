let body = document.querySelector("body")
body.insertAdjacentHTML('beforebegin', '<hr>')

/* Crear Nombre */
let nombre = document.createElement('label')
let input_nombre = document.createElement('input')
input_nombre.setAttribute('id', 'nombre')
input_nombre.setAttribute('type', 'text')
nombre.textContent = "Nombre:";
body.insertAdjacentElement('beforebegin', nombre)
body.insertAdjacentElement('beforebegin', input_nombre)

/* Crear Apellido */
let apellido = document.createElement('label')
/* Añade atributo de apellido */
apellido.setAttribute('style', 'padding-left: 30px')
let input_apellido = document.createElement('input')
/* Añade los atributos de input apellido */
input_apellido.setAttribute('style', 'margin-right:20px;')
input_apellido.setAttribute('id', 'apellido')
input_apellido.setAttribute('type', 'text')
/* Añade el contenido en apellido */
apellido.textContent = "Apellido:";

/* Añade al body antes de comenzar */
body.insertAdjacentElement('beforebegin', apellido)
body.insertAdjacentElement('beforebegin', input_apellido)

/*  Crear Boton Enviar */
let boton = document.createElement('button')
boton.textContent = "Enviar datos"
boton.setAttribute("id", "btn")
boton.setAttribute("onclick", "mostrar()")
body.insertAdjacentElement('beforebegin', boton)

function mostrar() {
    let nombre = document.getElementById('nombre').value
    let apellido = document.getElementById('apellido').value
    document.body.innerHTML = `<br>Hola, buenos días ${nombre} ${apellido}, gracias por rellenar el formulario`
}