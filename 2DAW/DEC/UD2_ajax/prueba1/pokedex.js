fetch("https://pokeapi.co/api/v2/pokemon/1/")
  .then(function (response) {
    return response.json();
  })
  .then(function (json) {
    tabla2(json);
  });


  function tabla2(json) {
    for (let i = 0; i < 10; i++) {
      let body = document.querySelector('body');
      let img = document.createElement("img");
      img.setAttribute("src", json.sprites.back_default)
      body.insertAdjacentElement('afterend', img)
    }
    
  }