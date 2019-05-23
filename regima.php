<?php
include("conexion.php");
$comentario = $_POST ['comen'];
	$nombre_archivo = $_FILES["foto"]["name"];
	$tmp_archivo = $_FILES["foto"]["tmp_name"];
	//$tipo_archivo = $_FILES["foto"]["type"];
	//$tamaño_archivo = $_FILES["foto"]["size"];

    //echo $nombre_archivo. '</br>'.$tmp_archivo;
	$folder = 'images/archivos/alumnos/'.$nombre_archivo;
	copy($tmp_archivo,$folder);
	//move_uploaded_file($tmp_archivo, $folder.'/'. $nombre_archivo);


	$insertar = "INSERT INTO imagen (foto, comentario) values ('$folder', '$comentario')";

$verificar_usuario = mysqli_query($con, "SELECT * FROM imagen WHERE comentario = '$comentario'");
if (mysqli_num_rows($verificar_usuario) > 0){
	echo '<script>
	alert("Este correo ya fue registrado.");
	window.history.go(-1);
	</script>';
	exit;
}

$resultado = mysqli_query($con, $insertar);
if (!$resultado) {
	echo '<script>
	alert("Error al registrarse.");
	window.history.go(-1);
	</script>';
mysqli_close($con);
}else{
	echo '<script>
	alert("Ya estas registrado, prueba tu cuenta");
	location.href="imagen.php";
	</script>';
}
 ?>
