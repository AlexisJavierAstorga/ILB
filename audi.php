<?php
include("conexion.php");
session_start();
if(isset($_SESSION['u_usuario'])){
}else{
  header("Location: index.php");
}

$query= "SELECT * FROM alumnos WHERE correo='".$_SESSION['u_usuario']."'";
$resultado=$con->query($query);
while ($row = $resultado->fetch_assoc()){
  ?>
  <html>
  <head>
  <title>Auditorio ILB</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
  <link rel="shortcut icon" href="logo/info.png" type="image/x-icon">
  </head>
  <style type="text/css">
  #chistes{
   position: relative;
  }
  .sobre {
   position:absolute;
   top:0px;
   left:0px;
   border:none;
  }

  .contenedor{
    position: relative;
    display: inline-block;
    text-align: center;
}

.texto-encima{
    position: absolute;
    top: 448px;
    left: 120px;
    font: 110% sans-serif;
    color: white;
}
.centrado{
    position: absolute;
    top: 492px;
    left: 138px;
    font: 120% sans-serif;
    color: white;

}
<style type="text/css">
#chistes2{
 position: relative;
}
.sobre2 {
 position:absolute;
 top:0px;
 left:0px;
 border:none;
}
  </style>
  <body>
  <a href="alumno.php">Regresar</a>
  <div id="chistes">
  <img src="credencial/Cred1.1.png" width="318" hspace="16" height="468" vspace="56" />
  <?php
  echo '<img class="sobre" src="'.$row['foto'].'" width="168" height="206" hspace="96" vspace="186"/>';
   ?>
  </div>
  <div id="chistes2">
  <img class="sobre2" src="credencial/Cred1.2.png" width="318" hspace="346" height="468" vspace="82" />
  <img class="sobre2" src="data:image/jpg;base64,<?php echo base64_encode($row['qr']); ?>" width="168" height="206" hspace="427" vspace="186"/>
  </div>

  <div class="texto-encima"><?php echo $row['nombre']," ",$row['app']?></div>
  <div class="centrado"><?php echo $row['cargo']?></div>

  </body>
  </html>

  <?php
}
 ?>
