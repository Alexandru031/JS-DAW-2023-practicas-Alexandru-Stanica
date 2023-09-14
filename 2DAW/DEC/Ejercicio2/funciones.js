function suma(valorX = parseInt(document.getElementById("valorX").value), valorY = parseInt(document.getElementById("valorY").value)) {
    var salida = document.getElementById("result").value
    var result = valorX + valorY;
  alert(`El resultado es ${result}`);
  salida.inne = result
}

function restar(valorX = parseInt(document.getElementById("valorX").value), valorY = parseInt(document.getElementById("valorY").value)) {
  var result = valorX - valorY;
  alert(`El resultado es ${result}`);
}

function mult(valorX = parseInt(document.getElementById("valorX").value), valorY = parseInt(document.getElementById("valorY").value)) {
  var result = valorX * valorY;
  alert(`El resultado es ${result}`);
}

function div(valorX = parseInt(document.getElementById("valorX").value), valorY = parseInt(document.getElementById("valorY").value)) {
    var result = valorX / valorY;
  alert(`El resultado es ${result}`);

}