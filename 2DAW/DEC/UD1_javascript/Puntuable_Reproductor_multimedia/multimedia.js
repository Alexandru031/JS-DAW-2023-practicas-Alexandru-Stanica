const imagenes = ["image/babydoll.jpeg", "image/Vanished.jpeg"];
const audios = [
  "audio/babydoll_x_the_perfect_girl_slowed_reverb.mp3",
  "audio/Crystal_Castles_Vanished.mp3",
];

let cancion = 0;

const audio = document.createElement("audio");
audio.preload = "auto";
audio.src = audios[cancion];
document.getElementById("contenedor").appendChild(audio);

let slider = document.getElementById("slider");
slider.style.backgroundImage = `url("${imagenes[cancion]}")`;

setInterval(function () {
  let cont_ahora = parseInt(audio.currentTime);

  let minutos = `00:00`;

  document.getElementById("duracion").innerHTML = minutos;
}, 100);

let retroceder_play = true;
let plays = true;
function play() {
  plays = !plays;
  if (plays) {
    audio.pause();
    document
      .getElementById("imagen_play_pause")
      .setAttribute("src", "image/boton-de-play.png");
  } else {
    audio.play();
    document
      .getElementById("imagen_play_pause")
      .setAttribute("src", "image/boton-de-pausa.png");
  }

  if (retroceder_play) {
    audio.play()
    document
      .getElementById("imagen_play_pause")
      .setAttribute("src", "image/boton-de-pausa.png");
  }
}

let lop = false;
function loop() {
  lop = !lop;
  if (lop) {
    audio.loop = true;
    document.getElementById("bucle").style.backgroundColor = "green";
  } else {
    audio.loop = false;
    document.getElementById("bucle").style.backgroundColor = "white";
  }
}

function retroceder() {
  if (cancion > 0) {
    cancion--;
  }
  audio.src = audios[cancion];
  audio.play();
  retroceder_play = false;
  document
      .getElementById("imagen_play_pause")
      .setAttribute("src", "image/boton-de-pausa.png");
  slider.style.backgroundImage = `url("${imagenes[cancion]}")`;
}

function continuar() {
  if (cancion < audios.length - 1) {
    cancion++;
  }
  audio.src = audios[cancion];
  audio.play();
  document
      .getElementById("imagen_play_pause")
      .setAttribute("src", "image/boton-de-pausa.png");
  slider.style.backgroundImage = `url("${imagenes[cancion]}")`;
}

function adelantar_10() {
  audio.currentTime += 10;
}
