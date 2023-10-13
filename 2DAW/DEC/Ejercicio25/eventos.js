function validar() {
    let email = document.getElementById("email").value
    let password = document.getElementById("password").value

    if (validarEmail(email) && validarPassword(password)) {
        alert("SE HA ENVIADO")
    } else if (!validarEmail(email)) {
        alert("El formato del email es incorrecto -> xxx@yyyyy.zzzz")
        document.getElementById("email").value = ""
        document.getElementById("password").value = ""
    } else if (!validarPassword(password)) {
        alert("La contraseña debe tener una longitud entre 8 y 10 caracteres")
        document.getElementById("email").value = ""
        document.getElementById("password").value = ""
    } else {
        alert("La contraseña o el correo electrionico no correctas")
        document.getElementById("password").value = ""
        document.getElementById("email").value = ""
    }
}

function validarEmail(email) {
    const regex = /\w+@\w{5}\.\w{3}/
    if (regex.test(email)) {
        return true
    } else {
        return false
    }
}

function validarPassword(password) {
    if (password.length >= 8 && password.length <= 10) {
        return true;
    } else {
        return false;
    }
}