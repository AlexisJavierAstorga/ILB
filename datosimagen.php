<?php
$nombre_imagen=$_FILES['foto']['name'];
$tipo_imagen=$_FILES['foto']['type'];
$tamagno_imagen=$_FILES['foto']['size'];

//ruta de la carpeta destino servidor
$carpeta_destino=$_SERVER['DOCUMENT_ROOT'].'/ILB/images/';

//Mover imagen del directorio temporal al directorio escogido

move_uploaded_file($_FILES['foto']['tmp_name'],$carpeta_destino.$nombre_imagen);

?>
