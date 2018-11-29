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

$type=$_FILES['corp']['type'];
$tmp_name = $_FILES['corp']["tmp_name"];
$name = $_FILES['corp']["name"];
//Creamos una nueva ruta (nuevo path)
//Así guardaremos nuestra imagen en la carpeta "images"
$nuevo_path="images/archivos/corporativa/".$name;
//Movemos el archivo desde su ubicación temporal hacia la nueva ruta
# $tmp_name: la ruta temporal del fichero
# $nuevo_path: la nueva ruta que creamos
move_uploaded_file($tmp_name,$nuevo_path);
//Extraer la extensión del archivo. P.e: jpg
# Con explode() segmentamos la cadena de acuerdo al separador que definamos. En este caso punto (.)
$array=explode('.',$nuevo_path);
# Capturamos el último elemento del array anterior que vendría a ser la extensión
$ext= end($array);

$type2=$_FILES['orga']['type'];
$tmp_name2 = $_FILES['orga']["tmp_name"];
$name2 = $_FILES['orga']["name"];
//Creamos una nueva ruta (nuevo path)
//Así guardaremos nuestra imagen en la carpeta "images"
$nuevo_path2="images/archivos/organigrama/".$name2;
//Movemos el archivo desde su ubicación temporal hacia la nueva ruta
# $tmp_name: la ruta temporal del fichero
# $nuevo_path: la nueva ruta que creamos
move_uploaded_file($tmp_name2,$nuevo_path2);
//Extraer la extensión del archivo. P.e: jpg
# Con explode() segmentamos la cadena de acuerdo al separador que definamos. En este caso punto (.)
$array2=explode('.',$nuevo_path2);
# Capturamos el último elemento del array anterior que vendría a ser la extensión
$ext2= end($array2);

$type3=$_FILES['power']['type'];
$tmp_name3 = $_FILES['power']["tmp_name"];
$name3 = $_FILES['power']["name"];
//Creamos una nueva ruta (nuevo path)
//Así guardaremos nuestra imagen en la carpeta "images"
$nuevo_path3="images/archivos/presentacion/".$name3;
//Movemos el archivo desde su ubicación temporal hacia la nueva ruta
# $tmp_name: la ruta temporal del fichero
# $nuevo_path: la nueva ruta que creamos
move_uploaded_file($tmp_name3,$nuevo_path3);
//Extraer la extensión del archivo. P.e: jpg
# Con explode() segmentamos la cadena de acuerdo al separador que definamos. En este caso punto (.)
$array3=explode('.',$nuevo_path3);
# Capturamos el último elemento del array anterior que vendría a ser la extensión
$ext3= end($array3);

$insertar = "INSERT INTO proyecto (alumno,grupo,salon,consultoria,corporativa,proyecto,descripcion,organigrama,presentacion) VALUES ('".$_SESSION['id']."','$grupo','$salon','$consultoria','$corporativa','$proyecto','$descripcion','$organigrama','$power')";


$verificar_usuario = mysqli_query($con, "SELECT * FROM proyecto WHERE proyecto = '$proyecto'");
if (mysqli_num_rows($verificar_usuario) > 0){
	echo "<script>
	alert('Este proyecto ya fue registrado ".$proyecto.", prueba con otro nombre.');
	window.history.go(-1);
	</script>";
	exit;
}

$verificar_usuario = mysqli_query($con, "SELECT * FROM proyecto WHERE consultoria = '$consultoria'");
if (mysqli_num_rows($verificar_usuario) > 0){
	echo "<script>
	alert('Esta consultoria ya fue registrada ".$consultoria.", prueba con otro nombre.');
	window.history.go(-1);
	</script>";
	exit;
}

$resultado = mysqli_query($con, $insertar);
if (!$resultado) {

	echo '<script>
	alert("Error de registro del Proyecto");
	window.history.go(-1);
	</script>';
	mysqli_close($con);

}else{
	echo "<script>alert('Se registro el Proyecto, ".$proyecto."');
	location.href='alumno.php';
	</script>";
}

?>
