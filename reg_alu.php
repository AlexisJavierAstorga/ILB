<?php
session_start();
include("conexion.php");
$nombre = $_POST["name"];
$apellidoPaterno = $_POST["app"];
$apellidoMaterno = $_POST["apm"];
$grupo = $_POST["grupo"];
$grado = $_POST["grado"];
$cargo = $_POST["id_categoria"];
$puesto = $_POST["puesto"];
$correo = $_POST["email"];
$password = $_POST["password"];

$nombre_archivo = $_FILES["foto"]["name"];
$tmp_archivo = $_FILES["foto"]["tmp_name"];
//$tipo_archivo = $_FILES["foto"]["type"];
//$tamaño_archivo = $_FILES["foto"]["size"];

  //echo $nombre_archivo. '</br>'.$tmp_archivo;
$folder = 'images/archivos/alumnos/'.$nombre_archivo;
copy($tmp_archivo,$folder);
	//$insertar = " INSERT alumnos (foto, nombre, app, apm, grupo, grado, cargo, puesto, correo, pass) VALUES ('$bytesArchivo', '$nombre', '$apellidoPaterno', '$apellidoMaterno', '$grupo', '$grado', '$cargo', '$puesto', '$correo', '$password')";
  $insertar = "INSERT INTO alumnos (foto, nombre, app, apm, grupo, grado, cargo, puesto, correo, pass, qr) values ('$folder', '$nombre', '$apellidoPaterno', '$apellidoMaterno', '$grupo', '$grado', '$cargo', '$puesto', '$correo', '$password', '-')";

	$verificar_usuario = mysqli_query($con, "SELECT * FROM alumnos WHERE correo = '$correo'");
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
		location.href="reg.php#contact";
		</script>';
	}
	//Cerrar conexion
?>
