
let esIncorrecto = true

while (esIncorrecto) {
    let texto = prompt("¿Qué día naciste? YYYY/MM/DD")
    const regex = /\d{4}\/\d{2}\/\d{2}\//

    if (texto.isNan() || regex.test(texto)) {
        alert(`Han transcurrido ${calcularDias(texto)} días, aproximadamente, desde que naciste`)
        esIncorrecto = false
    } else {
        alert("Formato Incorrecto")
    }
}

function calcularDias(texto) {
    let fecha1 = moment(texto);
    let fecha2 = moment('2016-08-01');

console.log(fecha2.diff(fecha1, 'days'), ' dias de diferencia');
    const fechaNow = Date.now()
    return fechaNow.diff(texto, ``)
}