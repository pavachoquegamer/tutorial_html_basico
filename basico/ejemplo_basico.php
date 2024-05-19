<?php
  include "../include/enlases_externos.php";
  $var_include_cabesera = $var_ruta_proyecto . "include\cabecera.php";
  $var_include_menu = $var_ruta_proyecto . "include\menu_principal.php";
?>
<link rel="stylesheet" type="text/css" href="../css/estilo_acordeon.css" />
<link rel="stylesheet" type="text/css" href="../css/estilo_01.css" />
<link rel="stylesheet" type="text/css" href="css/estilo_a_01.css" />
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

<a href="<?php echo $enlace_aa_01 ?>">
        <button class="tbn_a_01_encabesado">Codigo basico</button>     
</a>
<a href="<?php echo $enlace_aa_02 ?>">
        <button class="tbn_a_01_encabesado">Vista basica</button>     
</a>
<a href="<?php echo $enlace_aa_03 ?>">
        <button class="tbn_a_01_encabesado">Codigo completo</button>     
</a>
<a href="<?php echo $enlace_aa_04 ?>">
        <button class="tbn_a_01_encabesado">Vista completo</button>     
</a>
<br>
<br>
<div  id="id_contenido_a_01">
<html>
  <head>
    <title>Ejemplo de atributo Href</title>
  </head>
  <body>
    <h1>Titulo html</h1>
    <p>
      cuerpo del html
    </p>
  </body>
</html>

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
