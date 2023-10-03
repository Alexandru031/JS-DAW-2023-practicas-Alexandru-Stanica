/*
Diseña un programa en JavaScript que permita al usuario introducir tres valores numéricos
en un pequeño formulario. Al enviar el formulario, el programa informará, mediante ventana
emergente, de cuál de los tres números introducidos es el mayor. Nota: el programa nunca
seleccionará el número mayor si alguno de los campos está en blanco o el valor que contiene
no es numérico.
*/

function numMayor() {
    /* */
    let num1 = parseInt(document.getElementById("numero1").value)
    let num2 = parseInt(document.getElementById("numero2").value)
    let num3 = parseInt(document.getElementById("numero3").value)

    /* Se ponen 0 cuando no son numeros */
    if(isNaN(num1)){
        num1 = parseInt(0)
    }
    if(isNaN(num2)){
        num2 = parseInt(0)
    }
    if(isNaN(num3)){
        num3 = parseInt(0)
    }

    /* Muestra el error con los campos vacios */
    if (num1 == 0 && num2 == 0 && num3 == 0) {
        return alert("No has introducido ningún numero")
    }

    /* Una vez que se ejecute se muestra los campos vacios */
    document.getElementById("numero1").value = ""
    document.getElementById("numero2").value = ""
    document.getElementById("numero3").value = ""

    /* Comparar el numero mayor */
    if (num1 > num2 && num1 > num3) {
        return alert(`El numero mayor es ${num1}`)
    } else if (num2 > num1 && num2 > num3) {
        return alert(`El numero mayor es ${num2}`)
    } else{
        return alert(`El numero mayor es ${num3}`)
    }
}