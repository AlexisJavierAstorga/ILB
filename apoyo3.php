<?php
session_start();
if(isset($_SESSION['u_usuario'])){
}else{
  header("Location: index.php");
}
?>
<!DOCTYPE HTML>
<!--
	Future Imperfect by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Auditorio ILB</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="shortcut icon" href="logo/info.png" type="image/x-icon">
		<!--
			Script notificaciones
		-->

	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
        <header id="header">
          <h1><a href="index.php">Instituto Leonardo Bravo</a></h1>
          <nav class="links">
            <ul>
              <li><a href="maestro.php">Inicio</a></li>
              <li><a href="#">Modificar</a></li>
              <li><a href="audimaes.php">Acceso Auditorio</a></li>
              <!-- Fin -->
              <?php
                  echo "<li><a href='salir.php'>Salir de la cuenta</a></li>";
              ?>
            </ul>
          </nav>
          <nav class="main">
            <ul>
              <li class="menu">
                <a class="fa-bars" href="#menu">Menú</a>
              </li>
            </ul>
          </nav>
        </header>

				<!-- Menu -->
        <section id="menu">

          <!-- Links -->
          <section>
            <ul class="links">
              <li>
                <a href="maestro.php">
                  <h3>Inicio</h3>
                  <p>Academia de Informática 2019.</p>
                </a>
              </li>
              <li>
                <a href="#">
                  <h3>Modificar</h3>
                  <p>Modifica datos de tu registro.</p>
                </a>
              </li>
              <li>
                <a href="audimaes.php">
                  <h3>Acceso Auditorio</h3>
                  <p>En este apartado encontrarás tu gafete para el acceso al Auditorio.</p>
                </a>
              </li>
            </ul>
          </section>

          <!-- Actions -->
            <section>
              <ul class="actions stacked">
                <li><a href="salir.php" class="button large fit">Salir de la cuenta</a></li>
              </ul>
            </section>
        </section>

				<!-- Main -->
        <div id="main">

            <article class="post">
              <header>
                <div class="title">
                  <h2><a href="#">Registra tu proyecto</a></h2>
                  <p>Llena cada campo para validar la presentación de tu proyecto en el Auditorio.</p>
                </div>
              </header>

              <section>
                <h3>Datos del alumno</h3>
                <form action="#" name="formulario" method="post" enctype="multipart/form-data">
                  <div class="row gtr-uniform">

                    <div class="col-6 col-12-xsmall">
                      <h4>Foto</h4>
                      <?php
                      include("conexion.php");
                      $query= "SELECT * FROM alumnos WHERE correo='".$_SESSION['u_usuario']."'";
                      $resultado=$con->query($query);
                      while ($row = $resultado->fetch_assoc()){
                      echo '<input type="text" name="alumno" value="'.$row['foto'].'" readonly=""/>'.'<br>';
                    }
                      ?>

                    </div>

                    <div class="col-6 col-12-xsmall">
                      <h4>Correo</h4>
                      <?php
                      include("conexion.php");
                      $query= "SELECT * FROM alumnos WHERE correo='".$_SESSION['u_usuario']."'";
                      $resultado=$con->query($query);
                      while ($row = $resultado->fetch_assoc()){
                      echo '<input type="text" name="correo" value="'.$row['correo'].'" readonly=""/>'.'<br>';
                      }
                      ?>
                    </div>




                    <div class="col-6 col-12-xsmall">
                      <h3>Datos del proyecto</h3>
                      <div class="col-6 col-12-xsmall">
                        <h4>Puesto</h4>
                        <?php
                        include("conexion.php");
                        $query= "SELECT * FROM alumnos WHERE correo='".$_SESSION['u_usuario']."'";
                        $resultado=$con->query($query);
                        while ($row = $resultado->fetch_assoc()){
                        echo '<input type="text" name="puesto" value="'.$row['puesto'].'" readonly=""/>'.'<br>';
                        }
                        ?>
                      </div>
                      <br><h4>Nombre de la consultoría</h4>
                      <?php
                      $id_proy = $_REQUEST['id_proy'];
                      include("conexion.php");
                      $query= "SELECT * FROM proyectos WHERE id_proy='$id_proy'";
                      $resultado=$con->query($query);
                      while ($row = $resultado->fetch_assoc()){
                      echo '<input type="text" name="consul" value="'.$row['consultoria'].'" readonly=""/>'.'<br>';
                      }
                      ?>
                    </div>

                    <div class="col-10 col-12-xsmall">
                      <br><h4>Imagen Corporativa</h4>
                      <?php
                      $id_proy = $_REQUEST['id_proy'];
                      include("conexion.php");
                      $query= "SELECT * FROM proyectos WHERE id_proy='$id_proy'";
                      $resultado=$con->query($query);
                      while ($row = $resultado->fetch_assoc()){
                      echo '<img src="'.$row['corporativa'].'" width="150" height="150"/>'.'<br>';
                      echo '<input type="text" name="corp" value="'.$row['corporativa'].'" readonly=""/>'.'<br>';
                      }
                      ?>
                    </div>

                    <div class="col-6 col-12-xsmall">
                      <br><h4>Nombre del proyecto</h4>
                      <?php
                      $id_proy = $_REQUEST['id_proy'];
                      include("conexion.php");
                      $query= "SELECT * FROM proyectos WHERE id_proy='$id_proy'";
                      $resultado=$con->query($query);
                      while ($row = $resultado->fetch_assoc()){
                      echo '<input type="text" name="proy" value="'.$row['nombre_proy'].'" readonly=""/>'.'<br>';
                      }
                      ?>
                    </div>

                    <div class="col-12">
                      <br><h4>Breve descripción del proyecto</h4>
                      <?php
                      $id_proy = $_REQUEST['id_proy'];
                      include("conexion.php");
                      $query= "SELECT * FROM proyectos WHERE id_proy='$id_proy'";
                      $resultado=$con->query($query);
                      while ($row = $resultado->fetch_assoc()){
                      echo '<input type="text" name="desc" value="'.$row['descripcion'].'" readonly=""/>'.'<br>';
                      }
                      ?>

                    </div>

                    <div class="col-10 col-12-xsmall">
                      <br><h4>Organigrama</h4>
                      <?php
                      $id_proy = $_REQUEST['id_proy'];
                      include("conexion.php");
                      $query= "SELECT * FROM proyectos WHERE id_proy='$id_proy'";
                      $resultado=$con->query($query);
                      while ($row = $resultado->fetch_assoc()){
                      echo '<img src="'.$row['organigrama'].'" width="150" height="150"/>'.'<br>';
                      echo '<input type="text" name="orga" value="'.$row['organigrama'].'" readonly=""/>'.'<br>';
                      }
                      ?>
                    </div>

                    <div class="col-12">
                      <br>
                      <ul class="actions">
                        <li><input type="submit" value="Registrar proyecto" onClick="history.back()"/></li>
                      </ul>
                    </div>
                  </div>
                </form>
              </section>

            </article>

        </div>

				<!-- Sidebar -->
					<section id="sidebar">

						<!-- Intro -->
							<section id="intro">
								<a href="colaborador.php" class="logo"><div align="center">
                  <?php
                  include("conexion.php");
                  $query= "SELECT * FROM maestro WHERE correo='".$_SESSION['u_usuario']."'";
                  $resultado=$con->query($query);
                  while ($row = $resultado->fetch_assoc()){
                  echo '<img src="'.$row['foto'].'" width="30" height="200">'.'<br>';
                }
                  ?>

                </div></a>
								<header>
									<div align="center">

                    <h2>Bienvenid@</h2>

                    <h1>
											<?php
									      echo $_SESSION['nombre'], '&nbsp', $_SESSION['apellidoPat'], '&nbsp', $_SESSION['apellidoMat'];
									  ?>
									</h1>

									<?php
										echo $_SESSION['u_usuario'];
								?>
									</div>
								</header>
							</section>

						<!-- Mini Posts -->


						<!-- Posts List -->


						<!-- About -->


						<!-- Footer -->
							<section id="footer">
                <h2>Redes Sociales</h2>
                <ul class="icons">

    							<!--
    							<li><a href="#" class="fa-twitter"><span class="label">Twitter</span></a></li>
    							<li><a href="#" class="fa-instagram"><span class="label">Instagram</span></a></li>
    							<li><a href="#" class="fa-rss"><span class="label">RSS</span></a></li>
    							<li><a href="#" class="fa-envelope"><span class="label">Email</span></a></li>

    							-->

    							<li><a href="https://www.facebook.com/ILBoficial/" class="fa-facebook"><span class="label">Facebook</span></a></li>
    						</ul>
    						<p class="copyright">&copy; CODNAK. Diseñado por: <a href="#">Astorga</a>.</p>
							</section>

					</section>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
      <script src="assets/js/foto.js"></script>
      <script src="assets/js/foto2.js"></script>

	</body>
</html>
