document.addEventListener(`keydown`, function (event) {
    if (event.altKey && event.key === `F12`) {
        const randomWidth = Math.floor(Math.random() * (4000 - 2000 + 1) + 2000); // Ancho aleatorio
        /* const randomHeight = Math.floor(Math.random() * 2000); // Alto aleatorio */
        /* const imageUrl = `https://picsum.photos/${randomWidth}/${randomHeight}`; */
        const imageUrl = `https://picsum.photos/${randomWidth}`;
        document.getElementById('imagen').style.backgroundImage = `url("${imageUrl}")`;
    }
})