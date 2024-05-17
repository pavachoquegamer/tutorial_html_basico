
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
    include "../include/enlases_externos.php";
   
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

<a href="<?php echo $enlace_aa_01 ?>">
        <button class="tbn_a_01_encabesado">Codigo</button>     
</a>
<a href="<?php echo $enlace_aa_02 ?>">
        <button class="tbn_a_01_encabesado">Visualizacion</button>     
</a>
<br>
<br>
<div  id="id_contenido_a_01">


 <?php 

echo htmlspecialchars("<!doctype html>");
echo  "<br>";
echo htmlspecialchars("<html>");
echo  "<br>";
echo htmlspecialchars("<head>");
echo  "<br>";
echo htmlspecialchars("<meta charset='tf-8' />");
echo  "<br>";
echo htmlspecialchars("<title>El título de mi página</title>");
echo  "<br>";
echo htmlspecialchars("<link");
echo  "<br>";
echo htmlspecialchars("href='https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300|Sonsie+One'");
echo  "<br>";
echo htmlspecialchars("rel='stylesheet'");
echo  "<br>";
echo htmlspecialchars("type='text/css' />");
echo  "<br>";
echo htmlspecialchars("<link rel='stylesheet' href='style.css' />");
echo  "<br>";
echo htmlspecialchars("</head>");

echo  "<br>";
echo htmlspecialchars("<body>");
echo  "<br>";
echo htmlspecialchars("<header>");
echo  "<br>";
echo htmlspecialchars("<h1>Encabezado</h1>");
echo  "<br>";
echo htmlspecialchars("</header>");
echo  "<br>";
echo htmlspecialchars("<nav>");
echo  "<br>";
echo htmlspecialchars("<ul>");
echo  "<br>";
echo htmlspecialchars("<li><a href='#'>Inicio</a></li>");
echo  "<br>";
echo htmlspecialchars("<li><a href='#'>Nuestro equipo</a></li>");
echo  "<br>";
echo htmlspecialchars("<li><a href='#'>Proyectos</a></li>");
echo  "<br>";
echo htmlspecialchars("<li><a href='#'>Contacto</a></li>");

echo  "<br>";
echo htmlspecialchars("</ul>");
echo  "<br>";
echo htmlspecialchars("<form>");
echo  "<br>";
echo htmlspecialchars("<input type='search' name='q' placeholder='Buscar' />");
echo  "<br>";
echo htmlspecialchars("<input type='submit' value='¡Vamos!' />");
echo  "<br>";
echo htmlspecialchars("</form>");
echo  "<br>";
echo htmlspecialchars("</nav>");
echo  "<br>";
echo htmlspecialchars("<main>");
echo  "<br>";
echo htmlspecialchars("<article>");
echo  "<br>";
echo htmlspecialchars("<h2>Título del artículo</h2>");
echo  "<br>";
echo htmlspecialchars("<p>");
echo  "<br>";
echo  "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Donec a diam
lectus. Set sit amet ipsum mauris. Maecenas congue ligula as quam
viverra nec consectetur ant hendrerit. Donec et mollis dolor. Praesent
et diam eget libero egestas mattis sit amet vitae augue. Nam tincidunt
congue enim, ut porta lorem lacinia consectetur.";
echo  "<br>";
echo htmlspecialchars("<p>");
echo  "<br>";
echo htmlspecialchars("<h3>Subsección</h3>");
echo  "<br>";
echo htmlspecialchars("<p>");
echo  "<br>";
echo "Donec ut librero sed accu vehicula ultricies a non tortor. Lorem ipsum
dolor sit amet, consectetur adipisicing elit. Aenean ut gravida lorem.
Ut turpis felis, pulvinar a semper sed, adipiscing id dolor.";

echo  "<br>";
echo htmlspecialchars("</p>");
echo  "<br>";
echo htmlspecialchars("<p>");
echo  "<br>";
echo " Pelientesque auctor nisi id magna consequat sagittis. Curabitur
dapibus, enim sit amet elit pharetra tincidunt feugiat nist imperdiet.
Ut convallis libero in urna ultrices accumsan. Donec sed odio eros.";
echo  "<br>";
echo htmlspecialchars("</p>");
echo  "<br>";
echo htmlspecialchars("<h3>Otra subsección</h3>");
echo  "<br>";
echo htmlspecialchars("<p>");
echo  "<br>";
echo " Donec viverra mi quis quam pulvinar at malesuada arcu rhoncus. Cum
soclis natoque penatibus et manis dis parturient montes, nascetur
ridiculus mus. In rutrum accumsan ultricies. Mauris vitae nisi at sem
facilisis semper ac in est.";
echo  "<br>";
echo htmlspecialchars("</p>");
echo  "<br>";
echo htmlspecialchars("<p>");
echo  "<br>";
echo "Vivamus fermentum semper porta. Nunc diam velit, adipscing ut
tristique vitae sagittis vel odio. Maecenas convallis ullamcorper
ultricied. Curabitur ornare, ligula semper consectetur sagittis, nisi
diam iaculis velit, is fringille sem nunc vet mi.";
echo  "<br>";
echo htmlspecialchars("</p>");
echo  "<br>";
echo htmlspecialchars("</article>");
echo  "<br>";
echo htmlspecialchars("<aside>");
echo  "<br>";
echo htmlspecialchars("<h2>Relacionado</h2>");
echo  "<br>";
echo htmlspecialchars("<ul>");
echo  "<br>";
echo htmlspecialchars("<li><a href='#'>Oh, me gusta estar junto al mar</a></li>");
echo  "<br>";
echo htmlspecialchars("<li><a href='#'>Oh, me gusta estar junto al mar</a></li>");
echo  "<br>";
echo htmlspecialchars("<li><a href='#'>Aunque en el norte de Inglaterra</a></li>");
echo  "<br>";
echo htmlspecialchars("<li><a href='#'>Nunca deja de llover</a></li>");
echo  "<br>";
echo htmlspecialchars("<li><a href='#'>Oh, bueno...</a></li>");
echo  "<br>";
echo htmlspecialchars("</ul>");
echo  "<br>";
echo htmlspecialchars("</aside>");
echo  "<br>";
echo htmlspecialchars("</main>");
echo  "<br>";
echo htmlspecialchars("<footer>");
echo  "<br>";
echo htmlspecialchars("<p>");
echo  "<br>";
echo "©Copyright 2050 de nadie. Todos los derechos revertidos.";
echo  "<br>";
echo htmlspecialchars("</p>");
echo  "<br>";
echo htmlspecialchars("</footer>");
echo  "<br>";
echo htmlspecialchars("</body>");
echo  "<br>";
echo htmlspecialchars("</html>");




 /*
for ($i = 1; $i < 100; $i++){
echo "variable i" . $i . "\n";
echo "chr__:" . chr($i) . "\n";

}
*/
?>

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
