<?php
session_start();
include("conexion.php");
$rol = $_POST["rol"];
$nombre = $_POST["username"];
$apellidoPaterno = $_POST["apellidoPat"];
$apellidoMaterno = $_POST["apellidoMat"];
$correo = $_POST["email"];
$password = $_POST["password"];
$foto = $_POST["foto"];

	$insertar = " INSERT INTO alumnos (foto, rol, nombre, app, apm, correo, pass) VALUES ('$foto','$rol','$nombre','$apellidoPaterno','$apellidoMaterno','$correo','$password')";

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
		location.href="login.php";
		</script>';
	}
?>

<?php
if($_POST['rol'] == 'lider')
header('Location: alumno.php'); // No se puede enviar más de un header a la vez, por eso eliminé el otro header.
else
header('Location: colaborador.php');
?>
