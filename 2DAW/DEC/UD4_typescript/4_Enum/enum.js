var Dias_num

;(function(Dias_num) {
  Dias_num[(Dias_num["Lunes"] = 1)] = "Lunes"
  Dias_num[(Dias_num["Martes"] = 2)] = "Martes"
  Dias_num[(Dias_num["Miercoles"] = 3)] = "Miercoles"
  Dias_num[(Dias_num["Jueves"] = 4)] = "Jueves"
  Dias_num[(Dias_num["Viernes"] = 5)] = "Viernes"
  Dias_num[(Dias_num["Sabado"] = 6)] = "Sabado"
  Dias_num[(Dias_num["Domingo"] = 7)] = "Domingo"
})(Dias_num || (Dias_num = {}))

console.log(Dias_num)

var Dias_texto

;(function(Dias_texto) {
  Dias_texto["Lunes"] = "Lunes"
  Dias_texto["Martes"] = "Martes"
  Dias_texto["Miercoles"] = "Miercoles"
  Dias_texto["Jueves"] = "Jueves"
  Dias_texto["Viernes"] = "Viernes"
  Dias_texto["Sabado"] = "Sabado"
  Dias_texto["Domingo"] = "Domingo"
})(Dias_texto || (Dias_texto = {}))

function imprimirSaludo(mensaje, dia) {
  console.log(`${mensaje}, hoy es ${dia}. Feliz 2023!`)
}

console.log(Dias_texto)

console.log(imprimirSaludo("Buenas tardes", Dias_texto.Lunes))