
let esIncorrecto = true

while (esIncorrecto) {
    let texto = prompt("¿Qué día naciste? YYYY/MM/DD")
    const regex = /\d{4}\/\d{2}\/\d{2}/

    /* Valida el formato de texto */
    if (regex.test(texto)) { 
        alert(`Han transcurrido ${calcularDias(texto)} días, aproximadamente, desde que naciste`)
        esIncorrecto = false
    } else {
        alert("Formato Incorrecto")
    }
}

function calcularDias(texto) {
    let fechaInicio = convertirFecha(texto).getTime(); /* Crea la fecha de nacimiento */
    let fechaFin = new Date(Date.now()).getTime() /* Crea la fecha actual */

    let diff = fechaFin - fechaInicio;
    
    let result = diff/(1000*60*60*24)
    return result.toFixed(2) /* Muestra el resultado con 2 decimales despues de la coma */
                 // (1000*60*60*24) --> milisegundos -> segundos -> minutos -> horas -> días
}

function convertirFecha(texto) {
    let myDate = texto.split('/'); /* Crea un arreglo separado por "/" */
    return new Date(myDate[0], myDate[1] - 1, myDate[2]);
}