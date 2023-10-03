/*
En este ejercicios trabajaremos con SET y guardaremos de cada módulo la abreviatura, la duración del módulo y los alumnos matriculados.
*/

let sets = new Set()

let dec = { abr: "DEC", dur: 125, alum:  ["Jose", "Juan", "Pedro"]}
let daw = { abr: "DAW", dur: 200, alum:  ["Manolo", "Santi", "Cristian"]}
let diw = { abr: "DIW", dur: 96, alum:  ["Pepe", "Alex", "Carlos"]}
let dws = { abr: "DWS", dur: 256, alum:  ["Cecilia", "Antonio", "Lorenzo"]}

sets.add(dec)
sets.add(daw)
sets.add(diw)
sets.add(dws)

for (const set of sets) {
    document.write(`La abreviatura es ${set.abr}, la duración es: ${set.dur} y los alumnos matriculados son: ${alumnos(set.alum)}<br>`)
}

function alumnos(set) {
    let texto = ""
    for (const alum of set) {
        texto += `${alum} `
    }
    return texto
}