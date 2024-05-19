<!DOCTYPE html>
<html>
<head>
<?php

$var_include_cabesera= dirname(__FILE__) . '/include/cabecera.php'; 
$var_include_menu= dirname(__FILE__) . '/include/menu_principal.php';
$ruta_dir_01 =  "index.php";
$ruta_dir_02 =  "basico/pagina_basico.php";
$ruta_dir_03_a  =  "basico/colores_basico.php";
$enlace_aa_01="basico/pagina_basico.php";
$enlace_aa_02="basico/ejemplo_basico.php";
$enlace_aa_03="basico/pagina_completo.php";
$enlace_aa_04="basico/ejemplo_completo.php";
echo $ruta_dir_01;
?>

<link rel="stylesheet" type="text/css" href="css/estilo_acordeon.css" />
<link rel="stylesheet" type="text/css" href="css/estilo_01.css" />
<link rel="stylesheet" type="text/css" href="css/index_css.css"  />
</head>

<body bgcolor="#185F8B">

<!-- CABECERA -->
<?php
require_once($var_include_cabesera);
?>

<!-- MENU -->
<?php 
require_once($var_include_menu);
?>
    <!-- CAJA PRINCIPAL -->
<div id="id_caja_principal">

<div class="relative">
 
<div class="relative_a_01">
		<img class="escudo_html5" src="img/html5.svg" alt="html5.svg">
	</div>
	<div class="relative_a_02">
		<img class="escudo_css" src="img/css.svg" alt="css.svg">
	</div>
	<div class="relative_a_03">
		<img class="escudo_js" src="img/js.svg" alt="js.svg">
	</div>
  </div>
</div>

<!-- ========================== Java ========================== -->
<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });
}
</script> 
</body>
</html>