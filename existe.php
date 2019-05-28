<?php
session_start();
/*
$_SESSION['id'] = $resultado['id_alu'];
$_SESSION['id_maes'] = $resultado['id_maes'];
$_SESSION['id_visi'] = $resultado['id_visi'];
$_SESSION['foto'] = $resultado['foto'];
$_SESSION['nombre'] = $resultado['nombre'];
$_SESSION['apellidoPat'] = $resultado['app'];
$_SESSION['apellidoMat'] = $resultado['apm'];
$_SESSION['grupo'] = $resultado['grupo'];
$_SESSION['grado'] = $resultado['grado'];
$_SESSION['cargo'] = $resultado['cargo'];
$_SESSION['puesto'] = $resultado['puesto'];
$_SESSION['u_usuario'] = $resultado['correo'];
$_SESSION['password'] = $resultado['pass'];
$_SESSION['eqv'] = $resultado['eqv'];
*/
$usuario=$_POST['email'];
$password=$_POST['password'];

include("conexion.php");

$proceso = $con->query("SELECT * FROM alumnos WHERE correo = '$usuario' AND pass = '$password' ");

if($resultado = mysqli_fetch_array($proceso)){

  $_SESSION['id'] = $resultado['id_alu'];
  $_SESSION['foto'] = $resultado['foto'];
  $_SESSION['nombre'] = $resultado['nombre'];
  $_SESSION['apellidoPat'] = $resultado['app'];
  $_SESSION['apellidoMat'] = $resultado['apm'];
  $_SESSION['grupo'] = $resultado['grupo'];
  $_SESSION['grado'] = $resultado['grado'];
  $_SESSION['cargo'] = $resultado['cargo'];
  $_SESSION['puesto'] = $resultado['puesto'];
  $_SESSION['u_usuario'] = $resultado['correo'];
  $_SESSION['password'] = $resultado['pass'];
  //header("Location: alumno.php");
    /*echo "<script>alert('Bienvenido al portal, $usuario');
    location.href='alumno.php';
    </script>";*/
if($_SESSION['cargo'] == 'Lider'){
echo "<script>alert('Bienvenido al portal lider, ".$_SESSION['nombre'].", ".$_SESSION['apellidoPat'].", ".$_SESSION['apellidoMat']."');
location.href='alumno.php';
</script>"; // No se puede enviar más de un header a la vez, por eso eliminé el otro header.
}elseif($_SESSION['cargo'] == 'Otro'){
echo "<script>alert('Bienvenido al portal colaborador, ".$_SESSION['nombre'].", ".$_SESSION['apellidoPat'].", ".$_SESSION['apellidoMat']."');
location.href='colaborador.php';
</script>";
}else{
  echo '<script>
  alert("Correo o contraseña incorrecto");
  window.history.go(-1);
  </script>';
  mysqli_close($con);
}
}
?>
