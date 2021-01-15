function currencyCalculator(valNum) {
if (calcular.dolares.value <= 0) 
  window.alert("introduzca un monto mayor a 0");
  else{
document.getElementById("bolivar").value = (valNum*75182.92).toFixed(2);
document.getElementById("peso_colombia").value = (valNum*3389.50).toFixed(2);
document.getElementById("sol").value = (valNum*3.38).toFixed(2);
document.getElementById("peso_chile").value = (valNum*790.90).toFixed(2);
document.getElementById("peso_mexico").value = (valNum*18.64).toFixed(2);
document.getElementById("peso_argentina").value = (valNum*61.23).toFixed(2);
  }
}
