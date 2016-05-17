<?php
session_start();//session starts here
$user_name=$_SESSION['acudiente']
?>

<?php

include("../database/db_conection.php");//make connection here


                    if(isset($_POST['register']))
                    {
                        $user_usuario=$_POST['usuario'];

                        if($user_usuario=='')
                        {
                            //javascript use for input checking
                            echo"<script>alert('Please enter the password '</script>,<script>window.open('perfil.php','_self')</script>";
                            exit();//this use if first is not work then other will not show
                        }

                        $check_user_query="select * from acudiente WHERE usuario='$user_name'";
                        $run_query=mysqli_query($dbcon,$check_user_query);

                        if(mysqli_num_rows($run_query)>0)
                        {
                            //update the pass into the database.
                            $update_usuario="UPDATE `acudiente` SET `usuario` = '$user_usuario' WHERE `acudiente`.`usuario` = '$user_name'";
                            if(mysqli_query($dbcon,$update_usuario))
                            {
                                echo"<script>alert('Cambio de usuario exitoso!')</script>,<script>window.open('../logout.php','_self')</script>";
                            }
                        }

                    }

?>
