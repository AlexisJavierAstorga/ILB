<?php
session_start();

$usuario=$_POST['email'];
$password=$_POST['password'];

include("conexion.php");

$proceso = $con->query("SELECT * FROM alumnos WHERE correo = '$usuario' AND pass = '$password' ");

if($resultado = mysqli_fetch_array($proceso)){

  $_SESSION['id'] = $resultado['id_alu'];
  $_SESSION['f_foto'] = $resultado['foto'];
  $_SESSION['r_rol'] = $resultado['rol'];
  $_SESSION['nombre'] = $resultado['nombre'];
  $_SESSION['apellidoPat'] = $resultado['app'];
  $_SESSION['apellidoMat'] = $resultado['apm'];
  $_SESSION['u_usuario'] = $resultado['correo'];
  $_SESSION['password'] = $resultado['pass'];
  $_SESSION['Qr'] = $resultado['qr'];

  //header("Location: alumno.php");
    /*echo "<script>alert('Bienvenido al portal, $usuario');
    location.href='alumno.php';
    </script>";*/
if($_SESSION['r_rol'] == 'lider'){
echo "<script>alert('Bienvenido al portal, ".$_SESSION['nombre'].", ".$_SESSION['apellidoPat'].", ".$_SESSION['apellidoMat']."');
location.href='alumno.php';
</script>"; // No se puede enviar más de un header a la vez, por eso eliminé el otro header.
}elseif($_SESSION['r_rol'] == 'colaborador'){
echo "<script>alert('Bienvenido al portal, ".$_SESSION['nombre'].", ".$_SESSION['apellidoPat'].", ".$_SESSION['apellidoMat']."');
location.href='colaborador.php';
</script>";
}

}


//vemos si el usuario y contraseña son válidos
if ($_SESSION['r_rol'] == 'maestro' && $_POST["password"]=="&maestro2018!#&"){
//usuario y contraseña válidos
//se define una sesion y se guarda el dato session_start();
echo "<script>alert('Bienvenido al portal maestro, ".$_SESSION['nombre'].", ".$_SESSION['apellidoPat'].", ".$_SESSION['apellidoMat']."');
location.href='maestro.php';
</script>";

}else{
  echo '<script>
  alert("Correo o contraseña incorrecto");
  window.history.go(-1);
  </script>';
  mysqli_close($con);
}
?>
