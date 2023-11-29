
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
    alert("Has llegado al inicio")
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
  let tabla = document.querySelector("#tabla");
  h1.insertAdjacentElement('afterend', tabla);

  // Usar Promise.all para esperar todas las solicitudes de otraUrl
  Promise.all(json.results.slice(0, 20).map(item => otraUrl(item.url)))
    .then(urls => {
      for (let i = 0; i < 20; i++) {
      let tr = tabla.rows[i]; // Accede a la fila existente (si existe)
      if (!tr) {
        tr = tabla.insertRow(i); // Si la fila no existe, crea una nueva fila
      }

      // Actualiza o crea la celda 1 (td1)
      let td1 = tr.cells[0];
      if (!td1) {
        td1 = tr.insertCell(0); // Si la celda no existe, crea una nueva celda
      }
      td1.textContent = json.results[i].name; // Actualiza el contenido de td1

      // Actualiza o crea la celda 2 (td2) para la imagen
      let td2 = tr.cells[1];
      if (!td2) {
        td2 = tr.insertCell(1); // Si la celda no existe, crea una nueva celda
      }
      let img = document.createElement("img");
      img.setAttribute("src", urls[i]);
      td2.innerHTML = ''; // Limpia el contenido previo de td2
      td2.appendChild(img); // Agrega la imagen a td2
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
      return json.sprites.front_default; /* Coge la imagen de la API */
    });
}
