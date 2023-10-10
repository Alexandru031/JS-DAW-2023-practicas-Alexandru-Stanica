function convertir(){
    let nombre = document.getElementById("nombre").value
    document.getElementById("inversa").value = invertir(nombre)
    document.getElementById("mayus").value = nombre.toUpperCase()
    document.getElementById("repetida").value = repetida(nombre)
    document.getElementById("invermayus").value = invertirMayusculas(nombre)
}

function invertir(nombre) {
    let texto = ""
    for (let index = nombre.length; index >= 0; index--) {
        texto += nombre.charAt(index)
    }
    return texto
}

function repetida(nombre) {
    let texto = ""
    for (let index = 0; index <= 2 ; index++) {
        texto += nombre
    }
    return texto
}

function invertirMayusculas(nombre) {
    let texto = ""
    for (let index = nombre.length; index >= 0; index--) {
        texto += nombre.charAt(index).toUpperCase()
    }
    return texto
}