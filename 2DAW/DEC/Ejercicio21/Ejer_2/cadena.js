/*
Escribe un programa en JavaScript que pida al usuario que introduzca una cadena de texto.
Mediante una ventana emergente, el programa mostrará cuántas letras ‘a’ hay en la cadena
de texto introducida.
*/

let texto = prompt("Introduce cualquier texto")

let contA = 0
for (let i = 0; i < texto.length; i++) {
    let caracter = texto.charAt(i);
    if (caracter == "a") {
        contA++
    }
}
alert(`La cadena tiene un total es ${contA} letras "a"`)