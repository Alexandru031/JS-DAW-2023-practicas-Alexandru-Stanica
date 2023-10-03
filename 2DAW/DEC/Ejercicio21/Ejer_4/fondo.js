/*
Escribe un programa en JavaScript que pregunte al usuario qué color de fondo prefiere. El
usuario responderá ‘R’ para rojo, ‘V‘ para verde o ‘A’ para azul. Una vez respondido, el fondo
del documento cambiará al color escogido.

Nota:* el color de fondo del documento corresponde a la propiedad bgColor del objeto
document. Por tanto, accederemos a ella mediante la sentencia:*

document.bgColor=”colorExpresadoEnHex”
*/

let tipoColor = prompt("¿Que color prefiere (R/rojo)(V/verde)(A/azul)?");
cambia(tipoColor)

function cambia(tipoColor) {
switch (tipoColor.toLowerCase()) {
  case "r":
    return document.body.style.backgroundColor = "#fc0303";
  case "v":
    return document.body.style.backgroundColor = "#35fc03";
  case "a":
    return document.body.style.backgroundColor = "#1c03fc";
  default:
    alert("El color no existe, selecciona R, A, o V")
    tipoColor = prompt("¿Que color prefiere (R/rojo)(V/verde)(A/azul)?");
    cambia(tipoColor)
}
}
