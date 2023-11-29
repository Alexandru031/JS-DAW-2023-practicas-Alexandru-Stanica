
let saltar = 0;
api()
function next() {
  saltar += 20;
  api()
}

function atras() {
  saltar -= 20
  if (saltar < 0) {
    saltar = 0
  }
  api();
}

function api() {
  fetch(`https://pokeapi.co/api/v2/pokemon/?offset=${saltar}&limit=20`)
  .then(function (response) {
    // Transforma la respuesta. En este caso lo convierte a JSON
    return response.json();
  })
  .then(function (json) {
    tabla2(json);
  }); 
}

/* Crear elementos de las etiquetas en DOM */
function tabla2(json) {
  let h1 = document.querySelector('h1');
  let tabla = document.createElement("table");
  h1.insertAdjacentElement('afterend', tabla);

  // Usar Promise.all para esperar todas las solicitudes de otraUrl
  Promise.all(json.results.slice(0, 20).map(item => otraUrl(item.url)))
    .then(urls => {
      for (let i = 0; i < 20; i++) {
        let td1 = document.createElement("td");
        let td2 = document.createElement("td");
        let tr = document.createElement("tr");
        let img = document.createElement("img");

        tabla.insertAdjacentElement('afterbegin', tr);
        img.setAttribute("src", urls[i]);
        td2.insertAdjacentElement('afterbegin', img);

        let texto1 = document.createTextNode(json.results[i].name);
        td1.appendChild(texto1);
        tr.appendChild(td1);
        tr.appendChild(td2);
      }
    })
}

function otraUrl(url) {
  // Devuelve la promesa de la URL
  return fetch(url)
    .then(function (response) {
      // Transforma la respuesta. En este caso lo convierte a JSON
      return response.json();
    })
    .then(function (json) {
      return json.sprites.front_default;
    });
}
