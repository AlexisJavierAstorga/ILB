<?php
session_start();
include("conexion.php");
$alumno = $_POST["alumno"];
$correo = $_POST["correo"];
$visitante = $_POST["visitante"];
$consul = $_POST["consul"];
$visitante = $_POST["visitante"];
$proy = $_POST["proy"];
$desc = $_POST["desc"];
$puesto = $_POST["puesto"];

$nombre_archivo = $_FILES["corp"]["name"];
$tmp_archivo = $_FILES["corp"]["tmp_name"];
//$tipo_archivo = $_FILES["foto"]["type"];
//$tamaño_archivo = $_FILES["foto"]["size"];

  //echo $nombre_archivo. '</br>'.$tmp_archivo;
$folder = 'images/archivos/corporativa/'.$nombre_archivo;
copy($tmp_archivo,$folder);

$nombre_archivo2 = $_FILES["orga"]["name"];
$tmp_archivo2 = $_FILES["orga"]["tmp_name"];
//$tipo_archivo = $_FILES["foto"]["type"];
//$tamaño_archivo = $_FILES["foto"]["size"];

  //echo $nombre_archivo. '</br>'.$tmp_archivo;
$folder2 = 'images/archivos/organigrama/'.$nombre_archivo2;
copy($tmp_archivo2,$folder2);

	//$insertar = " INSERT alumnos (foto, nombre, app, apm, grupo, grado, cargo, puesto, correo, pass) VALUES ('$bytesArchivo', '$nombre', '$apellidoPaterno', '$apellidoMaterno', '$grupo', '$grado', '$cargo', '$puesto', '$correo', '$password')";
  $insertar = "INSERT INTO proyectos (alumno, correo, puesto, visitante, consultoria, corporativa, nombre_proy, descripcion, organigrama) values ('$alumno', '$correo', '$puesto', '-', '$consul', '$folder', '$proy', '$desc','$folder2')";

	$verificar_usuario = mysqli_query($con, "SELECT * FROM proyectos WHERE consultoria = '$consul'");
	if (mysqli_num_rows($verificar_usuario) > 0){
		echo '<script>
		alert("Este nombre de consultoria ya fue registrado.");
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
		alert("Ya está registrado tu proyecto");
		location.href="alumno.php";
		</script>';
	}
	//Cerrar conexion
?>
