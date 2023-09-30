/*
La empresa 2DAWCheste necesita implementar un control de excepciones para comprobar los commits erróneos y correctos que se envían a producción durante la semana. El número máximo de commits será de 10, pudiéndose incrementar en un futuro.

    La probabilidad de error de alguno de los commits que realicen los trabajador es del 30% (pista: Utilizar la función Math()).
    El programa debe de sacar por pantalla los commits totales enviados, los erróneos y los correctos.
    El control de excepciones será muy importante para que cuando haya un commit erróneo la producción no se detenga, ya que puede afectar negativamente a la economía de la empresa.
    A disfrutar!
*/
let contTotal = 1;
let contCorrectos = 0;
let contErrones = 0;

while (contTotal <= 10) {
  let numRandom = Math.random() * (10 - 1) + 1;
  let porcentaje = (numRandom / 10) * 100;
  document.write(texto(porcentaje) + `<br>`);
  if (contTotal == 10) {
    document.write(resultadoFinal());
  }
  contTotal++;
}

function texto(porcentaje) {
  try {
    if (porcentaje > 30) {
      contCorrectos++;
      return `Enviado commit ${contTotal}`
    } else {
      throw new `Enviado commit ${contTotal}`
    }
  } catch (error) {
    contErrones++
    document.write(error.message)
  }
}

function resultadoFinal() {
  return (
    `<br>Total commits enviados: ${contTotal}<br>` +
    `Commits correctos: ${contCorrectos}<br>` +
    `Commits erroneos: ${contErrones}`
  );
}
