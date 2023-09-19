const array = (max) => {
    const array = [];

    /* Añade los numeros y mostrar */
    for (let i = 0; i < max; i++) {
        array.push(i);
        console.log(`El numero es ${i}`)
    }
}

/* Ejecuta función de flecha */
console.log(array(10));