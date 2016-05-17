<?php
session_start();

if(!$_SESSION['estudiante'])
{

    header("Location: ../../../index.html");//redirect to login page to secure the welcome page without login access.
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Math School</title>
<link rel="shortcut icon" href="../../../img/varias/icono.ico">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="" />
<meta name="author" content="http://bootstraptaste.com" />
<!-- css -->
<link href="../../../css/bootstrap.min.css" rel="stylesheet" />
<link href="../../../css/fancybox/jquery.fancybox.css" rel="stylesheet">
<link href="../../../css/jcarousel.css" rel="stylesheet" />
<link href="../../../css/flexslider.css" rel="stylesheet" />
<link href="../../../css/style.css" rel="stylesheet" />


<!-- Theme skin -->
<link href="../../../skins/default.css" rel="stylesheet" />

<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

</head>
<body>
<div id="wrapper">
	<!-- start header -->
	<header>
        <div class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="../../index_estudiante.php"><span>M</span>ath School</a>
                </div>
                <div class="navbar-collapse collapse ">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="../../index_index_estudiante.php">Inicio</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false">Unidades<b class=" icon-angle-down"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="unidad1.php">Unidad 1</a></li>
                                <li><a href="../unidad2/unidad2.php">Unidad 2</a></li>	
                                <li><a href="../unidad3/unidad3.php">Unidad 3</a></li>	
                                <li><a href="../unidad4/unidad4.php">Unidad 4</a></li>
                            </ul>
                        </li>
                        <li><a href="../../contact.php">Contactenos</a></li>
                        <li class="divider-vertical"></li>
		                <li class="dropdown">
		                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
		                  	<span>Usuario: <?php echo $_SESSION['estudiante']; ?></span> <b class="caret"></b>
		                  </a>
		                  <ul class="dropdown-menu">
		                    <li><a href="#"><i class="icon-user"></i> Actualizar Información</a></li>
		                    <li><a href="../../cambiar_contrasena.php"><i class="icon-refresh"></i> Cambiar Contraseña</a></li>
		                    <li class="divider"></li>
		                    <li><a href="../../../logout.php"><i class="icon-off"></i> Cerrar Sesión</a></li>
		                  </ul>
		            	</li>
                    </ul>
                </div>
            </div>
        </div>
	</header>
	<!-- end header -->
	<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<ul class="breadcrumb">
					<li><a href="../../index_estudiante.php"><i class="fa fa-home"></i></a><i class="icon-angle-right"></i></li>
					<li><a href="../../unidades.php">Unidades</a><i class="icon-angle-right"></i></li>
					<li><a href="unidad1.php">Unidad 1</a><i class="icon-angle-right"></i></li>
					<li><a href="suma.php">Suma</a><i class="icon-angle-right"></i></li>
					<li><a href="teoria_suma.php">Definicion</a><i class="icon-angle-right"></i></li>
					<li class="active">Ejemplo 1</li>
				</ul>
			</div>
		</div>
	</div>
	</section>
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<section id="projects">
				<ul class="portfolio-categ filter">
				</ul>
				<div class="clearfix">
				</div>
				<div>
				<center><H1>EJEMPLO 1</H1></center>
				<justify><FONT FACE="arial" SIZE=5 COLOR=BLUE>La clase de Emilio organizó una campaña de recolección de papel usado. El mes pasado recogieron 15796 kilogramos de papel, y este mes han recogido 13877 kilogramos. ¿Cuantó papel han recogido en total?</FONT></justify>
				<center><img src="../../../img/unidades/reciclando.gif"></center><br>
				</div>
				<div id="small-dialog" class="mfp-hide">
				</div>		
				<div class="row">
					<section id="projects">
					<ul id="thumbs" class="portfolio">
						<!-- Item Project and Filter Name -->
						<li class="item-thumbs col-lg-3 design" data-id="id-0" data-type="paso1">
						<!-- Fancybox - Gallery Enabled - Title - Full Image -->
						<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Paso 1: Identificar de quien se habla" href="../../../img/unidades/de_quien_se_habla.jpg">
						<span class="overlay-img"></span>
						<span class="overlay-img-thumb font-icon-plus"></span>
						</a>
						<!-- Thumb Image and Description -->
						<img  src="../../../img/unidades/paso 1.jpg" alt=" Se habla de la clase de emilio " >

						
						</li>
						
						<!-- End Item Project -->
						<!-- Item Project and Filter Name -->
						<li class="item-thumbs col-lg-3 design" data-id="id-1" data-type="paso2">
						<!-- Fancybox - Gallery Enabled - Title - Full Image -->
						<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Paso 2: Identificar de que se habla" href="../../../img/unidades/de_que_se_habla.jpg">
						<span class="overlay-img"></span>
						<span class="overlay-img-thumb font-icon-plus"></span>
						</a>
						<!-- Thumb Image and Description -->
						<img src="../../../img/unidades/paso 2.jpg" alt=" Se habla de papel usado ">
						</li>
						<!-- End Item Project -->
						<!-- Item Project and Filter Name -->
						<li class="item-thumbs col-lg-3 photography" data-id="id-2" data-type="paso3">
						<!-- Fancybox - Gallery Enabled - Title - Full Image -->
						<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Paso 3: Identificar el problema" href="../../../img/unidades/identificar_problema.jpg">
						<span class="overlay-img"></span>
						<span class="overlay-img-thumb font-icon-plus"></span>
						</a>
						<!-- Thumb Image and Description -->
						<img  src="../../../img/unidades/paso 3.jpg" alt="Se necesita saber cuanto papel se ha recogido entre el mes pasado y este mes">
						</li>
						<li class="item-thumbs col-lg-3 photography" data-id="id-3" data-type="paso4">
						<!-- Fancybox - Gallery Enabled - Title - Full Image -->
						<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Paso 4: Identificar los sumandos" href="../../../img/unidades/sumandos.jpg">
						<span class="overlay-img"></span>
						<span class="overlay-img-thumb font-icon-plus"></span>
						</a>
						<!-- Thumb Image and Description -->
						<img  src="../../../img/unidades/paso 4.jpg" alt="Los sumandos son: 15796(papel usado recogido el mes pasado) y 13847(papel usado recogido el mes actual)">
						</li>
						<li class="item-thumbs col-lg-3 photography" data-id="id-4" data-type="paso5">
						<!-- Fancybox - Gallery Enabled - Title - Full Image -->
						<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Paso 5: Ordenar los numeros adecuadamente" href="../../../img/unidades/img1_ejemplo1_suma.jpg">
						<span class="overlay-img"></span>
						<span class="overlay-img-thumb font-icon-plus"></span>
						</a>
						<!-- Thumb Image and Description -->
						<img  src="../../../img/unidades/paso 5.jpg" alt="Ordenar los sumandos">
						</li>
						<li class="item-thumbs col-lg-3 photography" data-id="id-5" data-type="paso6">
						<!-- Fancybox - Gallery Enabled - Title - Full Image -->
						<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Paso 6: Sumar las unidades" href="../../../img/unidades/img2_ejemplo1_suma.jpg">
						<span class="overlay-img"></span>
						<span class="overlay-img-thumb font-icon-plus"></span>
						</a>
						<!-- Thumb Image and Description -->
						<img  src="../../../img/unidades/paso 6.jpg" alt="Sumamos de derecha a izquierda, tomamos las unidades de los sumandos, entonces 6 + 7 = 13, agregamos el 3 en el campo de resultado y llevamos 1">
						</li>
						<li class="item-thumbs col-lg-3 photography" data-id="id-6" data-type="paso7">
						<!-- Fancybox - Gallery Enabled - Title - Full Image -->
						<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Paso 7: Sumar las decenas" href="../../../img/unidades/img3_ejemplo1_suma.jpg">
						<span class="overlay-img"></span>
						<span class="overlay-img-thumb font-icon-plus"></span>
						</a>
						<!-- Thumb Image and Description -->
						<img  src="../../../img/unidades/paso 7.jpg" alt="tomamos las decenas de los sumandos, entonces 9 + 4 = 13 + 1 que llevabamos = 14 , agregamos el 4 en el campo de resultado y llevamos 1">
						</li>
						<li class="item-thumbs col-lg-3 photography" data-id="id-7" data-type="paso8">
						<!-- Fancybox - Gallery Enabled - Title - Full Image -->
						<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Paso 8: Sumar las centenas" href="../../../img/unidades/img4_ejemplo1_suma.jpg">
						<span class="overlay-img"></span>
						<span class="overlay-img-thumb font-icon-plus"></span>
						</a>
						<!-- Thumb Image and Description -->
						<img  src="../../../img/unidades/paso 8.jpg" alt="tomamos las centenas de los sumandos, entonces 7 + 8 = 15 + 1 que llevabamos = 16 , agregamos el 6 en el campo de resultado y llevamos 1">
						</li>
						<li class="item-thumbs col-lg-3 photography" data-id="id-8" data-type="paso9">
						<!-- Fancybox - Gallery Enabled - Title - Full Image -->
						<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Paso 9: Sumar las unidades de mil" href="../../../img/unidades/img5_ejemplo1_suma.jpg">
						<span class="overlay-img"></span>
						<span class="overlay-img-thumb font-icon-plus"></span>
						</a>
						<!-- Thumb Image and Description -->
						<img  src="../../../img/unidades/paso 9.jpg" alt="tomamos las unidades de mil de los sumandos, entonces 5 + 3 = 8 + 1 que llevabamos = 9 , agregamos el 9 en el campo de resultado y no llevamos nada">
						</li>
						<li class="item-thumbs col-lg-3 photography" data-id="id-9" data-type="paso10">
						<!-- Fancybox - Gallery Enabled - Title - Full Image -->
						<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Paso 10: Sumar las decenas de mil" href="../../../img/unidades/img6_ejemplo1_suma.jpg">
						<span class="overlay-img"></span>
						<span class="overlay-img-thumb font-icon-plus"></span>
						</a>
						<!-- Thumb Image and Description -->
						<img  src="../../../img/unidades/paso 10.jpg" alt="tomamos las decenas de mil de los sumandos, entonces 1 + 1 = 2 , agregamos el 2 en el campo de resultado">
						</li>
						<li class="item-thumbs col-lg-3 photography" data-id="id-10" data-type="paso11">
						<!-- Fancybox - Gallery Enabled - Title - Full Image -->
						<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Paso 11: Dar una respuesta" href="../../../img/unidades/respuesta.jpg">
						<span class="overlay-img"></span>
						<span class="overlay-img-thumb font-icon-plus"></span>
						</a>
						<!-- Thumb Image and Description -->
						<img  src="../../../img/unidades/paso 11.jpg" alt="En total han recogido 29643 kilogramos de papel">
						</li>
			 	</section>
				</div>
				</div>
				<div class="row">
					<section id="projects">
					<justify><FONT FACE="arial" SIZE=5 COLOR=red>VIDEOS:</FONT></justify>
						<table border="0" style="width:80%">
							<tr>
							<td><object width="425" height="350"><param name="movie" value="http://www.youtube.com/v/cCDG_kQan4w"></param><embed src="http://www.youtube.com/v/cCDG_kQan4w" type="application/x-shockwave-flash" width="425" height="350"></embed></object></td>
							<td><object width="425" height="350"><param name="movie" value="http://www.youtube.com/v/ZVIjH58vrFE"></param><embed src="http://www.youtube.com/v/ZVIjH58vrFE" type="application/x-shockwave-flash" width="425" height="350"></embed></object></td>
							</tr>
						</table>
					</section>
				</div>
			</div>
		</div>
	</div>
	</section>



	<footer>
	<div class="container">
		<div class="row">
			<div class="col-lg-3">
				<div class="widget">
					<h5 class="widgetheading">Localizacion</h5>
					<address>
					<p>Ins. Educ. Antonio Ricaurte -<br>Sede Urbana</p>
					<strong> Municipio</strong>
					 <p>Ricaurte-Cundinamarca</p>
					<p>
						<i class="icon-phone"></i> (+57) 300-8779481 - (+57) 315-6164359 <br>
						<i class="icon-envelope-alt"></i> mathschool15@gmail.com
					</p>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="widget">
					<h5 class="widgetheading">Paginas De Interes</h5>
					<ul class="link-list">
						<li><a href="http://www.educarchile.cl/ech/pro/app/detalle?ID=205651" target="_blank">Metodo Singapur</a></li>
						<li><a href="http://www.colombiaaprende.edu.co/html/home/1592/articles-313597_reda.pdf" target="_blank">Recursos Educativos Abiertos</a></li>
						<li><a href="http://www.mundoprimaria.com/juegos-matematicas/juegos-problemas-ejercicios-matematicas-3o-primaria/" target="_blank">Mundo Primaria</a></li>
						<li><a href="http://admathschool.260mb.net/" target="_blank">Informacion Teorica Math School</a></li>
						<li><a href="http://www.mintic.gov.co/portal/604/w3-channel.html" target="_blank">MinTic</a></li>
					</ul>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="widget">
					<h5 class="widgetheading">Redes Sociales</h5>

                        <ul class="list-inline">
                            
                        <a href="http://www.facebook.com/admathschool2015" target="_blank"><img alt="siguenos en facebook" height="32" src="http://2.bp.blogspot.com/-q_Tm1PpPfHo/UiXnJo5l-VI/AAAAAAAABzU/MKdrVYZjF0c/s1600/face.png" title="siguenos en facebook" width="32" /></a>


                        <a href="https://plus.google.com/u/0/103379742111303319433/about?hl=es" target="_blank"><img alt="siguenos en Google+" height="32" src="http://3.bp.blogspot.com/-fnL839vxuao/UiXnFfyN17I/AAAAAAAABxc/VvcXJlZ65Ko/s1600/Google%252B+alt.png" title="siguenos en Google+" width="32" /></a>

                        <a href="https://twitter.com/mathschool15" target="_blank"><img alt="siguenos en Twitter" height="32" src="http://3.bp.blogspot.com/-wlwaJJG-eOY/UiXnHS2jLsI/AAAAAAAAByQ/I2tLyZDLNL4/s1600/Twitter+NEW.png" title="siguenos en Twitter" width="32" /></a>


                        </ul>
				</div>
			</div>

	</div>
	<div id="sub-footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="copyright">
						<p>
							<span>&copy; Math School 2015 All right reserved. By Edgar Lozano - Stivel Matta </span>
						</p>
                        <!-- 
                            All links in the footer should remain intact. 
                            Licenseing information is available at: http://bootstraptaste.com/license/
                            You can buy this theme without footer links online at: http://bootstraptaste.com/buy/?theme=Moderna
                        -->
					</div>
				</div>
				
			</div>
		</div>
	</div>
	</footer>
</div>
<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>
<!-- javascript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="../../../js/jquery.js"></script>
<script src="../../../js/jquery.easing.1.3.js"></script>
<script src="../../../js/bootstrap.min.js"></script>
<script src="../../../js/jquery.fancybox.pack.js"></script>
<script src="../../../js/jquery.fancybox-media.js"></script>
<script src="../../../js/google-code-prettify/prettify.js"></script>
<script src="../../../js/portfolio/jquery.quicksand.js"></script>
<script src="../../../js/portfolio/setting.js"></script>
<script src="../../../js/jquery.flexslider.js"></script>
<script src="../../../js/animate.js"></script>
<script src="../../../js/custom.js"></script>
</body>
</html>