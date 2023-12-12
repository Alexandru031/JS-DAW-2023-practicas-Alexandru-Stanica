// Copia este código dentro de VSC
let persona = {nombre: "NombreInventado", profesion: "Informático DAW"}; 

// Al copiar los valores de un objeto no estamos copiando dichos valores,
// sino la la referencia al espacio de memoria.

let antonioObj = {...persona}

/*  /* De esta forma se define las propiedades de los atributos */

console.log(persona.nombre);
console.log(antonioObj.nombre);

console.log(persona.profesion);
console.log(antonioObj.profesion);

// ¿Qué está pasando?

// Realiza y prueba cómo se desestructura un objeto.

// Mira la teoría y soluciona el problema.