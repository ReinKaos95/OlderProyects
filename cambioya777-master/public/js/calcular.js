function currencyConverter(valNum) {
if (converter.bolivares.value <= 0) 
	window.alert("introduzca un monto mayor a 0");
	else{
document.getElementById("dollar").value = (valNum/75182.92).toFixed(2);
document.getElementById("paypal").value = (valNum/63900.00).toFixed(2);
document.getElementById("zelle").value = (valNum/72540.12).toFixed(2);
document.getElementById("skrill").value = (valNum/65000.00).toFixed(2);
document.getElementById("western_union").value = (valNum/71500.04).toFixed(2);
document.getElementById("airtm").value = (valNum/65533.98).toFixed(2);
	}
}
