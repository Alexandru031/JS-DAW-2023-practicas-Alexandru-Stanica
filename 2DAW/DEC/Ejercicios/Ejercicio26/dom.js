/* Crea los elementos de HTML */
let parrafo1 = document.createElement('p')
let parrafo2 = document.createElement('p')
let enlace = document.createElement('a')
let ul = document.createElement('ul')
let selector = document.createElement('select')
let input = document.createElement('input')

/* Crear nodos de texto para un elemento */
let texto_parrafo1 = document.createTextNode('Párrafo 1 realizado desde JS')
let texto_parrafo2 = document.createTextNode('Párrafo 2 copiado y pegado del primer parrafo')
let texto_enlace = document.createTextNode('Enlace de Google:')

/* Añadir el atributo del enlace */
enlace.setAttribute('href', 'https://www.google.com/')
selector.setAttribute("id", "selector")
selector.setAttribute("name", "selector")

/* Añadir texto en los elementos creados */
parrafo1.appendChild(texto_parrafo1)
parrafo2.appendChild(texto_parrafo2)
enlace.appendChild(texto_enlace)

/* Crea el cuerpo body */
let body = document.querySelector('body')

/* Añadir al cuerpo y mostrar en HTML */
body.insertAdjacentElement('beforebegin', parrafo1)
body.insertAdjacentElement('beforebegin', parrafo2)
body.insertAdjacentElement('beforebegin', enlace)
añadirLista()
añadirSelecion()
body.insertAdjacentHTML('beforebegin' , '<br>') /* Añadir un salto de linea */
body.insertAdjacentElement('beforebegin' , input)

/* Añadir elementos de lista y mostrar */
function añadirLista() {
    for (let i = 0; i < 3; i++) {
        let li = document.createElement('li')
        let texto_lista = document.createTextNode(`elemento de la lista: ${i}`)
        li.appendChild(texto_lista)
        ul.appendChild(li)
    }
    body.insertAdjacentElement('beforebegin', ul)
}

/* Añadir elementos de selección y mostrar */
function añadirSelecion() {
    for (let i = 0; i < 3; i++) {
        let option = document.createElement('option')
        option.textContent = `Opción ${i}`
        option.setAttribute("value" , `opcion${i}`)
        selector.appendChild(option)
    }
    body.insertAdjacentElement('beforebegin', selector)
}