/*
Escribe un programa en JavaScript que, a partir de tres botones como los de la imagen,
cambie el color de fondo según el botón pulsado. Deberéis implementar el código mediante
una función a la que se le pase el color escogido como parámetro de entrada.
*/

function azul() {
  return document.body.style.backgroundColor = "#1c03fc"
}

function verde() {
  return document.body.style.backgroundColor = "#03fc0f"
}

function rojo() {
  return document.body.style.backgroundColor = "#fc0703"
}

function blanco() {
  return document.body.style.backgroundColor = "#ffffff"
}