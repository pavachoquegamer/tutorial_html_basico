<?php
  include "../include/enlases_externos.php";
  $var_include_cabesera = $var_ruta_proyecto . "include\cabecera.php";
  $var_include_menu = $var_ruta_proyecto . "include\menu_principal.php";
?>
<link rel="stylesheet" type="text/css" href="../css/estilo_acordeon.css" />
<link rel="stylesheet" type="text/css" href="../css/estilo_01.css" />
<link rel="stylesheet" type="text/css" href="css/estilo_a_01.css" />
<?php
    $var_ruta_local=$_SERVER["DOCUMENT_ROOT"] ;


    include "../include/enlases_externos.php";
    echo $ruta_dir_01;
    
?>
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

<a href="#">
        <button class="tbn_a_01_encabesado">color_a</button>     
</a>
<a href="#">
        <button class="tbn_a_01_encabesado">color_b</button>     
</a>
<br>
<br>
<div  id="id_contenido_a_01">

<h4>colores</h4>
<br>


<table border="1">
  <tr>
    <th>Nombre</th>
    <th>&nbsp;Color&nbsp;</th>
    <th>HEX CODE</th>
    <th>RGB CODE</th>
    <th>Negro</th>
    <th>Blanco</th>
    <th>Amarillo</th>
    <th>Azul</th>
    <th>Rojo</th>
    <th>Gris</th>
    <th>Verde</th>
    <th>Purpura</th>
    <th>Naranja</th>
  </tr>
  <tr>
    <td>IndianRed</td>
    <td style="background-color:IndianRed";><p></p></td>
    <td>#CD5C5C</td>
    <td>rgb(205, 92, 92)</td>
    <td style="background-color:IndianRed; color:black;";><p>Negro</p></td>
    <td style="background-color:IndianRed; color:white;";><p>Blanco</p></td>
    <td style="background-color:IndianRed; color:yellow;";><p>Amarillo</p></td>
    <td style="background-color:IndianRed; color:blue;";><p>Azul</p></td>
    <td style="background-color:IndianRed; color:red;";><p>Rojo</p></td>
    <td style="background-color:IndianRed; color:grey;";><p>gris</p></td>
    <td style="background-color:IndianRed; color:green;";><p>verde</p></td>
    <td style="background-color:IndianRed; color:purple;";><p>purpura</p></td>
    <td style="background-color:IndianRed; color:orange;";><p>Naranja</p></td>
    
  </tr>
  </tr>
  <tr>
    <td>LightCoral</td>
    <td style="background-color:LightCoral";></td>
    <td>#F08080</td>
    <td>rgb(240, 128, 128)</td>
    <td style="background-color:LightCoral; color:black;";><p>Negro</p></td>
    <td style="background-color:LightCoral; color:white;";><p>Blanco</p></td>
    <td style="background-color:LightCoral; color:yellow;";><p>Amarillo</p></td>
    <td style="background-color:LightCoral; color:blue;";><p>Azul</p></td>
    <td style="background-color:LightCoral; color:red;";><p>Rojo</p></td>
    <td style="background-color:LightCoral; color:grey;";><p>gris</p></td>
    <td style="background-color:LightCoral; color:green;";><p>verde</p></td>
    <td style="background-color:LightCoral; color:purple;";><p>purpura</p></td>
    <td style="background-color:LightCoral; color:orange;";><p>Naranja</p></td>
  </tr>
  <tr>
    <td>Salmon</td>
    <td style="background-color:Salmon";></td>
    <td>#FA8072</td>
    <td>rgb(250, 128, 114)</td>
    <td style="background-color:Salmon; color:black;";><p>Negro</p></td>
    <td style="background-color:Salmon; color:white;";><p>Blanco</p></td>
    <td style="background-color:Salmon; color:yellow;";><p>Amarillo</p></td>
    <td style="background-color:Salmon; color:blue;";><p>Azul</p></td>
    <td style="background-color:Salmon; color:red;";><p>Rojo</p></td>
    <td style="background-color:Salmon; color:grey;";><p>gris</p></td>
    <td style="background-color:Salmon; color:green;";><p>verde</p></td>
    <td style="background-color:Salmon; color:purple;";><p>purpura</p></td>
    <td style="background-color:Salmon; color:orange;";><p>Naranja</p></td>
  </tr>
  <tr>
    <td>DarkSalmon</td>
    <td style="background-color:DarkSalmon";></td>
    <td>#E9967A</td>
    <td>rgb(233, 150, 122)</td>
    <td style="background-color:DarkSalmon; color:black;";><p>Negro</p></td>
    <td style="background-color:DarkSalmon; color:white;";><p>Blanco</p></td>
    <td style="background-color:DarkSalmon; color:yellow;";><p>Amarillo</p></td>
    <td style="background-color:DarkSalmon; color:blue;";><p>Azul</p></td>
    <td style="background-color:DarkSalmon; color:red;";><p>Rojo</p></td>
    <td style="background-color:DarkSalmon; color:grey;";><p>gris</p></td>
    <td style="background-color:DarkSalmon; color:green;";><p>verde</p></td>
    <td style="background-color:DarkSalmon; color:purple;";><p>purpura</p></td>
    <td style="background-color:DarkSalmon; color:orange;";><p>Naranja</p></td>
  </tr>
  
  <tr>
    <td>LightSalmon</td>
    <td style="background-color:LightSalmon";></td>
    <td>#FFA07A</td>
    <td>rgb(255, 160, 122)</td>
    <td style="background-color:LightSalmon; color:black;";><p>Negro</p></td>
    <td style="background-color:LightSalmon; color:white;";><p>Blanco</p></td>
    <td style="background-color:LightSalmon; color:yellow;";><p>Amarillo</p></td>
    <td style="background-color:LightSalmon; color:blue;";><p>Azul</p></td>
    <td style="background-color:LightSalmon; color:red;";><p>Rojo</p></td>
    <td style="background-color:LightSalmon; color:grey;";><p>gris</p></td>
    <td style="background-color:LightSalmon; color:green;";><p>verde</p></td>
    <td style="background-color:LightSalmon; color:purple;";><p>purpura</p></td>
    <td style="background-color:LightSalmon; color:orange;";><p>Naranja</p></td>
  </tr>
  <tr>
    <td>Crimson</td>
    <td style="background-color:Crimson";></td>
    <td>#DC143C</td>
    <td>rgb(220, 20, 60)</td>
    <td style="background-color:Crimson; color:black;";><p>Negro</p></td>
    <td style="background-color:Crimson; color:white;";><p>Blanco</p></td>
    <td style="background-color:Crimson; color:yellow;";><p>Amarillo</p></td>
    <td style="background-color:Crimson; color:blue;";><p>Azul</p></td>
    <td style="background-color:Crimson; color:red;";><p>Rojo</p></td>
    <td style="background-color:Crimson; color:grey;";><p>gris</p></td>
    <td style="background-color:Crimson; color:green;";><p>verde</p></td>
    <td style="background-color:Crimson; color:purple;";><p>purpura</p></td>
    <td style="background-color:Crimson; color:orange;";><p>Naranja</p></td>
  </tr>
  <tr>
    <td>Red</td>
    <td style="background-color:Red";></td>
    <td>#FF0000</td>
    <td>rgb(255, 0, 0)</td>
    <td style="background-color:Red; color:black;";><p>Negro</p></td>
    <td style="background-color:Red; color:white;";><p>Blanco</p></td>
    <td style="background-color:Red; color:yellow;";><p>Amarillo</p></td>
    <td style="background-color:Red; color:blue;";><p>Azul</p></td>
    <td style="background-color:Red; color:red;";><p>Rojo</p></td>
    <td style="background-color:Red; color:grey;";><p>gris</p></td>
    <td style="background-color:Red; color:green;";><p>verde</p></td>
    <td style="background-color:Red; color:purple;";><p>purpura</p></td>
    <td style="background-color:Red; color:orange;";><p>Naranja</p></td>
  </tr>
  <tr>
    <td>FireBrick</td>
    <td style="background-color:FireBrick";></td>
    <td>#B22222</td>
    <td>rgb(178, 34, 34)</td>
    <td style="background-color:FireBrick; color:black;";><p>Negro</p></td>
    <td style="background-color:FireBrick; color:white;";><p>Blanco</p></td>
    <td style="background-color:FireBrick; color:yellow;";><p>Amarillo</p></td>
    <td style="background-color:FireBrick; color:blue;";><p>Azul</p></td>
    <td style="background-color:FireBrick; color:red;";><p>Rojo</p></td>
    <td style="background-color:FireBrick; color:grey;";><p>gris</p></td>
    <td style="background-color:FireBrick; color:green;";><p>verde</p></td>
    <td style="background-color:FireBrick; color:purple;";><p>purpura</p></td>
    <td style="background-color:FireBrick; color:orange;";><p>Naranja</p></td>
  </tr>
  <tr>
    <td>DarkRed</td>
    <td style="background-color:DarkRed";></td>
    <td>#FFC0CB</td>
    <td>rgb(255, 192, 203)</td>
    <td style="background-color:DarkRed; color:black;";><p>Negro</p></td>
    <td style="background-color:DarkRed; color:white;";><p>Blanco</p></td>
    <td style="background-color:DarkRed; color:yellow;";><p>Amarillo</p></td>
    <td style="background-color:DarkRed; color:blue;";><p>Azul</p></td>
    <td style="background-color:DarkRed; color:red;";><p>Rojo</p></td>
    <td style="background-color:DarkRed; color:grey;";><p>gris</p></td>
    <td style="background-color:DarkRed; color:green;";><p>verde</p></td>
    <td style="background-color:DarkRed; color:purple;";><p>purpura</p></td>
    <td style="background-color:DarkRed; color:orange;";><p>Naranja</p></td>
</tr>
<tr>
    <td>Pink</td>
    <td style="background-color:Pink";></td>
    <td>#FFC0CB</td>
    <td>rgb(255, 192, 203)</td>
    <td style="background-color:Pink; color:black;";><p>Negro</p></td>
    <td style="background-color:Pink; color:white;";><p>Blanco</p></td>
    <td style="background-color:Pink; color:yellow;";><p>Amarillo</p></td>
    <td style="background-color:Pink; color:blue;";><p>Azul</p></td>
    <td style="background-color:Pink; color:red;";><p>Rojo</p></td>
    <td style="background-color:Pink; color:grey;";><p>gris</p></td>
    <td style="background-color:Pink; color:green;";><p>verde</p></td>
    <td style="background-color:Pink; color:purple;";><p>purpura</p></td>
    <td style="background-color:Pink; color:orange;";><p>Naranja</p></td>
  </tr>
  <tr>
    <td>LightPink</td>
    <td style="background-color:LightPink";></td>
    <td>#FFB6C1</td>
    <td>rgb(255, 182, 193)</td>
    <td style="background-color:LightPink; color:black;";><p>Negro</p></td>
    <td style="background-color:LightPink; color:white;";><p>Blanco</p></td>
    <td style="background-color:LightPink; color:yellow;";><p>Amarillo</p></td>
    <td style="background-color:LightPink; color:blue;";><p>Azul</p></td>
    <td style="background-color:LightPink; color:red;";><p>Rojo</p></td>
    <td style="background-color:LightPink; color:grey;";><p>gris</p></td>
    <td style="background-color:LightPink; color:green;";><p>verde</p></td>
    <td style="background-color:LightPink; color:purple;";><p>purpura</p></td>
    <td style="background-color:LightPink; color:orange;";><p>Naranja</p></td>
  </tr>
  
  <tr>
    <td>HotPink</td>
    <td style="background-color:HotPink";></td>
    <td>#FF69B4</td>
    <td>rgb(255, 105, 180)</td>
    <td style="background-color:HotPink; color:black;";><p>Negro</p></td>
    <td style="background-color:HotPink; color:white;";><p>Blanco</p></td>
    <td style="background-color:HotPink; color:yellow;";><p>Amarillo</p></td>
    <td style="background-color:HotPink; color:blue;";><p>Azul</p></td>
    <td style="background-color:HotPink; color:red;";><p>Rojo</p></td>
    <td style="background-color:HotPink; color:grey;";><p>gris</p></td>
    <td style="background-color:HotPink; color:green;";><p>verde</p></td>
    <td style="background-color:HotPink; color:purple;";><p>purpura</p></td>
    <td style="background-color:HotPink; color:orange;";><p>Naranja</p></td>
  </tr>
  <tr>
    <td>DeepPink</td>
    <td style="background-color:DeepPink";></td>
    <td>#FF1493</td>
    <td>rgb(255, 20, 147)</td>
    <td style="background-color:DeepPink; color:black;";><p>Negro</p></td>
    <td style="background-color:DeepPink; color:white;";><p>Blanco</p></td>
    <td style="background-color:DeepPink; color:yellow;";><p>Amarillo</p></td>
    <td style="background-color:DeepPink; color:blue;";><p>Azul</p></td>
    <td style="background-color:DeepPink; color:red;";><p>Rojo</p></td>
    <td style="background-color:DeepPink; color:grey;";><p>gris</p></td>
    <td style="background-color:DeepPink; color:green;";><p>verde</p></td>
    <td style="background-color:DeepPink; color:purple;";><p>purpura</p></td>
    <td style="background-color:DeepPink; color:orange;";><p>Naranja</p></td>
  </tr>
  <tr>
    <td>MediumVioletRed</td>
    <td style="background-color:MediumVioletRed";></td>
    <td>#C71585</td>
    <td>rgb(199, 21, 133) </td>
    <td style="background-color:MediumVioletRed; color:black;";><p>Negro</p></td>
    <td style="background-color:MediumVioletRed; color:white;";><p>Blanco</p></td>
    <td style="background-color:MediumVioletRed; color:yellow;";><p>Amarillo</p></td>
    <td style="background-color:MediumVioletRed; color:blue;";><p>Azul</p></td>
    <td style="background-color:MediumVioletRed; color:red;";><p>Rojo</p></td>
    <td style="background-color:MediumVioletRed; color:grey;";><p>gris</p></td>
    <td style="background-color:MediumVioletRed; color:green;";><p>verde</p></td>
    <td style="background-color:MediumVioletRed; color:purple;";><p>purpura</p></td>
    <td style="background-color:MediumVioletRed; color:orange;";><p>Naranja</p></td>
  </tr>
  <tr>
    <td>PaleVioletRed</td>
    <td style="background-color:PaleVioletRed";></td>
    <td>#DB7093</td>
    <td>rgb(219, 112, 147)</td>
    <td style="background-color:PaleVioletRed; color:black;";><p>Negro</p></td>
    <td style="background-color:PaleVioletRed; color:white;";><p>Blanco</p></td>
    <td style="background-color:PaleVioletRed; color:yellow;";><p>Amarillo</p></td>
    <td style="background-color:PaleVioletRed; color:blue;";><p>Azul</p></td>
    <td style="background-color:PaleVioletRed; color:red;";><p>Rojo</p></td>
    <td style="background-color:PaleVioletRed; color:grey;";><p>gris</p></td>
    <td style="background-color:PaleVioletRed; color:green;";><p>verde</p></td>
    <td style="background-color:PaleVioletRed; color:purple;";><p>purpura</p></td>
    <td style="background-color:PaleVioletRed; color:orange;";><p>Naranja</p></td>
  </tr>

  <tr>
    <td>LightSalmon</td>
    <td style="background-color:LightSalmon";></td>
    <td>#FFA07A</td>
    <td>rgb(255, 160, 122)</td>
    <td style="background-color:LightSalmon; color:black;";><p>Negro</p></td>
    <td style="background-color:LightSalmon; color:white;";><p>Blanco</p></td>
    <td style="background-color:LightSalmon; color:yellow;";><p>Amarillo</p></td>
    <td style="background-color:LightSalmon; color:blue;";><p>Azul</p></td>
    <td style="background-color:LightSalmon; color:red;";><p>Rojo</p></td>
    <td style="background-color:LightSalmon; color:grey;";><p>gris</p></td>
    <td style="background-color:LightSalmon; color:green;";><p>verde</p></td>
    <td style="background-color:LightSalmon; color:purple;";><p>purpura</p></td>
    <td style="background-color:LightSalmon; color:orange;";><p>Naranja</p></td>
  </tr>
  <tr>
    <td>Coral</td>
    <td style="background-color:Coral";></td>
    <td>#FF7F50</td>
    <td>rgb(255, 127, 80)</td>
    <td style="background-color:Coral; color:black;";><p>Negro</p></td>
    <td style="background-color:Coral; color:white;";><p>Blanco</p></td>
    <td style="background-color:Coral; color:yellow;";><p>Amarillo</p></td>
    <td style="background-color:Coral; color:blue;";><p>Azul</p></td>
    <td style="background-color:Coral; color:red;";><p>Rojo</p></td>
    <td style="background-color:Coral; color:grey;";><p>gris</p></td>
    <td style="background-color:Coral; color:green;";><p>verde</p></td>
    <td style="background-color:Coral; color:purple;";><p>purpura</p></td>
    <td style="background-color:Coral; color:orange;";><p>Naranja</p></td>
  </tr>
  <tr>
    <td>Tomato</td>
    <td style="background-color:Tomato";></td>
    <td>#FF6347</td>
    <td>rgb(255, 99, 71)</td>
    <td style="background-color:Tomato; color:black;";><p>Negro</p></td>
    <td style="background-color:Tomato; color:white;";><p>Blanco</p></td>
    <td style="background-color:Tomato; color:yellow;";><p>Amarillo</p></td>
    <td style="background-color:Tomato; color:blue;";><p>Azul</p></td>
    <td style="background-color:Tomato; color:red;";><p>Rojo</p></td>
    <td style="background-color:Tomato; color:grey;";><p>gris</p></td>
    <td style="background-color:Tomato; color:green;";><p>verde</p></td>
    <td style="background-color:Tomato; color:purple;";><p>purpura</p></td>
    <td style="background-color:Tomato; color:orange;";><p>Naranja</p></td>
  </tr>
  <tr>
    <td>OrangeRed</td>
    <td style="background-color:OrangeRed";></td>
    <td>#FF4500</td>
    <td>rgb(255, 69, 0)</td>
    <td style="background-color:OrangeRed; color:black;";><p>Negro</p></td>
    <td style="background-color:OrangeRed; color:white;";><p>Blanco</p></td>
    <td style="background-color:OrangeRed; color:yellow;";><p>Amarillo</p></td>
    <td style="background-color:OrangeRed; color:blue;";><p>Azul</p></td>
    <td style="background-color:OrangeRed; color:red;";><p>Rojo</p></td>
    <td style="background-color:OrangeRed; color:grey;";><p>gris</p></td>
    <td style="background-color:OrangeRed; color:green;";><p>verde</p></td>
    <td style="background-color:OrangeRed; color:purple;";><p>purpura</p></td>
    <td style="background-color:OrangeRed; color:orange;";><p>Naranja</p></td>
  </tr>
  <tr>
    <td>DarkOrange</td>
    <td style="background-color:DarkOrange";></td>
    <td>#FF8C00</td>
    <td>rgb(255, 140, 0)</td>
    <td style="background-color:DarkOrange; color:black;";><p>Negro</p></td>
    <td style="background-color:DarkOrange; color:white;";><p>Blanco</p></td>
    <td style="background-color:DarkOrange; color:yellow;";><p>Amarillo</p></td>
    <td style="background-color:DarkOrange; color:blue;";><p>Azul</p></td>
    <td style="background-color:DarkOrange; color:red;";><p>Rojo</p></td>
    <td style="background-color:DarkOrange; color:grey;";><p>gris</p></td>
    <td style="background-color:DarkOrange; color:green;";><p>verde</p></td>
    <td style="background-color:DarkOrange; color:purple;";><p>purpura</p></td>
    <td style="background-color:DarkOrange; color:orange;";><p>Naranja</p></td>
  </tr>
  <tr>
    <td>Orange</td>
    <td style="background-color:Orange";></td>
    <td>#FFA500</td>
    <td>rgb(255, 165, 0)</td>
    <td style="background-color:Orange; color:black;";><p>Negro</p></td>
    <td style="background-color:Orange; color:white;";><p>Blanco</p></td>
    <td style="background-color:Orange; color:yellow;";><p>Amarillo</p></td>
    <td style="background-color:Orange; color:blue;";><p>Azul</p></td>
    <td style="background-color:Orange; color:red;";><p>Rojo</p></td>
    <td style="background-color:Orange; color:grey;";><p>gris</p></td>
    <td style="background-color:Orange; color:green;";><p>verde</p></td>
    <td style="background-color:Orange; color:purple;";><p>purpura</p></td>
    <td style="background-color:Orange; color:orange;";><p>Naranja</p></td>
  </tr>
  <tr>
    <td>Gold</td>
    <td style="background-color:Gold";></td>
    <td>#FFD700</td>
    <td>rgb(255, 215, 0)</td>
    <td style="background-color:Gold; color:black;";><p>Negro</p></td>
    <td style="background-color:Gold; color:white;";><p>Blanco</p></td>
    <td style="background-color:Gold; color:yellow;";><p>Amarillo</p></td>
    <td style="background-color:Gold; color:blue;";><p>Azul</p></td>
    <td style="background-color:Gold; color:red;";><p>Rojo</p></td>
    <td style="background-color:Gold; color:grey;";><p>gris</p></td>
    <td style="background-color:Gold; color:green;";><p>verde</p></td>
    <td style="background-color:Gold; color:purple;";><p>purpura</p></td>
    <td style="background-color:Gold; color:orange;";><p>Naranja</p></td>
  </tr>
  <tr>
    <td>Yellow</td>
    <td style="background-color:Yellow";></td>
    <td>#FFFF00</td>
    <td>rgb(255, 255, 0)</td>
    <td style="background-color:Yellow; color:black;";><p>Negro</p></td>
    <td style="background-color:Yellow; color:white;";><p>Blanco</p></td>
    <td style="background-color:Yellow; color:yellow;";><p>Amarillo</p></td>
    <td style="background-color:Yellow; color:blue;";><p>Azul</p></td>
    <td style="background-color:Yellow; color:red;";><p>Rojo</p></td>
    <td style="background-color:Yellow; color:grey;";><p>gris</p></td>
    <td style="background-color:Yellow; color:green;";><p>verde</p></td>
    <td style="background-color:Yellow; color:purple;";><p>purpura</p></td>
    <td style="background-color:Yellow; color:orange;";><p>Naranja</p></td>
  </tr>
  <tr>
    <td>LightYellow</td>
    <td style="background-color:LightYellow";></td>
    <td>#FFFFE0</td>
    <td>rgb(255, 255, 224)</td>
    <td style="background-color:LightYellow; color:black;";><p>Negro</p></td>
    <td style="background-color:LightYellow; color:white;";><p>Blanco</p></td>
    <td style="background-color:LightYellow; color:Yellow;";><p>Amarillo</p></td>
    <td style="background-color:LightYellow; color:blue;";><p>Azul</p></td>
    <td style="background-color:LightYellow; color:red;";><p>Rojo</p></td>
    <td style="background-color:LightYellow; color:grey;";><p>gris</p></td>
    <td style="background-color:LightYellow; color:green;";><p>verde</p></td>
    <td style="background-color:LightYellow; color:purple;";><p>purpura</p></td>
    <td style="background-color:LightYellow; color:orange;";><p>Naranja</p></td>
  </tr>
  <tr>
    <td>LemonChiffon</td>
    <td style="background-color:LemonChiffon";></td>
    <td>#FFFACD</td>
    <td>rgb(255, 250, 205)</td>
    <td style="background-color:LemonChiffon; color:black;";><p>Negro</p></td>
    <td style="background-color:LemonChiffon; color:white;";><p>Blanco</p></td>
    <td style="background-color:LemonChiffon; color:Yellow;";><p>Amarillo</p></td>
    <td style="background-color:LemonChiffon; color:blue;";><p>Azul</p></td>
    <td style="background-color:LemonChiffon; color:red;";><p>Rojo</p></td>
    <td style="background-color:LemonChiffon; color:grey;";><p>gris</p></td>
    <td style="background-color:LemonChiffon; color:green;";><p>verde</p></td>
    <td style="background-color:LemonChiffon; color:purple;";><p>purpura</p></td>
    <td style="background-color:LemonChiffon; color:orange;";><p>Naranja</p></td>
  </tr>
  <tr>
    <td>LightGoldenrodYellow</td>
    <td style="background-color:LightGoldenrodYellow";></td>
    <td>#FAFAD2</td>
    <td>rgb(250, 250, 210)</td>
    <td style="background-color:LightGoldenrodYellow; color:black;";><p>Negro</p></td>
    <td style="background-color:LightGoldenrodYellow; color:white;";><p>Blanco</p></td>
    <td style="background-color:LightGoldenrodYellow; color:Yellow;";><p>Amarillo</p></td>
    <td style="background-color:LightGoldenrodYellow; color:blue;";><p>Azul</p></td>
    <td style="background-color:LightGoldenrodYellow; color:red;";><p>Rojo</p></td>
    <td style="background-color:LightGoldenrodYellow; color:grey;";><p>gris</p></td>
    <td style="background-color:LightGoldenrodYellow; color:green;";><p>verde</p></td>
    <td style="background-color:LightGoldenrodYellow; color:purple;";><p>purpura</p></td>
    <td style="background-color:LightGoldenrodYellow; color:orange;";><p>Naranja</p></td>
  </tr>
  <tr>
    <td>PapayaWhip</td>
    <td style="background-color:PapayaWhip";></td>
    <td>#FFEFD5</td>
    <td>rgb(255, 239, 213)</td>
    <td style="background-color:PapayaWhip; color:black;";><p>Negro</p></td>
    <td style="background-color:PapayaWhip; color:white;";><p>Blanco</p></td>
    <td style="background-color:PapayaWhip; color:Yellow;";><p>Amarillo</p></td>
    <td style="background-color:PapayaWhip; color:blue;";><p>Azul</p></td>
    <td style="background-color:PapayaWhip; color:red;";><p>Rojo</p></td>
    <td style="background-color:PapayaWhip; color:grey;";><p>gris</p></td>
    <td style="background-color:PapayaWhip; color:green;";><p>verde</p></td>
    <td style="background-color:PapayaWhip; color:purple;";><p>purpura</p></td>
    <td style="background-color:PapayaWhip; color:orange;";><p>Naranja</p></td>
  </tr>
  <tr>
    <td>Moccasin</td>
    <td style="background-color:Moccasin";></td>
    <td>#FFE4B5</td>
    <td>rgb(255, 228, 181)</td>
    <td style="background-color:Moccasin; color:black;";><p>Negro</p></td>
    <td style="background-color:Moccasin; color:white;";><p>Blanco</p></td>
    <td style="background-color:Moccasin; color:Yellow;";><p>Amarillo</p></td>
    <td style="background-color:Moccasin; color:blue;";><p>Azul</p></td>
    <td style="background-color:Moccasin; color:red;";><p>Rojo</p></td>
    <td style="background-color:Moccasin; color:grey;";><p>gris</p></td>
    <td style="background-color:Moccasin; color:green;";><p>verde</p></td>
    <td style="background-color:Moccasin; color:purple;";><p>purpura</p></td>
    <td style="background-color:Moccasin; color:orange;";><p>Naranja</p></td>
  </tr>
  <tr>
    <td>PeachPuff</td>
    <td style="background-color:PeachPuff";></td>
    <td>#FFDAB9</td>
    <td>rgb(255, 218, 185)</td>
    <td style="background-color:PeachPuff; color:black;";><p>Negro</p></td>
    <td style="background-color:PeachPuff; color:white;";><p>Blanco</p></td>
    <td style="background-color:PeachPuff; color:Yellow;";><p>Amarillo</p></td>
    <td style="background-color:PeachPuff; color:blue;";><p>Azul</p></td>
    <td style="background-color:PeachPuff; color:red;";><p>Rojo</p></td>
    <td style="background-color:PeachPuff; color:grey;";><p>gris</p></td>
    <td style="background-color:PeachPuff; color:green;";><p>verde</p></td>
    <td style="background-color:PeachPuff; color:purple;";><p>purpura</p></td>
    <td style="background-color:PeachPuff; color:orange;";><p>Naranja</p></td>
  </tr>
  <tr>
    <td>PaleGoldenrod</td>
    <td style="background-color:PaleGoldenrod";></td>
    <td>#EEE8AA</td>
    <td>rgb(238, 232, 170)</td>
    <td style="background-color:PaleGoldenrod; color:black;";><p>Negro</p></td>
    <td style="background-color:PaleGoldenrod; color:white;";><p>Blanco</p></td>
    <td style="background-color:PaleGoldenrod; color:Yellow;";><p>Amarillo</p></td>
    <td style="background-color:PaleGoldenrod; color:blue;";><p>Azul</p></td>
    <td style="background-color:PaleGoldenrod; color:red;";><p>Rojo</p></td>
    <td style="background-color:PaleGoldenrod; color:grey;";><p>gris</p></td>
    <td style="background-color:PaleGoldenrod; color:green;";><p>verde</p></td>
    <td style="background-color:PaleGoldenrod; color:purple;";><p>purpura</p></td>
    <td style="background-color:PaleGoldenrod; color:orange;";><p>Naranja</p></td>
  <tr>  
  <tr>
    <td>Khaki</td>
    <td style="background-color:Khaki";></td>
    <td>#F0E68C</td>
    <td>rgb(240, 230, 140)</td>
    <td style="background-color:Khaki; color:black;";><p>Negro</p></td>
    <td style="background-color:Khaki; color:white;";><p>Blanco</p></td>
    <td style="background-color:Khaki; color:Yellow;";><p>Amarillo</p></td>
    <td style="background-color:Khaki; color:blue;";><p>Azul</p></td>
    <td style="background-color:Khaki; color:red;";><p>Rojo</p></td>
    <td style="background-color:Khaki; color:grey;";><p>gris</p></td>
    <td style="background-color:Khaki; color:green;";><p>verde</p></td>
    <td style="background-color:Khaki; color:purple;";><p>purpura</p></td>
    <td style="background-color:Khaki; color:orange;";><p>Naranja</p></td>
  </tr>
  <tr>
    <td>DarkKhaki</td>
    <td style="background-color:DarkKhaki";></td>
    <td>#BDB76B</td>
    <td>rgb(189, 183, 107)</td>
    <td style="background-color:DarkKhaki; color:black;";><p>Negro</p></td>
    <td style="background-color:DarkKhaki; color:white;";><p>Blanco</p></td>
    <td style="background-color:DarkKhaki; color:Yellow;";><p>Amarillo</p></td>
    <td style="background-color:DarkKhaki; color:blue;";><p>Azul</p></td>
    <td style="background-color:DarkKhaki; color:red;";><p>Rojo</p></td>
    <td style="background-color:DarkKhaki; color:grey;";><p>gris</p></td>
    <td style="background-color:DarkKhaki; color:green;";><p>verde</p></td>
    <td style="background-color:DarkKhaki; color:purple;";><p>purpura</p></td>
    <td style="background-color:DarkKhaki; color:orange;";><p>Naranja</p></td>
  </tr>
  <tr>
    <td>Lavender</td>
    <td style="background-color:Lavender";></td>
    <td>#E6E6FA</td>
    <td>rgb(230, 230, 250)</td>
    <td style="background-color:Lavender; color:black;";><p>Negro</p></td>
    <td style="background-color:Lavender; color:white;";><p>Blanco</p></td>
    <td style="background-color:Lavender; color:Yellow;";><p>Amarillo</p></td>
    <td style="background-color:Lavender; color:blue;";><p>Azul</p></td>
    <td style="background-color:Lavender; color:red;";><p>Rojo</p></td>
    <td style="background-color:Lavender; color:grey;";><p>gris</p></td>
    <td style="background-color:Lavender; color:green;";><p>verde</p></td>
    <td style="background-color:Lavender; color:purple;";><p>purpura</p></td>
    <td style="background-color:Lavender; color:orange;";><p>Naranja</p></td>
  </tr>
  <tr>
    <td>Thistle</td>
    <td style="background-color:Thistle";></td>
    <td>#D8BFD8</td>
    <td>rgb(216, 191, 216)</td>
    <td style="background-color:Thistle; color:black;";><p>Negro</p></td>
    <td style="background-color:Thistle; color:white;";><p>Blanco</p></td>
    <td style="background-color:Thistle; color:Yellow;";><p>Amarillo</p></td>
    <td style="background-color:Thistle; color:blue;";><p>Azul</p></td>
    <td style="background-color:Thistle; color:red;";><p>Rojo</p></td>
    <td style="background-color:Thistle; color:grey;";><p>gris</p></td>
    <td style="background-color:Thistle; color:green;";><p>verde</p></td>
    <td style="background-color:Thistle; color:purple;";><p>purpura</p></td>
    <td style="background-color:Thistle; color:orange;";><p>Naranja</p></td>
  </tr>
  <tr>
    <td>Plum</td>
    <td style="background-color:Plum";></td>
    <td>#D8BFD8</td>
    <td>rgb(216, 191, 216)</td>
    <td style="background-color:Plum; color:black;";><p>Negro</p></td>
    <td style="background-color:Plum; color:white;";><p>Blanco</p></td>
    <td style="background-color:Plum; color:Yellow;";><p>Amarillo</p></td>
    <td style="background-color:Plum; color:blue;";><p>Azul</p></td>
    <td style="background-color:Plum; color:red;";><p>Rojo</p></td>
    <td style="background-color:Plum; color:grey;";><p>gris</p></td>
    <td style="background-color:Plum; color:green;";><p>verde</p></td>
    <td style="background-color:Plum; color:purple;";><p>purpura</p></td>
    <td style="background-color:Plum; color:orange;";><p>Naranja</p></td>
  </tr>
  <tr>
    <td>Violet</td>
    <td style="background-color:Violet";></td>
    <td>#EE82EE</td>
    <td>rgb(238, 130, 238)</td>
    <td style="background-color:Violet; color:black;";><p>Negro</p></td>
    <td style="background-color:Violet; color:white;";><p>Blanco</p></td>
    <td style="background-color:Violet; color:Yellow;";><p>Amarillo</p></td>
    <td style="background-color:Violet; color:blue;";><p>Azul</p></td>
    <td style="background-color:Violet; color:red;";><p>Rojo</p></td>
    <td style="background-color:Violet; color:grey;";><p>gris</p></td>
    <td style="background-color:Violet; color:green;";><p>verde</p></td>
    <td style="background-color:Violet; color:purple;";><p>purpura</p></td>
    <td style="background-color:Violet; color:orange;";><p>Naranja</p></td>
  </tr>
  <tr>
    <td>Orchid</td>
    <td style="background-color:Orchid";></td>
    <td>#DA70D6</td>
    <td>rgb(218, 112, 214)</td>
    <td style="background-color:Orchid; color:black;";><p>Negro</p></td>
    <td style="background-color:Orchid; color:white;";><p>Blanco</p></td>
    <td style="background-color:Orchid; color:Yellow;";><p>Amarillo</p></td>
    <td style="background-color:Orchid; color:blue;";><p>Azul</p></td>
    <td style="background-color:Orchid; color:red;";><p>Rojo</p></td>
    <td style="background-color:Orchid; color:grey;";><p>gris</p></td>
    <td style="background-color:Orchid; color:green;";><p>verde</p></td>
    <td style="background-color:Orchid; color:purple;";><p>purpura</p></td>
    <td style="background-color:Orchid; color:orange;";><p>Naranja</p></td>
  </tr>
  <tr>
  <td>Magenta</td>
<td style="Magenta";></td>
<td>#FF00FF</td>
<td>rgb(255, 0, 255)</td>
<td style="background-color:Orchid; color:Magenta;";><p>Negro</p></td>
<td style="background-color:Orchid; color:Magenta;";><p>Blanco</p></td>
<td style="background-color:Orchid; color:Magenta;";><p>Amarillo</p></td>
<td style="background-color:Orchid; color:Magenta;";><p>Azul</p></td>
<td style="background-color:Orchid; color:Magenta;";><p>Rojo</p></td>
<td style="background-color:Orchid; color:Magenta;";><p>gris</p></td>
<td style="background-color:Orchid; color:Magenta;";><p>verde</p></td>
<td style="background-color:Orchid; color:Magenta;";><p>purpura</p></td>
<td style="background-color:Orchid; color:Magenta;";><p>Naranja</p></td>
  </tr>

</table>
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
