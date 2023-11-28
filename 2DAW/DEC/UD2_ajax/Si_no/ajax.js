function imagen() {
    fetch('https://yesno.wtf/api')
  .then(function(response) {
    // Transforma la respuesta. En este caso lo convierte a JSON
    return response.json();
  })
  .then(function(json) {
    document.getElementById("mensaje").innerHTML = json.answer
    document.body.style.backgroundImage = `url('${json.image}')`
    // Imprimo por consola
    console.log(json)
  });
}