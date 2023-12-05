const DEC = ["DEC", 120, 12]
const DIW = ["DIW", 96, 12]
const DWS = ["DWS", 180, 12]
const ING = ["ING", 96, 12]
const DAW = ["DAW", 156, 12]

DEC.push("Antonio Camarera")
DIW.push("Borja")
DWS.push("Toni")
ING.push("Julio")
DAW.push("Marcos")

console.log(DEC[0] + " " + DIW[0] + " " + DWS[0] + " " + ING[0] + " " + DAW[0])

let index = 3
console.log(
  "El profesor de DEC es: " +
    DEC[index] +
    "\n" +
    "El profesor de DIW es: " +
    DIW[index] +
    "\n" +
    "El profesor de DWS es: " +
    DWS[index] +
    "\n" +
    "El profesor de ING es: " +
    ING[index] +
    "\n" +
    "El profesor de DAW es: " +
    DAW[index] +
    "\n"
)