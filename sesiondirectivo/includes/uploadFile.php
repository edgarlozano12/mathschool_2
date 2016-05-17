<?php
session_start();
$user_name=$_SESSION['directivo']
 ?>

 <?php
    //eliminar foto
   $dbcon=mysqli_connect("localhost","root","");
   mysqli_select_db($dbcon,"mathschool");

   $check_docu_quer="select * from directivos WHERE usuario='$user_name'";
   $run_quer=mysqli_query($dbcon,$check_docu_quer);

   if(mysqli_num_rows($run_quer)>0)
   {
     while($row=mysqli_fetch_array($run_quer)){
       $url_f=$row['foto'];
       //unlink("../img/images/".$url_f);
     }
       //echo "<script>alert('elimina $url_f    !')</script>";
   }
  ?>
<?php

$dbcon=mysqli_connect("localhost","root","");
mysqli_select_db($dbcon,"mathschool");
// Tiempo de espera del script
// Este lo usamos para emular mas o menos el comportamiento en un servidor web no local
// Ya que muchas veces al ejecutarlo de fomra local no se aprecia bien el funcionamiento.
sleep(3);

// ini_set("display_errors", 1);

// Definimos variables generales

define("maxUpload", 50000);
define("maxWidth", 120);
define("maxHeight", 120);
define("uploadURL", '../../img/images/');
define("fileName", 'foto_');


// Tipos MIME
$fileType = array('image/jpeg','image/pjpeg','image/png');

// Bandera para procesar imagen
$pasaImgSize = false;

//bandera de error al procesar la imagen
$respuestaFile = false;

// nombre por default de la imagen a subir
$fileName = '';
// error del lado del servidor
$mensajeFile = 'ERROR EN EL SCRIPT';

// Obtenemos los datos del archivo
$tamanio = $_FILES['userfile']['size'];
$tipo = $_FILES['userfile']['type'];
$archivo = $_FILES['userfile']['name'];

// Tamaño de la imagen
$imageSize = getimagesize($_FILES['userfile']['tmp_name']);

// Verificamos la extensión del archivo independiente del tipo mime
$extension = explode('.',$_FILES['userfile']['name']);
$num = count($extension)-1;


// Creamos el nombre del archivo dependiendo la opción
$imgFile = fileName.time().'.'.$extension[$num];

// Verificamos el tamaño válido para los logotipos
if($imageSize[0] == maxWidth && $imageSize[1] == maxHeight)
	$pasaImgSize = true;

// Verificamos el status de las dimensiones de la imagen a publicar
if($pasaImgSize == true)
{

	// Verificamos Tamaño y extensiones
	if(in_array($tipo, $fileType) && $tamanio>0 && $tamanio<=maxUpload && ($extension[$num]=='jpg' || $extension[$num]=='png'))
	{

		// Intentamos copiar el archivo
		if(is_uploaded_file($_FILES['userfile']['tmp_name']))
		{

      $check_user="select * from directivos WHERE usuario='$user_name'";
			$run_query=mysqli_query($dbcon,$check_user);

			if(mysqli_num_rows($run_query)>0)
			{

					//update the url fhoto into the database.
					$update_url="UPDATE `directivos` SET `foto` = '$imgFile' WHERE `directivos`.`usuario` = '$user_name'";
					if(mysqli_query($dbcon,$update_url))
					{
              if ($url_f<>'nofoto.jpg') {
                unlink("../../img/images/".$url_f);
              }

							echo"<script>alert('Subida exitosa! o')</script>";


					}
			}

			if(move_uploaded_file($_FILES['userfile']['tmp_name'], uploadURL.$imgFile))
			{
				$respuestaFile = 'done';
				$fileName = $imgFile;
				$mensajeFile = $imgFile;


			}
			else
				// error del lado del servidor
				$mensajeFile = 'No se pudo subir el archivo';
		}
		else
			// error del lado del servidor
			$mensajeFile = 'No se pudo subir el archivo';
	}
	else
		// Error en el tamaño y tipo de imagen
		$mensajeFile = 'Verifique el tamaño y tipo de imagen';

}
else
	// Error en las dimensiones de la imagen
	$mensajeFile = 'Verifique las dimensiones de la Imagen';

$salidaJson = array("respuesta" => $respuestaFile,
					"mensaje" => $mensajeFile,
					"fileName" => $fileName);

echo json_encode($salidaJson);
?>
