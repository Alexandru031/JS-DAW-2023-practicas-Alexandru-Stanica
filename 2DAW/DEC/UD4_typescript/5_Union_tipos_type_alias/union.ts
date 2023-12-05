/* Crear un objeto con un mínimo de 3 parámetros que puedan elbergar datos tanto de tipo number, string, boolean y muéstralo por pantalla. */
const funcMostrar = function (valor1: number | string | boolean, valor2: number | string | boolean) {
    return `El primer valor es de tipo ${typeof valor1} y es ${valor1}\n` + 
    ` El segundo valor es de tipo ${typeof valor2} y es ${valor2}`
}
console.log(funcMostrar("Hola", true))

/* Crea un array en TS y almacena y muestra los datos mostrados por pantalla en el punto 1. */