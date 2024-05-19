<?php
  $a = "***************";
  $ruta_dir_01 =  "../index.php"; 
  $ruta_dir_02 =  "pagina_basico.php";  
  $ruta_dir_03_a  =  "colores_basico.php";
  /* ************************ A ***************************/
  $enlace_aa_01="pagina_basico.php";
  $enlace_aa_02="ejemplo_basico.php";
  $enlace_aa_03="pagina_completo.php";
  $enlace_aa_04="ejemplo_completo.php";



/* ************************ Rutas Principales ***************************/
$var_ruta_x0 = $_SERVER["SCRIPT_NAME"] ;
$var_ruta_x1 =substr($var_ruta_x0,1,100);
$var_ruta_2 = strpos($var_ruta_x1,"/");
$var_ruta_3 = substr($var_ruta_x1,0,$var_ruta_2);
$var_ruta_DOCUMENT_ROOT = $_SERVER["DOCUMENT_ROOT"] ;
$var_ruta_proyecto = $var_ruta_DOCUMENT_ROOT . "/" . $var_ruta_3 . "/";
?>