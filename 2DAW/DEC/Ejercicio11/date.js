
let data = new Date()

let hora = data.getHours()

function saludos() {
    if (hora >= 9 && hora <= 12) {
        return `Buenos días`
    } else if (hora >= 13 && hora <= 19) {
        return `Buenas tardes`
    } else {
        return `Buenas noches`
    }
}

document.write(saludos())