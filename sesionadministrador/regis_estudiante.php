<?php
session_start();//session starts here
?>

<?php

include("../database/db_conection.php");//make connection here

if(!empty($_POST['captcha']))
{
                $user_captcha=$_POST['captcha'];
                if($user_captcha==$_SESSION['img_number'])
                {
                    if(isset($_POST['register']))
                    {

                            $user_documento=$_POST['documento'];//same
                            $user_estudiante=$_POST['estudiante'];
                            $user_nombre=$_POST['nombre'];//same
                            $user_apellido=$_POST['apellido'];//same
                            $user_grado=$_POST['grado'];
                            $user_usuario=$_POST['usuario'];
                            $user_pass1=md5($_POST['pass1']);
                            $user_pass2=md5($_POST['pass2']);



                            if($user_documento=='' )
                            {
                                //javascript use for input checking
                                echo"<script>alert('Por ingrese el numero del documento')</script>,<script>window.open('ingresar_estudiantes.php','_self')</script>";
                                exit();//this use if first is not work then other will not show
                            }
                            if($user_estudiante=='' )
                            {
                                //javascript use for input checking
                                echo"<script>alert('Por ingrese el No de identificacion del acudiente')</script>,<script>window.open('ingresar_estudiantes.php','_self')</script>";
                                exit();//this use if first is not work then other will not show
                            }
                            if($user_nombre=='' )
                            {
                                //javascript use for input checking
                                echo"<script>alert('Por ingrese el nombre')</script>,<script>window.open('ingresar_estudiantes.php','_self')</script>";
                                exit();//this use if first is not work then other will not show
                            }
                            if($user_apellido=='' )
                            {
                                //javascript use for input checking
                                echo"<script>alert('Por ingrese el apellido')</script>,<script>window.open('ingresar_estudiantes.php','_self')</script>";
                                exit();//this use if first is not work then other will not show
                            }
                            if($user_grado=='' )
                            {
                                //javascript use for input checking
                                echo"<script>alert('Por seleccione el grado')</script>,<script>window.open('ingresar_estudiantes.php','_self')</script>";
                                exit();//this use if first is not work then other will not show
                            }
                            if($user_usuario=='' )
                            {
                                //javascript use for input checking
                                echo"<script>alert('Por ingrese el usuario')</script>,<script>window.open('ingresar_estudiantes.php','_self')</script>";
                                exit();//this use if first is not work then other will not show
                            }
                            if($user_pass1=='' or $user_pass2=='' )
                            {
                                //javascript use for input checking
                                echo"<script>alert('Por ingrese la contraseña')</script>,<script>window.open('ingresar_estudiantes.php','_self')</script>";
                                exit();//this use if first is not work then other will not show
                            }
                            if($user_pass1<>$user_pass2)
                            {
                                //javascript use for input checking
                                echo"<script>alert('las contraseñas no son iguales')</script>,<script>window.open('ingresar_estudiantes.php','_self')</script>";
                                exit();//this use if first is not work then other will not show
                            }



                            //here query check weather if user already registered so can't register again.
                            $check_docu_query="select * from estudiante WHERE codigo='$user_documento'";
                            $run_query=mysqli_query($dbcon,$check_docu_query);

                            if(mysqli_num_rows($run_query)>0)
                            {
                                echo "<script>alert('El documento $user_documento ya existe en la base de datos, Por favor ingrese uno nuevo!')</script>,<script>window.open('ingresar_estudiantes.php','_self')</script>";
                                exit();
                            }

                            $check_user_query="select * from estudiante WHERE usuario='$user_usuario'";
                            $run_query=mysqli_query($dbcon,$check_user_query);

                            if(mysqli_num_rows($run_query)>0)
                            {
                                echo "<script>alert('El usuario $user_usuario ya existe en la base de datos, Por favor ingrese uno nuevo!')</script>,<script>window.open('ingresar_estudiantes.php','_self')</script>";
                                exit();
                            }

                            //insert the user into the database.
                            $insert_user="insert into estudiante (`codigo`, `nombre`, `apellido`, `grado`, `usuario`, `clave`, `acudiente_codigo`, `foto`) VALUE ('$user_documento','$user_nombre','$user_apellido','$user_grado','$user_usuario','$user_pass1','$user_estudiante','nofoto.jpg')";
                            if(mysqli_query($dbcon,$insert_user))
                            {
                                echo"<script>alert('El registro de $user_nombre $user_apellido con No $user_documento ha sido exitoso!')</script>,<script>window.open('ingresar_estudiantes.php','_self')</script>";
                            }

                    }
                }
                else{
                    echo"<script>alert('Error de codigo captcha')</script>,<script>window.open('ingresar_estudiantes.php','_self')</script>";
                    }
}
else{
        echo"<script>alert('Digite el codigo captcha')</script>,<script>window.open('ingresar_estudiantes.php','_self')</script>";
    }

?>
