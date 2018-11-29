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
  <title>Ejemplo de Superponer Imagenes</title>
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
    top: 441px;
    left: 120px;
    font: 170% sans-serif;
    color: white;
}
.centrado{
    position: absolute;
    top: 489px;
    left: 138px;
    font: 150% sans-serif;
    color: white;

}
  </style>
  <body>
  <a href="maestro.php">Regresar</a>
  <div id="chistes">
  <img src="credencial/Cred1.png" width="318" hspace="16" height="468" vspace="56" />
  <img class="sobre" src="data:image/jpg;base64,<?php echo base64_encode($row['qr']); ?>" width="168" height="206" hspace="96" vspace="186"/>
  </div>

  <div class="texto-encima"><?php echo $row['nombre']," ",$row['app']?></div>
  <div class="centrado"><?php echo $row['rol']?></div>

  </body>
  </html>

  <?php
}
 ?>
