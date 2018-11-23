<?php
include("conexion.php");
session_start();
$grupo = $_POST["grupo"];
//$municipio = $_POST["municipio"];
$salon = $_POST["salon"];
$consultoria = $_POST["consul"];
$corporativa = $_POST["corp"];
$proyecto = $_POST["proy"];
$descripcion = $_POST["desc"];
$organigrama = $_POST["orga"];
$power = $_POST["power"];

$insertar = "INSERT INTO proyecto (grupo,salon,consultoria,corporativa,proyecto,descripcion,organigrama,presentacion) VALUES ('$grupo','$salon','$consultoria','$corporativa','$proyecto','$descripcion','$organigrama','$power')";

$resultado = mysqli_query($con, $insertar);
if (!$resultado) {

	echo '<script>
	alert("Error al registrar proyecto");
	window.history.go(-1);
	</script>';
	mysqli_close($con);
}else{
	echo '<script>
	alert("Muy bien, ya está registrado tu proyecto");
	location.href="alumno.php";
	</script>';
}
?>
