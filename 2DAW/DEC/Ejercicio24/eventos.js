document.getElementById('capa1').addEventListener('dragstart', function (e) { /* Dragstart cuando arrastramos la zona de la capa1 y el fantasma de la capa1 muestra los estilos */
    e.dataTransfer.setData("text", e.target.id); /* Guardar información del elemento arrastrado de capa1 */
    this.style.opacity = "0.5"; /* La capa1 fantasma tiene opacidad de 50% */
  });
  
  document.getElementById('capa2').addEventListener('dragover', function (e) { /* Dragover sobre la zona de la capa2 */
    e.preventDefault(); /* Evita que el navegador maneje el comportamiento predeterminado del evento de arrastre y soltar */
    this.style.background = 'red'; /* Cambiar el fondo de la capa2 a rojo cuando arrastramos el elemento capa1 a la zona de capa2 */
  });

  document.getElementById('capa2').addEventListener('drop', function (e) { /* Cuando soltamos la capa1 a la capa2, se cambiar los estilos de la capa2 */
    e.preventDefault(); /* Evita que el navegador maneje el comportamiento predeterminado del evento de arrastre y soltar */
    this.style.background = 'yellow'; /* Cambiar el fondo del elemento de la capa2 */
    this.innerHTML = 'LO HAS CONSEGUIDO'; /* Escribe el documento HTML en la capa2 */
    let data = e.dataTransfer.getData("text"); /* Coge el elemento de la capa1 y lo guarda en un valor */
    document.getElementById(data).style.display = "none"; /* Desaparece la capa1 y solo muestra la capa2 */
  });
