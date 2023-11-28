function suma() {
  let valorX = parseInt(document.getElementById("valorX").value);
  let valorY = parseInt(document.getElementById("valorY").value);
  let result = valorX + valorY;
  document.getElementById("result").value = result;
}

function restar() {
  let valorX = parseInt(document.getElementById("valorX").value);
  let valorY = parseInt(document.getElementById("valorY").value);
  let result = valorX - valorY;
  document.getElementById("result").value = result;
}

function mult() {
  let valorX = parseInt(document.getElementById("valorX").value);
  let valorY = parseInt(document.getElementById("valorY").value);
  let result = valorX * valorY;
  document.getElementById("result").value = result;
}

function div() {
  let valorX = parseInt(document.getElementById("valorX").value);
  let valorY = parseInt(document.getElementById("valorY").value);
  let result = valorX / valorY;
  document.getElementById("result").value = result;
}
