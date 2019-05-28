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

$corp = $_POST["corp"];
$orga = $_POST["orga"];



	//$insertar = " INSERT alumnos (foto, nombre, app, apm, grupo, grado, cargo, puesto, correo, pass) VALUES ('$bytesArchivo', '$nombre', '$apellidoPaterno', '$apellidoMaterno', '$grupo', '$grado', '$cargo', '$puesto', '$correo', '$password')";
  $insertar = "INSERT INTO proyectos (alumno, correo, puesto, visitante, consultoria, corporativa, nombre_proy, descripcion, organigrama) values ('$alumno', '$correo', '$puesto', '-', '$consul', '$corp', '$proy', '$desc','$orga')";


	$resultado = mysqli_query($con, $insertar);
	if (!$resultado) {
		echo '<script>
		alert("Error al registrarse.");
		window.history.go(-1);
		</script>';
mysqli_close($con);
	}else{
		echo '<script>
		alert("Ya estás registrado en el proyecto");
		location.href="colaborador.php";
		</script>';
	}
	//Cerrar conexion
?>
