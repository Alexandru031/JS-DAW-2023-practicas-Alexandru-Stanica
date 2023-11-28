
    /* Numero de enlaces de la pagina */
    let parrafo = document.querySelectorAll("p");
    let a = document.getElementsByTagName('A');
    let cont_a = 0; 
    for (let i = 0; i < a.length; i++) {
        cont_a++;
    }
    document.write("El numero de enlaces es: " + cont_a);
    document.write("<br>")

    /* Direccion de enlace del penultimo */
    let cont = a.length - 2 
    document.write("El enlace del penultimo es: " + `<a href="${a[cont].getAttribute("href")}"> Penultimo </a>`)

    /* Numero de enlaces que enlazan a http://prueba */
    let cont_enlace = 0;
    for (let k = 0; k < a.length; k++) {
        if (a[k].getAttribute("href") == "http://prueba") {
            cont_enlace++;
        }
    }
    document.write("<br>El numero de enlaces que enlaza http://prueba es: " + cont_enlace)

    /* Numero de enlaces del tercer párrafo */
    let cont_tercer = 0
    const tercerparrafo = parrafo[2]
    const enlaces = tercerparrafo.querySelectorAll("a")
    document.write("<br>El numero de enlaces en el parrafo 3 es: " + enlaces.length)