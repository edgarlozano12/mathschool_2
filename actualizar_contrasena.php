<?php
session_start();//session starts here

?>
<?php

include("./database/db_conection.php");//make connection here

if(!empty($_POST['captcha']))
{

                $user_captcha=$_POST['captcha'];
                if($user_captcha==$_SESSION['img_number'])
                {
                    if(isset($_POST['register']))
                    {
                        $user_opcion=$_POST['opcion'];
                        $user_identificacion=$_POST['identificacion'];
                        $user_usuario=$_POST['usuario'];
                        $user_pass1=md5($_POST['pass1']);//here getting result from the post array after submitting the form.
                        $user_pass2=md5($_POST['pass2']);//same

                        if($user_identificacion=='' or $user_usuario=='')
                        {
                            //javascript use for input checking
                            echo"<script>alert('Por favor ingrese los datos de identificacion o usuario'</script>,<script>window.open('cambiar_contrasena.php','_self')</script>";
                            exit();//this use if first is not work then other will not show
                        }
                        if($user_pass1=='' or $user_pass2=='')
                        {
                            //javascript use for input checking
                            echo"<script>alert('Please enter the password '</script>,<script>window.open('cambiar_contrasena.php','_self')</script>";
                            exit();//this use if first is not work then other will not show
                        }

                        if ($user_pass1<>$user_pass2)
                        {
                            echo"<script>alert('Please enter the password same')</script>,<script>window.open('cambiar_contrasena.php','_self')</script>";
                            exit();
                        }

                        if ($user_opcion=='docente') {
                          $check_user_query="select * from docente WHERE codigo='$user_identificacion'";
                          $run_query=mysqli_query($dbcon,$check_user_query);

                          if(mysqli_num_rows($run_query)>0)
                          {
                              //update the pass into the database.
                              $update_pass="UPDATE `docente` SET `clave` = '$user_pass1' WHERE `docente`.`usuario` = '$user_usuario'";
                              if(mysqli_query($dbcon,$update_pass))
                              {
                                  echo"<script>alert('Cambio de contraseña exitoso!')</script>,<script>window.open('./index.html','_self')</script>";
                              }
                          }
                        }
                        if ($user_opcion=='estudiante') {
                          $check_user_query="select * from estudiante WHERE codigo='$user_identificacion'";
                          $run_query=mysqli_query($dbcon,$check_user_query);

                          if(mysqli_num_rows($run_query)>0)
                          {
                              //update the pass into the database.
                              $update_pass="UPDATE `estudiante` SET `clave` = '$user_pass1' WHERE `estudiante`.`usuario` = '$user_usuario'";
                              if(mysqli_query($dbcon,$update_pass))
                              {
                                  echo"<script>alert('Cambio de contraseña exitoso!')</script>,<script>window.open('./index.html','_self')</script>";
                              }
                          }
                        }
                        if ($user_opcion=='acudiente') {
                          $check_user_query="select * from acudiente WHERE codigo='$user_identificacion'";
                          $run_query=mysqli_query($dbcon,$check_user_query);

                          if(mysqli_num_rows($run_query)>0)
                          {
                              //update the pass into the database.
                              $update_pass="UPDATE `acudiente` SET `clave` = '$user_pass1' WHERE `acudiente`.`usuario` = '$user_usuario'";
                              if(mysqli_query($dbcon,$update_pass))
                              {
                                  echo"<script>alert('Cambio de contraseña exitoso!')</script>,<script>window.open('./index.html','_self')</script>";
                              }
                          }
                        }
                        if ($user_opcion=='directivos') {
                          $check_user_query="select * from directivos WHERE codigo='$user_identificacion'";
                          $run_query=mysqli_query($dbcon,$check_user_query);

                          if(mysqli_num_rows($run_query)>0)
                          {
                              //update the pass into the database.
                              $update_pass="UPDATE `directivos` SET `clave` = '$user_pass1' WHERE `directivos`.`usuario` = '$user_usuario'";
                              if(mysqli_query($dbcon,$update_pass))
                              {
                                  echo"<script>alert('Cambio de contraseña exitoso!')</script>,<script>window.open('./index.html','_self')</script>";
                              }
                          }
                        }
                        if ($user_opcion=='administrador') {
                          $check_user_query="select * from administrador WHERE codigo='$user_identificacion'";
                          $run_query=mysqli_query($dbcon,$check_user_query);

                          if(mysqli_num_rows($run_query)>0)
                          {
                              //update the pass into the database.
                              $update_pass="UPDATE `administrador` SET `clave` = '$user_pass1' WHERE `administrador`.`usuario` = '$user_usuario'";
                              if(mysqli_query($dbcon,$update_pass))
                              {
                                  echo"<script>alert('Cambio de contraseña exitoso!')</script>,<script>window.open('./index.html','_self')</script>";
                              }
                          }
                        }



                        else
                        {
                            echo"<script>alert('La contraseña anterior no es correcta')</script>,<script>window.open('cambiar_contrasena.php','_self')</script>";
                        }
                    }
                }
                else{
                    echo"<script>alert('Error de codigo captcha')</script>,<script>window.open('cambiar_contrasena.php','_self')</script>";
                    }
}
else{
        echo"<script>alert('Digite el codigo captcha')</script>,<script>window.open('cambiar_contrasena.php','_self')</script>";
    }

?>
