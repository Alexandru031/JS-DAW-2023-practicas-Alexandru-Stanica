enum Dias_num {
    Lunes=1,
    Martes,
    Miercoles,
    Jueves,
    Viernes,
    Sabado,
    Domingo
}

console.log(Dias_num)

enum Dias_texto {
    Lunes="Lunes",
    Martes="Martes",
    Miercoles="Miercoles",
    Jueves="Jueves",
    Viernes="Viernes",
    Sabado="Sabado",
    Domingo="Domingo"
}

function imprimirSaludo(mensaje:string, dia: Dias_texto):void {
    console.log(`${mensaje}, hoy es ${dia}. Feliz 2023!`);
}

console.log(Dias_texto)

console.log(imprimirSaludo("Buenas tardes", Dias_texto.Lunes))