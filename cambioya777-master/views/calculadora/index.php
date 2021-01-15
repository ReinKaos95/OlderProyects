<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Conversor de Divisas - CambioYa777</title>
</head>
<body>
	<?php
require 'views/header.php';	?>
   <h1 align="center">Conversor de Divisas</h1>
<marquee>Bienvenido al conversor de divisas</marquee>
<center>
<div class="contenedor">
      <a href="#" class="cabecera c-activa" onclick="mostrarPestana(0);">Compra</a>
      <div class="pestana p-activa">
      <form name="converter">
  <fieldset>
    <center>
      <label>
        Compra en Bolivares
      </label>
      <input type="number" name="bolivares" required min="75182" minlength="5">
     <input type="button" value="convertir" id="button" onclick="currencyConverter(converter.bolivares.value)">
     <br>
      <label>
        <br>
      Dolares
      </label>
      <input id="dollar" disabled>
      <br>
      <label>
      Paypal
      </label>
      <input id="paypal" disabled>
      <br>
      <label>
      Zelle
      </label>
        <input id="zelle" disabled>
      <br>
      <label>
        Skrill
      </label>
      <input id="skrill" disabled>
      <br>
      <label>
        Western Union
      </label>
      <input id="western_union" disabled>
      <br>
      <label>
        AirTM
      </label>
      <input id="airtm" disabled>
      <br>
      <input type="reset" value="reiniciar">
    </center>
  </fieldset>
</form>
      </div>
      <a href="#" class="cabecera" onclick="mostrarPestana(1);">Venta</a>
      <div class="pestana">
       <form name="vendor">
  <fieldset>
    <center>
      <label>
        Venta en Bolivares
      </label>
      <input type="number" name="bolivares" required min="1">
     <input type="button" value="convertir" id="button" onclick="currencyVendor(vendor.bolivares.value)">
     <br>
      <label>
        <br>
      Dolares
      </label>
      <input id="dollar_venta" disabled>
      <br>
      <label>
      Paypal
      </label>
      <input id="paypal_venta" disabled>
      <br>
      <label>
      Zelle
      </label>
        <input id="zelle_venta" disabled>
      <br>
      <label>
        Skrill
      </label>
      <input id="skrill_venta" disabled>
      <br>
      <label>
        Western Union
      </label>
      <input id="western_union_venta" disabled>
      <br>
      <label>
        AirTM
      </label>
      <input id="airtm_venta" disabled>
      <br>
      <input type="reset" value="reiniciar">
    </center>
  </fieldset>
</form>
      </div>
    <a href="#" class="cabecera" onclick="mostrarPestana(2);">Calculadora</a>
      <div class="pestana">
            <form name="calcular">
  <fieldset>
    <center>
      <label>
        Divisas en Dolares
      </label>
      <input type="number" name="dolares" required min="1">
     <input type="button" value="Calcular" id="button" onclick="currencyCalculator(calcular.dolares.value)">
     <br>
      <label>
        <br>
      Venezuela
      </label>
      <input id="bolivar" disabled>
      <br>
      <label>
      Colombia
      </label>
      <input id="peso_colombia" disabled>
      <br>
      <label>
      Peru
      </label>
        <input id="sol" disabled>
      <br>
      <label>
        Chile
      </label>
      <input id="peso_chile" disabled>
      <br>
      <label>
       Mexico
      </label>
      <input id="peso_mexico" disabled>
      <br>
      <label>
        Argentina
      </label>
      <input id="peso_argentina" disabled>
      <br>
      <input type="reset" value="reiniciar">
    </center>
  </fieldset>
</form>
      </div>
      </center>
      	<?php require 'views/footer.php';	?>
<script src="<?php echo constant('URL'); ?>public/js/calcular.js"></script>
<script src="<?php echo constant('URL'); ?>public/js/venta.js"></script>
<script src="<?php echo constant('URL'); ?>public/js/mundial.js"></script>
<script src="<?php echo constant('URL'); ?>public/js/pestana.js"></script>
</body>
</html>