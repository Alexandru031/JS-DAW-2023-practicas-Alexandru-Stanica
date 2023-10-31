let body = document.querySelector("body")
body.insertAdjacentHTML('beforebegin', '<hr>')

/* Crear Nombre */
let nombre = document.createElement('label')
let input_nombre = document.createElement('input')
nombre.textContent = "Nombre:";
body.insertAdjacentElement('beforebegin', nombre)
body.insertAdjacentElement('beforebegin', input_nombre)

/* Crear Apellido */
let apellido = document.createElement('label')
let input_apellido = document.createElement('input')
apellido.textContent = "Apellido:";
body.insertAdjacentElement('beforebegin', apellido)
body.insertAdjacentElement('beforebegin', input_apellido)

/*  Crear Boton Enviar */
let boton = document.createElement('button')
boton.textContent = "Enviar datos"
boton.setAttribute("id", "btn")
boton.setAttribute("onclick", "mostrar()")
body.insertAdjacentElement('beforebegin', boton)