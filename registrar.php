<?php
session_start();
include("conexion.php");
$rol = $_POST["rol"];
$nombre = $_POST["username"];
$apellidoPaterno = $_POST["apellidoPat"];
$apellidoMaterno = $_POST["apellidoMat"];
$correo = $_POST["email"];
$password = $_POST["password"];

$type=$_FILES['foto']['type'];
$tmp_name = $_FILES['foto']["tmp_name"];
$name = $_FILES['foto']["name"];
//Creamos una nueva ruta (nuevo path)
//Así guardaremos nuestra imagen en la carpeta "images"
$nuevo_path="images/archivos/alumnos/".$name;
//Movemos el archivo desde su ubicación temporal hacia la nueva ruta
# $tmp_name: la ruta temporal del fichero
# $nuevo_path: la nueva ruta que creamos
move_uploaded_file($tmp_name,$nuevo_path);
//Extraer la extensión del archivo. P.e: jpg
# Con explode() segmentamos la cadena de acuerdo al separador que definamos. En este caso punto (.)
$array=explode('.',$nuevo_path);
# Capturamos el último elemento del array anterior que vendría a ser la extensión
$ext= end($array);

/*Imprimimos un texto de subida exitosa.
echo "<h3>La imagen se subio correctamente</h3>";
// Los posible valores que puedes obtener de la imagen son:
echo "<b>Info de la imagen subida:</b>";
echo "<br> Nombre: ".$_FILES['foto']["name"];      //nombre del archivo
echo "<br> Tipo: ".$_FILES['foto']["type"];      //tipo
echo "<br> Nombre Temporal: ".$_FILES['foto']["tmp_name"];  //nombre del archivo de la imagen temporal
echo "<br> Tamanio: ".$_FILES['foto']["size"]." bytes";      //tamaño
*/

/*---------------------------- Códifo Qr ----------------------*/
require('phpqrcode/qrlib.php');

if(isset($_POST['generar'])){

  if(!empty($_POST['email'])){

    $dir = 'images/archivos/qr/';

    if(!file_exists($dir))
    mkdir($dir);{
      $email = $_POST['email'];
      //$tam = htmlentities($_POST['tam']);
      //$niv = htmlentities($_POST['niv']);
      $filename = $dir.''.$email.'.png';
      $marco = 3;

        QRcode::png($email, $filename, QR_ECLEVEL_L, 5, $marco);
        echo '<img src="'.$filename.'" aling="left" />';
    }
  }
}



	$insertar = " INSERT INTO alumnos (foto, rol, nombre, app, apm, correo, pass, qr) VALUES ('$name','$rol','$nombre','$apellidoPaterno','$apellidoMaterno','$correo','$password','$filename')";

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
	//Cerrar conexion
?>
