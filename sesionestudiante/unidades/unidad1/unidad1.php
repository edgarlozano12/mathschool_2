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
                        <li class="active"><a href="../../index_estudiante.php">Inicio</a></li>
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
    <!-- modal content -->
    <div class="cajaexterna">
        <div class="cajainterna animated">
            <div class="cajacentrada">
                <h2></h2>
                <p></p>
                <div id="gifp" align="center" class="img-responsive">
                    <img src="../../../img/ventana_modal/docente.gif">
                </div>
                <div class="cierramodal">
                    <a href="#" class="cerrarmodal">cerrar</a>
                </div>
            </div>
        </div>
    </div>
    <!-- /modal -->

	<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<ul class="breadcrumb">
					<li><a href="../../index_estudiante.php"><i class="fa fa-home"></i></a><i class="icon-angle-right"></i></li>
					<li><a href="../../unidades.php">Unidades</a><i class="icon-angle-right"></i></li>
					<li class="active">Unidad 1</li>
				</ul>
			</div>
		</div>
	</div>
	</section>
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<ul class="portfolio-categ filter">
					<li class="all active"><a href="#">Todas</a></li>
					<li class="suma"><a href="#" title="">Suma</a></li>
					<li class="resta"><a href="#" title="">Resta</a></li>
					<li class="multiplicacion"><a href="#" title="">Multiplicación</a></li>
					<li class="division"><a href="#" title="">División</a></li>
				</ul>
				<div class="clearfix">
				</div>
				<div class="row">
					<section id="projects">
					<ul id="thumbs" class="portfolio">
						<!-- Item Project and Filter Name -->
						<li class="item-thumbs col-lg-3 design" data-id="id-0" data-type="suma">
						<!-- Fancybox - Gallery Enabled - Title - Full Image -->
						<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="SUMA" href="suma.php">
						<span class="overlay-img"></span>
						<span class="overlay-img-thumb font-icon-plus"></span>s
						</a>
						<!-- Thumb Image and Description -->
						<img  src="../../../img/temas/suma.jpg" alt="contenido " >

						
						</li>
						
						<!-- End Item Project -->
						<!-- Item Project and Filter Name -->
						<li class="item-thumbs col-lg-3 design" data-id="id-1" data-type="resta">
						<!-- Fancybox - Gallery Enabled - Title - Full Image -->
						<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="RESTA" href="resta.php">
						<span class="overlay-img"></span>
						<span class="overlay-img-thumb font-icon-plus"></span>
						</a>
						<!-- Thumb Image and Description -->
						<img src="../../../img/temas/resta.jpg" alt="">
						</li>
						<!-- End Item Project -->
						<!-- Item Project and Filter Name -->
						<li class="item-thumbs col-lg-3 photography" data-id="id-2" data-type="multiplicacion">
						<!-- Fancybox - Gallery Enabled - Title - Full Image -->
						<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="MULTIPLICACION" href="multiplicacion.php">
						<span class="overlay-img"></span>
						<span class="overlay-img-thumb font-icon-plus"></span>
						</a>
						<!-- Thumb Image and Description -->
						<img  src="../../../img/temas/multiplicacion.jpg" alt=" ">
						</li>
						<!-- End Item Project -->
						<!-- Item Project and Filter Name -->
						<li class="item-thumbs col-lg-3 design" data-id="id-0" data-type="division">
						<!-- Fancybox - Gallery Enabled - Title - Full Image -->
						<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="DIVISION" href="division.php">
						<span class="overlay-img"></span>
						<span class="overlay-img-thumb font-icon-plus"></span>
						</a>
						<!-- Thumb Image and Description -->
						<img src="../../../img/temas/division.jpg" alt="">
						</li>
					</ul>
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
 <!--ventana modal js -->
<script>
        $(document).ready(function(e) {

            $(".cajaexterna").show();
            darEfecto("bounceIn");      
        
        var mozillaPresente = false,
            mozilla = (function detectarNavegador(navegador) {
            if(navegador.indexOf("Firefox") != -1 ) {
                mozillaPresente = true;
            }   
        })(navigator.userAgent);
        function darEfecto(efecto) {
            el = $('.cajainterna');
            el.addClass(efecto);
            el.one('webkitAnimationEnd oanimationend msAnimationEnd animationend',
            function (e) {
                el.removeClass(efecto);
            });
        }
        function mostrar(e) {
            $(".cajaexterna").show();
            darEfecto("bounceIn");      
        }
        function ocultar() {
            $(".cajaexterna").fadeOut("fast", function() {
                if(mozillaPresente) {
                setTimeout(function() {
                    $(".cajainterna").removeClass("bounceIn");
                }, 5);
            }
            });         
        }
        $("a.mostrarmodal").click(mostrar);
        $("a.cerrarmodal").click(ocultar);
        }); 
    </script>
    <script>
        $(document).ready(function() {           
        if (!Modernizr.input.placeholder)
        {       
            var placeholderText = $('#search').attr('placeholder');
            
            $('#search').attr('value',placeholderText);
            $('#search').addClass('placeholder');
            
            $('#search').focus(function() {             
                if( ($('#search').val() == placeholderText) )
                {
                    $('#search').attr('value','');
                    $('#search').removeClass('placeholder');
                }
            });
            
            $('#search').blur(function() {              
                if ( ($('#search').val() == placeholderText) || (($('#search').val() == '')) )                      
                {   
                    $('#search').addClass('placeholder');                     
                    $('#search').attr('value',placeholderText);
                }
            });
        }                
    });

</script>
</body>
</html>