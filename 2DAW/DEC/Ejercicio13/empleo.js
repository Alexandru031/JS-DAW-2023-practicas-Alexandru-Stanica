/*
Ejer13. Puntuable. Empresa informática (CON CLASES)

Somos los jefes de una empresa de informática y necesitamos crear la siquiente especificación de requisitos:

    1. Tenemos un EMPLEADO que debe tener un NOMBRE (por defecto será una cadena vacía). Además, cada empeado tiene que estar
    adscrito a un DEPARTAMENTO, cuyo pondremos como valor por defecto "Informatico"

    2. También tenemos al director ejecutivo que estará basado en EMPLEADO pero que se añadira la propiedad de "Informes"
    (el valor por defecto será un array vacío)

    3. El TRABAJADOR también heredará de EMPLEADO, incluyendo la propiedad de "Proyectos" (el valor por defecto también será un array vacío)

    4. Un INGENIERO también estará basado en el TRABAJADOR pero, como es normal, se le añade la propiedad de "LenguajeProgramacion"
    (por defecto será una cadena vacía) y sobrescribirá cada vez la propiedad con el valor de "Ingeniería".

    Crear los objetos descritos anteriormento y realiza pruebas de intanciar,mostrar informes (en el caso de que tengan) y todo
    lo que creas necesario para comprobar el correcto funcionamiento del programa
*/

class Empleado {
  constructor(nombre) {
    this.nombre = nombre || ``;
    this.departamento = `Informatico`;
  }
}

class Director extends Empleado {
  constructor(nombre) {
    super();
    this.nombre = nombre
    this.informes = [];
  }

  setInformes(texto) {
    return this.informes.push(`Informe` + texto);
  }

  getInforme() {
    return this.informes
  }

  getNombreDir() {
    return this.nombre
  }
}

class Trabajador extends Empleado {
  constructor(nombre) {
    super();
    this.nombre = nombre
    this.proyectos = [];
  }
}

class Ingeniero extends Trabajador {
  constructor(nombre) {
    super();
    this.nombre = nombre
    this.LenguajeProgramacion = ``;
  }

  setLenguajeProg(leng) {
    return (this.LenguajeProgramacion = leng);
  }

  getIngenieros() {
    return (
      `El ingeniero ` +
      this.nombre +
      ` usa el lenguaje de programación ` +
      this.LenguajeProgramacion +
      ` en el departamento Ingeniería`
    );
  }
}

/* Crea los directores */
let dr1 = new Director(`Pepito`);
let dr2 = new Director(`Manolo`);
let dr3 = new Director(`Hortencia`);

/* Añade información en los directores */
dr2.setInformes(`producción enero`);
dr2.setInformes(`producción febrero`);
dr2.setInformes(`producción marzo`);
dr3.setInformes(`despido becario`);

/* Crea los ingenieros+ */
let ing1 = new Ingeniero("Juan");
let ing2 = new Ingeniero("Carmen");
let ing3 = new Ingeniero("Pablo");
let ing4 = new Ingeniero("Emilio");

/* Añade info en los lenguajes de programación */
ing1.setLenguajeProg(`Java`);
ing2.setLenguajeProg(`C++`);
ing3.setLenguajeProg(`JS`);
ing4.setLenguajeProg(`HTML5`);

const directores = [];
const ingenieros = [];

/* Añadé los directores */
directores.push(dr1);
directores.push(dr2);
directores.push(dr3);

/* Añade los ingenieros */
ingenieros.push(ing1);
ingenieros.push(ing2);
ingenieros.push(ing3);
ingenieros.push(ing4);

// RESULTADOS
        /* Mostrar los directores y sus informes */
        document.write("________******** NOMBRES DIRECTORES ******** ________" + `<br>`)
        for (let key1 in directores) {
            document.write("Director --> " + directores[key1].getNombreDir() + `<br>`)
            if (!directores[key1].getInforme().length == 0) {
                document.write("________******** INFORMES de: " + directores[key1].getNombreDir() + ` : <br>`)
                for (let key2 in directores[key1].informes) {
                    document.write('------------------********* ' + directores[key1].informes[key2] + `<br>`)
                }
            }
        }

        /* Mostrar los ingenieros y sus informes */
        document.write(`<br>` + "________******** INGENIEROS ********________" + `<br>`)
        for (let key in ingenieros) {
            document.write('------------------********* ' + ingenieros[key].getIngenieros() + `<br>`)
        }