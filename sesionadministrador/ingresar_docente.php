<?php
session_start();

if(!$_SESSION['admin'])
{

    header("Location: ../index.html");//redirect to login page to secure the welcome page without login access.
}
$user_name=$_SESSION['admin']
?>

<?php
  $dbcon=mysqli_connect("localhost","root","");
  mysqli_select_db($dbcon,"mathschool");

  $check_docu_query="select * from administrador WHERE usuario='$user_name'";
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

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
    <script src="../assets/bootstrap.min.js"></script>
    <link href="../assets/bootstrap.min.css" rel="stylesheet" media="screen">

<!-- Theme skin -->
<link href="../skins/default.css" rel="stylesheet" />

<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

</head>
<style>
    .login-panel {
        margin-top: 150px;
    }
    .table {
        margin-top: 4s0px;

    }

</style>
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
                    <a class="navbar-brand" href="index_administrador.php"><span>M</span>ath School</a>
                </div>
                <div class="navbar-collapse collapse ">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="index_administrador.php">Inicio</a></li>
                        <li><a href="usuarios.php">Usuarios</a></li>
                        <li><a href="contact.php">Contactenos</a></li>
                        <li class="divider-vertical"></li>
                        <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <b class="fa fa-user"></b><span><?php echo $_SESSION['admin']; ?></span>
                          </a>
                          <ul class="dropdown-menu">
                            <li><a href="perfil.php"><i class=""></i> Perfil</a></li>
                            <li><a href="cambiar_contrasena.php"><i class="icon-refresh"></i> Cambiar Contraseña</a></li>
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
                    <li><a href="index_administrador.php"><i class="fa fa-home"></i></a><i class="icon-angle-right"></i></li>
                    <li><a href="usuarios.php">Usuarios</a><i class="icon-angle-right"></i></li>
                    <li><a href="estudiantes.php">Docente</a><i class="icon-angle-right"></i></li>
                    <li class="active">Ingresar Docente</li>
                </ul>
            </div>
        </div>
    </div>
    </section>
    <section>
        <div class="table-scrol">
        <h1 align="center">INGRESAR DOCENTE</h1>
        <div class="container"><!-- container class is used to centered  the body of the browser with some decent width-->
    <div class="row"><!-- row class is used for grid system in Bootstrap-->
        <div class="col-md-4 col-md-offset-4"><!--col-md-4 is used to create the no of colums in the grid also use for medimum and large devices-->
            <div class="login-panel panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title"></h3>
                </div>
                <div class="panel-body">
                    <form role="form" method="post" action="regis_docente.php">
                                        <fieldset>

                                            <div class="form-group">
                                                <input class="form-control" placeholder=" No. Documento De Identidad" name="documento" type="text" autofocus>
                                            </div>
                                            <div class="form-group">
                                                <input class="form-control" placeholder="Nombres" name="nombre" type="text" autofocus>
                                            </div>
                                            <div class="form-group">
                                                <input class="form-control" placeholder="Apellidos" name="apellido" type="text" autofocus>
                                            </div>
                                            <div class="form-group">
                                                <select class="form-control" placeholder="grado" name="grado" type="select" value="" autofocus>
                                                        <option value="">Elige una opción</option>
                                                        <option value="3A">3A</option>
                                                        <option value="3B">3B</option>
                                                <br>
                                            </div>
                                            <div class="form-group">
                                                <input class="form-control" placeholder="Usuario" name="usuario" type="text" autofocus>
                                            </div>
                                            <div class="form-group">
                                                <input class="form-control" placeholder="Contraseña" name="pass1" type="password" value="">
                                            </div>
                                            <div class="form-group">
                                                <input class="form-control" placeholder="Confirmar Contraseña" name="pass2" type="password" value="">
                                            </div>

                                            <div class="form-group">
                                                <center><img src="../generate_captcha.php" border="0" /></center><br>
                                                <input class="form-control" placeholder="Digite codigo de la imagen" name="captcha" type="text" value="">
                                            </div>

                                            <input class="btn btn-lg btn-success btn-block" type="submit" value="register" name="register" >
                                        </fieldset>
                                    </form>

                </div>
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
