/* Crear un objeto con un mínimo de 3 parámetros que puedan elbergar datos tanto de tipo number, string, boolean y muéstralo por pantalla. */
const funcMostrar = function (valor1: number | string | boolean, valor2: number | string | boolean, valor3: number | string | boolean) {
    return `El primer valor es de tipo ${typeof valor1} y es ${valor1}\n` + 
    ` El segundo valor es de tipo ${typeof valor2} y es ${valor2}\n` +
    ` El tercer valor es de tipo ${typeof valor3} y es ${valor3}`
}
console.log(funcMostrar("Hola", true, 8))

/* Crea un array en TS y almacena y muestra los datos mostrados por pantalla en el punto 1. */
const datos1:[number, string, boolean] = [5, "Buenas", false];
console.log(funcMostrar(datos1[0], datos1[1], datos1[2]))

/* Crea un alias para un objeto (parecido al del paso 1) y muestra los resultados. (ver la teoría) */
type tipoDeDatos = number | string | boolean;
const datos2:{
    valor1: tipoDeDatos;
    valor2: tipoDeDatos;
    valor3: tipoDeDatos;
} = {
    valor1:7,
    valor2: "Objeto",
    valor3: true
}
console.log(funcMostrar(datos2.valor1, datos2.valor2, datos2.valor3))

/* Utiliza el operador type para declarar un mínimo de 5 constantes referentes 
a tus hobbies ordenados por prioridad del primero al último (por ejemplo: "1.futbol" 
| "2.programar" | "3.peliculas" | "4.consola" | "5.gimnasio";).El programa devolverá 
"true" solamente cuando se asigne el hobby con mayor prioridad, o sea el primero de 
la lista, y false cuando se asigne a otro. Muestra los resultados por pantalla. */
type hobbies = "Futbol" | "Programar" | "Peliculas" | "Consola" | "Gimnasio";
const isHobbie = (hobbie:hobbies):boolean => hobbie === "Futbol"
console.log(isHobbie("Futbol"))