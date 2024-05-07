<!DOCTYPE html>
<html>
<head>
<?php

$var_include_cabesera= $_SERVER["DOCUMENT_ROOT"] . '/formulario_02/include/cabecera.php'; 
$var_include_menu=$_SERVER["DOCUMENT_ROOT"] . '/formulario_02/include/menu_principal.php';
$ruta_dir_01 =  "index.php";
$ruta_dir_02 =  "basico/pagina_basico.php";
$ruta_dir_03_a  =  "basico/colores_basico.php";

?>

<link rel="stylesheet" type="text/css" href="css/estilo_acordeon.css" />
<link rel="stylesheet" type="text/css" href="css/estilo_01.css" />

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
    <p id="id_parrafo_titulo_01">
    <img src="img/logo_php.png" width="100%" height="100%"  />
    </p>
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