<?php
session_start();//session starts here
?>

<?php

include("database/db_conection.php");

if(!empty($_POST['captcha'])){
                $user_captcha=$_POST['captcha'];
                if($user_captcha==$_SESSION['img_number']){
                    if(isset($_POST['login']))
                    {
                        $user_tipo=$_POST['opcion'];//same
                        $user_name=$_POST['name'];
                        $user_pass=md5($_POST['pass']);
                    //    $user_captcha=$_POST['captcha']

                        if($user_tipo=='docente')
                        {


                            $check_user="select * from docente WHERE usuario='$user_name'AND clave='$user_pass'";

                            $run=mysqli_query($dbcon,$check_user);

                            if(mysqli_num_rows($run))
                            {
                                echo "<script>window.open('./sesiondocente/index_docente.php','_self')</script>";

                                $_SESSION['docente']=$user_name;//here session is used and value of $user_email store in $_SESSION.

                            }
                            else
                            {

                                echo "<script>alert('Usuario o Contraseña Incorrecto')</script>,<script>window.open('index.html','_self')</script>";

                            }
                            
                        }

                        if($user_tipo=='acudiente')
                        {

                            $check_user="select * from acudiente WHERE usuario='$user_name'AND clave='$user_pass'";

                            $run=mysqli_query($dbcon,$check_user);

                            if(mysqli_num_rows($run))
                            {
                                echo "<script>window.open('./sesionacudiente/index_acudiente.php','_self')</script>";

                                $_SESSION['acudiente']=$user_name;//here session is used and value of $user_email store in $_SESSION.

                            }
                            else
                            {

                                echo "<script>alert('Usuario O Contraseña Incorrecto')</script>,<script>window.open('index.html','_self')</script>";

                            }
                            
                        }

                        if($user_tipo=='directivo')
                        {


                            $check_user="select * from directivos WHERE usuario='$user_name'AND clave='$user_pass'";

                            $run=mysqli_query($dbcon,$check_user);

                            if(mysqli_num_rows($run))
                            {
                                echo "<script>window.open('./sesiondirectivo/index_directivo.php','_self')</script>";

                                $_SESSION['directivo']=$user_name;//here session is used and value of $user_email store in $_SESSION.

                            }
                            else
                            {

                                echo "<script>alert('Usuario o Contraseña Incorrecto')</script>,<script>window.open('index.html','_self')</script>";

                            }
                            

                        }

                        if($user_tipo=='estudiante')
                        {

                            
                            $check_user="select * from estudiante WHERE usuario='$user_name'AND clave='$user_pass'";

                            $run=mysqli_query($dbcon,$check_user);

                            if(mysqli_num_rows($run))
                            {
                                echo "<script>window.open('./sesionestudiante/index_estudiante.php','_self')</script>";

                                $_SESSION['estudiante']=$user_name;//here session is used and value of $user_email store in $_SESSION.

                            }
                            else
                            {

                                echo "<script>alert('Usuario o Contraseña Incorrecto')</script>,<script>window.open('index.html','_self')</script>";

                            }


                        }

                        if($user_tipo=='')
                        {

                            
                            $check_user="select * from administrador WHERE Usuario='$user_name'AND clave='$user_pass'";

                            $run=mysqli_query($dbcon,$check_user);

                            if(mysqli_num_rows($run))
                            {
                                echo "<script>window.open('./sesionadministrador/index_administrador.php','_self')</script>";

                                $_SESSION['admin']=$user_name;//here session is used and value of $user_email store in $_SESSION.

                            }
                            else
                            {

                                echo "<script>alert('Usuario o Contraseña Incorrecto')</script>,<script>window.open('index.html','_self')</script>";

                            }


                        }


                        
                    }
                }
                else{
                    echo "<script>alert('Error de codigo de la imagen')</script>,<script>window.open('index.html','_self')</script>";
                    }
                
            }
else{
    echo "<script>alert('Digite el codigo de la imagen')</script>,<script>window.open('index.html','_self')</script>";
}


?>