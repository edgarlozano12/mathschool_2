<?php
/**
 * Created by PhpStorm.
 * User: Ehtesham Mehmood
 * Date: 11/24/2014
 * Time: 11:55 PM
 */
include("../database/db_conection.php");
$delete_id=$_GET['del'];
$delete_query="delete from acudiente WHERE codigo='$delete_id'";//delete query
$run=mysqli_query($dbcon,$delete_query);
if($run)
{
//javascript function to open in the same window
    echo "<script>window.open('eliminar_acudiente.php?deleted=user has been deleted','_self')</script>";
}

?>