/*
Utiliza una colección de datos identificados por claves (map) para almacenar información de todos los módulos que se imparten en segundo de DAW.

El programa tiene que tener obligatoriamente la siguiente información:
   
    1.Muestra cuántos módulos hay en total.
    2.Muestra el contenido tanto de la clave como de su valor (printéalo bonito).
    3.Devuelve por pantalla solamente las abreviaturas de los módulos de 2DAW del Complejo de Cheste.
    4.Devuelve por pantalla el nombre de los módulos de 2DAW del Complejo de Cheste.
    5.Verifica si el módulo está dentro de algún módulo.
    6.Elimina el módulo que menos te interese.
*/

let modulos = new Map()

/* Crea modulos */
modulos.set(`DEC`, `Desarrollo Web en Entorno Cliente`)
modulos.set(`DWS`, `Desarrollo Web en Entorno Servidor`)
modulos.set(`DAW`, `Despliegue de aplicaciones web`)
modulos.set(`DIW`, `Diseño de interfaces web`)

/* Muestra cuántos módulos hay en total */
document.write(`La cantidad total de módulos son: ${modulos.size}<br>`)

/* Muestra el contenido tanto de la clave como de su valor (printéalo bonito). */
for (const [clave, valor] of modulos) {
    document.write(`La abreviatura es ${clave} y su nombre completo es ${valor}<br><br>`)
}

/* Devuelve por pantalla solamente las abreviaturas de los módulos de 2DAW del Complejo de Cheste */
document.write(`Abreviaturas:<br>`)
for (const abreviatura of modulos.keys()) {
    document.write(abreviatura + `<br>`)
}

/* Devuelve por pantalla el nombre de los módulos de 2DAW del Complejo de Cheste. */
document.write(`<br>Los nombres completos de los módulos son:<br>`)
for (const nomCompletos of modulos.values()) {
    document.write(nomCompletos + `<br>`)
}

/* Verifica si el módulo está dentro de algún módulo */
document.write(`<br>¿Está el módulo DAW entre módulos de 2 de DAW -> ${modulos.has(`DAW`)}`)
document.write(`<br>¿Está el módulo GBD entre módulos de 2 de DAW -> ${modulos.has(`GBD`)}<br>`)

/* Elimina el módulo que menos te interese */
modulos.delete(`DAW`)
for (const [clave, valor] of modulos) {
    document.write(`La clave -> ${clave} y su valor -> ${valor}<br><br>`)
}