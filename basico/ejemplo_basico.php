
<?php
$var_include_cabesera= $_SERVER["DOCUMENT_ROOT"] . '/formulario_02/include/cabecera.php'; 
$var_include_menu=$_SERVER["DOCUMENT_ROOT"] . '/formulario_02/include/menu_principal.php';
?>
<link rel="stylesheet" type="text/css" href="../css/estilo_acordeon.css" />
<link rel="stylesheet" type="text/css" href="../css/estilo_01.css" />
<link rel="stylesheet" type="text/css" href="css/estilo_a_01.css" />
<?php
    $var_ruta_local=$_SERVER["DOCUMENT_ROOT"] ;
    /*echo "Pagina_basica:__" . $var_ruta_local . "\n";
    echo "Pagina_FILE:__" . __FILE__ . "\n";
    echo "Pagina_DIR:__" . __DIR__ . "\n";
    echo "Pagina_realpath:__" . realpath('../') . "\n"; */
    $ruta_dir_01 =  "../index.php";
    $ruta_dir_02 =  "pagina_basico.php";
    $ruta_dir_03_a  =  "colores_basico.php";
   
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

<a href="pagina_basico.php">
        <button class="tbn_a_01_encabesado">Codigo</button>     
</a>
<a href="ejemplo_basico.php">
        <button class="tbn_a_01_encabesado">Visualizacion</button>     
</a>
<br>
<br>
<div  id="id_contenido_a_01">


<!doctype html>
<html>
<head>
<meta charset='tf-8' />
<title>El título de mi página</title>
<link
href='https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300|Sonsie+One'
rel='stylesheet'
type='text/css' />
<link rel='stylesheet' href='style.css' />
</head>
<body>
<header>
<h1>Encabezado</h1>
</header>
<nav>
<ul>
<li><a href='#'>Inicio</a></li>
<li><a href='#'>Nuestro equipo</a></li>
<li><a href='#'>Proyectos</a></li>
<li><a href='#'>Contacto</a></li>
</ul>
<form>
<input type='search' name='q' placeholder='Buscar' />
<input type='submit' value='¡Vamos!' />
</form>
</nav>
<main>
<article>
<h2>Título del artículo</h2>
<p>
Lorem ipsum dolor sit amet, consectetur adipisicing elit. Donec a diam lectus. Set sit amet ipsum mauris. Maecenas congue ligula as quam viverra nec consectetur ant hendrerit. Donec et mollis dolor. Praesent et diam eget libero egestas mattis sit amet vitae augue. Nam tincidunt congue enim, ut porta lorem lacinia consectetur.
<p>
<h3>Subsección</h3>
<p>
Donec ut librero sed accu vehicula ultricies a non tortor. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aenean ut gravida lorem. Ut turpis felis, pulvinar a semper sed, adipiscing id dolor.
</p>
<p>
Pelientesque auctor nisi id magna consequat sagittis. Curabitur dapibus, enim sit amet elit pharetra tincidunt feugiat nist imperdiet. Ut convallis libero in urna ultrices accumsan. Donec sed odio eros.
</p>
<h3>Otra subsección</h3>
<p>
Donec viverra mi quis quam pulvinar at malesuada arcu rhoncus. Cum soclis natoque penatibus et manis dis parturient montes, nascetur ridiculus mus. In rutrum accumsan ultricies. Mauris vitae nisi at sem facilisis semper ac in est.
</p>
<p>
Vivamus fermentum semper porta. Nunc diam velit, adipscing ut tristique vitae sagittis vel odio. Maecenas convallis ullamcorper ultricied. Curabitur ornare, ligula semper consectetur sagittis, nisi diam iaculis velit, is fringille sem nunc vet mi.
</p>
</article>
<aside>
<h2>Relacionado</h2>
<ul>
<li><a href='#'>Oh, me gusta estar junto al mar</a></li>
<li><a href='#'>Oh, me gusta estar junto al mar</a></li>
<li><a href='#'>Aunque en el norte de Inglaterra</a></li>
<li><a href='#'>Nunca deja de llover</a></li>
<li><a href='#'>Oh, bueno...</a></li>
</ul>
</aside>
</main>
<footer>
<p>
©Copyright 2050 de nadie. Todos los derechos revertidos.
</p>
</footer>
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
