const array = (min, max) => {
    const array = [];

    /* Añade los numeros */
    while (min < max) {
        array.push(min)
        console.log(`${min}`)
        min++
    }
}

/* Ejecuta función de flecha */
console.log(array(10, 20));