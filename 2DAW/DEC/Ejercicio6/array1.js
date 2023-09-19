const array = (max) => {
    const array = [];

    /* Añade los numeros */
    for (let i = 0; i < max; i++) {
        array.push(i);
    }

    /* Comprobrar los numeros de array */
    for (let index = 0; index < array.length; index++) {
        console.log(`${index}`)
    }
}

/* Ejecuta función de flecha */
console.log(array(10));