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

  //header("Location: alumno.php");
    echo "<script>alert('Bienvenido al portal, $usuario');
    location.href='alumno.php';
    </script>";
}else{
  echo '<script>
  alert("Correo o contraseña incorrecto");
  window.history.go(-1);
  </script>';
  mysqli_close($con);
}
