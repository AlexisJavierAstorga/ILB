<?php
session_start();
include("conexion.php");
if(isset($_SESSION['u_usuario'])){
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

	$modificar = " UPDATE proyecto SET rupo='$grupo',salon='$salon',consultoria='$consultoria',corporativa='$corporativa',proyecto='$proyecto',descripcion='$descripcion',organigrama='$organigrama',presentacion='$power' WHERE alumno='".$_SESSION["id"]."'";

	$resultado=$con->query($modificar);

	if ($resultado) {
		echo "<script>
		alert('Proyecto modificado a ".$proyecto."');
		location.href='alumnomod.php';
		</script>";
	}else{
		echo "<script>
		alert('Error al modificar proyecto');
		window.history.go(-1);
		</script>";
		mysqli_close($con);
	}

	//Cerrar conexion
}
?>
