document.addEventListener(`keydown`, function (event) {
    if (event.altKey && event.key === `F12`) {
        const randomWidth = Math.floor(Math.random() * 1000); // Ancho aleatorio
        const randomHeight = Math.floor(Math.random() * 1000); // Alto aleatorio
        const imageUrl = `https://picsum.photos/${randomWidth}/${randomHeight}`;
        document.getElementById('imagen').style.backgroundImage = `url("${imageUrl}")`;
    }
})