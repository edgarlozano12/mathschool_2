<?php
session_start();//session starts here
$user_name=$_SESSION['estudiante']
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
                        $user_pass0=md5($_POST['pass0']);
                        $user_pass1=md5($_POST['pass1']);//here getting result from the post array after submitting the form.
                        $user_pass2=md5($_POST['pass2']);//same
    
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


                        $check_user_query="select * from estudiante WHERE clave='$user_pass0'";
                        $run_query=mysqli_query($dbcon,$check_user_query);

                        if(mysqli_num_rows($run_query)>0)
                        {
                            //update the pass into the database.
                            $update_pass="UPDATE `estudiante` SET `clave` = '$user_pass1' WHERE `estudiante`.`usuario` = '$user_name'";
                            if(mysqli_query($dbcon,$update_pass))
                            {
                                echo"<script>alert('Cambio de contraseña exitoso!')</script>,<script>window.open('../logout.php','_self')</script>";
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