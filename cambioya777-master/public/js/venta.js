function currencyVendor(valNum) {
if (vendor.bolivares.value <= 0) 
  window.alert("introduzca un monto mayor a 0");
  else{
document.getElementById("dollar_venta").value = (valNum*75182.92).toFixed(2);
document.getElementById("paypal_venta").value = (valNum*63900.30).toFixed(2);
document.getElementById("zelle_venta").value = (valNum*72540.12).toFixed(2);
document.getElementById("skrill_venta").value = (valNum*70510.32).toFixed(2);
document.getElementById("western_union_venta").value = (valNum*71500.04).toFixed(2);
document.getElementById("airtm_venta").value = (valNum*65048.54).toFixed(2);
  }
}
