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
<link href="../../../../../../css/bootstrap.min.css" rel="stylesheet" />
<link href="../../../../../../css/fancybox/jquery.fancybox.css" rel="stylesheet">
<link href="../../../../../../css/jcarousel.css" rel="stylesheet" />
<link href="../../../../../../css/flexslider.css" rel="stylesheet" />
<link href="../../../../../../css/style.css" rel="stylesheet" />


<!-- Theme skin -->
<link href="../../../../../../skins/default.css" rel="stylesheet" />

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
                        <li class="active"><a href="index_docente.php"></a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false">Unidades<b class=" icon-angle-down"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="unidad1.php">Unidad 1</a></li>
                                <li><a href="estudiantes.php">Unidad 2</a></li>	
                                <li><a href="estadisticas.php">Unidad 3</a></li>	
                                <li><a href="estadisticas.php">Unidad 4</a></li>
                            </ul>
                        </li>
                        <li><a href="../../contact.php">Contactenos</a></li>
                        <li><a>Bienvenido(a): <b><?php echo $_SESSION['estudiante']; ?> </b></a></li>
                        <li><a href="../../../logout.php">Salir</a></li>

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
					<li><a href="../../../../../index_estudiante.php"><i class="fa fa-home"></i></a><i class="icon-angle-right"></i></li>
					<li><a href="../../../../../unidades.php">Unidades</a><i class="icon-angle-right"></i></li>
					<li><a href="../../../../../unidad1.php">Unidad 1</a><i class="icon-angle-right"></i></li>
					<li><a href="../../../../unidad1/suma.php">Suma</a><i class="icon-angle-right"></i></li>
					<li><a href="../../../../unidad1/actividades.php">Actividades</a><i class="icon-angle-right"></i></li>
					<li class="active">Actividad 1</li>
				</ul>
			</div>
		</div>
	</div>
	</section>
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<html lang="es">
<head><meta charset="utf-8" /><title></title>
<!--[if lt IE 9]> <script src="ardoraFiles/js/html5shiv.js"></script> <![endif]-->
<link type="text/css" href="ardoraFiles/css/normalize.css" rel="stylesheet" />
<link type="text/css" href="mat_resources/css/ardoraRel.css" rel="stylesheet" />
<script language="javascript" type="text/javascript" src="ardoraFiles/js/jquery-2.0.0.min.js"></script>
<script language="javascript" type="text/javascript" src="ardoraFiles/js/jquery-ui.min.js"></script>
<script src="ardoraFiles/js/jquery.ui.core.min.js"></script>
<script src="ardoraFiles/js/jquery.ui.widget.min.js"></script>
<script src="ardoraFiles/js/jquery.ui.mouse.min.js"></script>
<script src="ardoraFiles/js/jquery.ui.touch-punch.min.js"></script>
<script language="javascript" type="text/javascript" src="mat_resources/js/ardoraRelCFG.js"></script>
<script language="javascript" type="text/javascript" src="mat_resources/js/ardoraScorm.js"></script>
<script language="javascript" type="text/javascript" src="mat_resources/js/ardoraRel.js"></script>
<script language="javascript" type="text/javascript" src="mat_resources/js/ardoraCanvasDraw.js"></script>
<script language="javascript" type="text/javascript" src="mat_resources/js/ardoraTab.js"></script>
<script language="javascript" type="text/javascript" src="mat_resources/js/ardoraPosts.js"></script>
</head>
<body onLoad="loadPage()" onbeforeunload="unloadPage()" onUnload="unloadPage()">
<div id="ardoraMain">
<audio id="audioFelicitacion">
<source src="mat_resources/media/Aplausos___Efectos_de_Sonido_1_.mp3" type="audio/mp3">
</audio>
<audio id="audioTempo">
<source src="mat_resources/media/trompeta_perdedor_6_.mp3" type="audio/mp3">
</audio>
<audio id="audioIntentos">
<source src="mat_resources/media/trompeta_perdedor_6_.mp3" type="audio/mp3">
</audio>
<audio id="audioErro">
<source src="mat_resources/media/trompeta_perdedor_6_.mp3" type="audio/mp3">
</audio>
<div id="ardoraEnu"><br>
</span></div>
  <div id="ardoraAct">
<div id="tableL"><div class="cell"><div id="buttonUpLeft" class="butt"><canvas id="bUpLCanvas" width="260px" height="40px"></canvas></div>
<div id="contenL"></div><div id="buttonDownLeft" class="butt"><canvas id="bDownLCanvas" width="260px" height="40px"></canvas></div></div></div>
<div id="tableR"><div class="cell"><div id="buttonUpRight" class="butt"><canvas id="bUpRCanvas" width="260px" height="40px"></canvas></div>
<div id="contenR"></div><div id="buttonDownRight" class="butt"><canvas id="bDownRCanvas" width="260px" height="40px"></canvas></div></div></div>
<canvas id="ardoraActCanvas" width="2px" height="2px"></canvas>
  </div>
<div id="ardoraTab">
  <canvas id="ardoraTabCanvas" width="70" height="235"></canvas>
  <div id="buttonOk"><canvas id="buttonOkCanvas" width="70" height="70"></canvas></div>
</div></div>
<div id="ardoraAlumSCORM"><p></p></div>
</body></html>
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

<!DOCTYPE html>
<!--Created by Ardora - www.webardora.net-->
<!--ArdoraRel-->
<!--bajo licencia Attribution-NonCommercial-NoDerivatives 4.0 International (CC BY-NC-ND 4.0)
para otros usos contacte con el autor-->

</body>
</html>