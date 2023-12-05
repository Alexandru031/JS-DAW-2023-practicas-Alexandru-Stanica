const DAW1: {
    nombre_profesor: string, 
    nombre_alumno: string, 
    edad: number, 
    pais: string, 
    fecha_nacimiento: string, 
    mascota: boolean, 
    trabajo : {
        nombre_empresa: string, 
        sector: string}
    } = {
    nombre_profesor: "Marcos",
    nombre_alumno: "Alexandru",
    edad: 20,
    pais: "Rumania",
    fecha_nacimiento: "01/06/2003",
    mascota: true,
    trabajo: {
        nombre_empresa: "GFT",
        sector: "Programador"
    }
};

console.log(DAW1)
console.log(DAW1.nombre_alumno)
console.log(DAW1.trabajo.nombre_empresa)
console.log(DAW1.trabajo.sector)

