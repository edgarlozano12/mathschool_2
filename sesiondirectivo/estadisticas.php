<?php
session_start();

if(!$_SESSION['directivo'])
{

    header("Location: ../index.html");//redirect to login page to secure the welcome page without login access.
}

$user_name=$_SESSION['directivo']
?>

<?php
  $dbcon=mysqli_connect("localhost","root","");
  mysqli_select_db($dbcon,"mathschool");

  $check_docu_query="select * from directivos WHERE usuario='$user_name'";
  $run_query=mysqli_query($dbcon,$check_docu_query);

  if(mysqli_num_rows($run_query)>0)
  {
    while($row=mysqli_fetch_array($run_query)){
      $url_foto=$row['foto'];
    }
      //echo "<script>alert(' $url_foto -- !')</script>";

  }
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Math School</title>
<link rel="shortcut icon" href="../img/varias/icono.ico">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="" />
<meta name="author" content="http://bootstraptaste.com" />
<!-- css -->
<link href="../css/bootstrap.min.css" rel="stylesheet" />
<link href="../css/fancybox/jquery.fancybox.css" rel="stylesheet">
<link href="../css/jcarousel.css" rel="stylesheet" />
<link href="../css/flexslider.css" rel="stylesheet" />
<link href="../css/style.css" rel="stylesheet" />


<!-- Theme skin -->
<link href="../skins/default.css" rel="stylesheet" />

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
                    <a class="navbar-brand" href="index_directivo.php"><span>M</span>ath School</a>
                </div>
                <div class="navbar-collapse collapse ">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="index_directivo.php">Inicio</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false">Opciones<b class=" icon-angle-down"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="resultados.php">Resultados</a></li>
                                <li><a href="estudiantes.php">Estudiantes</a></li>
                                <li><a href="estadisticas.php">Estadisticas</a></li>
                            </ul>
                        </li>
                        <li><a href="contact.php">Contactenos</a></li>
                        <li class="divider-vertical"></li>
                        <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <b class="fa fa-user"></b><span><?php echo $_SESSION['directivo']; ?></span>
                          </a>
                          <ul class="dropdown-menu">
                            <li><a href="perfil.php"><i class=""></i> Perfil</a></li>
                            <li><a href="#"><i class="icon-refresh"></i> Cambiar Contraseña</a></li>
                            <li class="divider"></li>
                            <li><a href="../logout.php"><i class="icon-off"></i> Cerrar Sesión</a></li>
                          </ul>
                        </li>
                        <li><a href="perfil.php"><img  id="fotografia" class="img-rounded" src='<?php echo "../img/images/" . $url_foto ?>' style="width:32px;height:32px"></a></li>
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
					<li><a href="index_directivo.php"><i class="fa fa-home"></i></a><i class="icon-angle-right"></i></li>
					<li><a href="opciones.php">Opciones</a><i class="icon-angle-right"></i></li>
					<li class="active">Estadisticas</li>
				</ul>
			</div>
		</div>
	</div>
	</section>
	  <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">

                    <h2 class="section-heading">Multiplicación</h2>

                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa  fa-book fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Concepto</h4>
                    <ul>
                        <li><p class="text-muted" align="justify">Definición <a href="#">Ver mas</a></p></li>
                        <li><p class="text-muted" align="justify">Relación entre adición y multiplicación.<a href="#">Ver mas</a></p></li>
                        <li><p class="text-muted" align="justify">Tablas de multiplicar <a href="#">Ver mas</a></p></li>
                        <li><p class="text-muted" align="justify">Operadores multiplicativos <a href="#">Ver mas</a></p></li>
                        <li><p class="text-muted" align="justify">Propiedad conmutativa <a href="#">Ver mas</a></p></li>
                        <li><p class="text-muted" align="justify">Propiedad distributiva <a href="#">Ver mas</a></p></li>
                        <li><p class="text-muted" align="justify">Propiedad asociativa <a href="#">Ver mas</a></p></li>
                        <li><p class="text-muted" align="justify">Multiplicación por una cifra <a href="#">Ver mas</a></p></li>
                        <li><p class="text-muted" align="justify">Multiplicación por dos o más cifras <a href="#">Ver mas</a></p></li>
                        <li><p class="text-muted" align="justify">Múltiplos de un número <a href="#">Ver mas</a></p></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-files-o fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Actividades</h4>
                    <ul>
                        <li><p class="text-muted" align="justify">Actividad 1 <a href="#">Ver mas</a></p></li>
                        <li><p class="text-muted" align="justify">Actividad 2 <a href="#">Ver mas</a></p></li>
                        <li><p class="text-muted" align="justify">Actividad 3 <a href="#">Ver mas</a></p></li>
                        <li><p class="text-muted" align="justify">Actividad 4 <a href="#">Ver mas</a></p></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-video-camera fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Videos</h4>
                    <ul>
                        <li><p class="text-muted" align="justify">Video 1 <a href="#">Ver mas</a></p></li>
                        <li><p class="text-muted" align="justify">Video 2 <a href="#">Ver mas</a></p></li>
                        <li><p class="text-muted" align="justify">Video 3 <a href="#">Ver mas</a></p></li>
                        <li><p class="text-muted" align="justify">Video 4 <a href="#">Ver mas</a></p></li>
                    </ul>
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
<script src="../js/jquery.js"></script>
<script src="../js/jquery.easing.1.3.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/jquery.fancybox.pack.js"></script>
<script src="../js/jquery.fancybox-media.js"></script>
<script src="../js/google-code-prettify/prettify.js"></script>
<script src="../js/portfolio/jquery.quicksand.js"></script>
<script src="../js/portfolio/setting.js"></script>
<script src="../js/jquery.flexslider.js"></script>
<script src="../js/animate.js"></script>
<script src="../js/custom.js"></script>
</body>
</html>
