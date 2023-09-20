const ARRAY =  ["Desarrollo de Aplicaciones Web",12345678, "Administración de Sistemas Informáticos en Red",87654321, "Desarrollo de Aplicaciones Multiplataforma", 12348765]

const OTRO_ARRAY = [];

OTRO_ARRAY.push(ARRAY.find((el, idx) => typeof el === "string" && idx === 0))
OTRO_ARRAY.push(ARRAY.find((el, idx) => typeof el === "number" && idx === 1))

console.log(OTRO_ARRAY)