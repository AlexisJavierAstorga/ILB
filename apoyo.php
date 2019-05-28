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
                <li><a href="alumno.php">Inicio</a></li>
                <li><a href="regproyecto.php">Registrar proyecto</a></li>
								<li><a href="alumnomod.php">Modificar</a></li>
								<li><a href="audi.php">Acceso Auditorio</a></li>
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
                  <a href="alumno.php">
                    <h3>Inicio</h3>
                    <p>Academia de Informática 2019.</p>
                  </a>
                </li>
                <li>
                  <a href="regproyecto.php">
                    <h3>Registrar proyecto</h3>
                    <p>Registra tu proyecto.</p>
                  </a>
                </li>
                <li>
                  <a href="alumnomod.php">
                    <h3>Modificar</h3>
                    <p>Modifica datos de tu registro.</p>
                  </a>
                </li>
                <li>
                  <a href="audi.php">
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
										<h2><a href="#">Proyectos registrados</a></h2>
										<p>Estos son los proyectos que haz registrado hasta ahora.</p>
									</div>
								</header>

								<section>
									<h3>Datos del proyecto</h3>
								</section>
                <table border="1" >
              		<tr>
              			<td align="center">Foto</td>
              			<td align="center">Puesto</td>
              			<td align="center">Consultoria</td>
                    <td align="center">Regresar</td>
              		</tr>

                    <?php
                    //$query= "SELECT * FROM proyectos WHERE id_alu='".$_SESSION['id']."'";
                    $id_proy = $_REQUEST['nombre_proy'];
                    include("conexion.php");
                    $query= "SELECT * FROM proyectos WHERE nombre_proy='$id_proy'";
                    $resultado=$con->query($query);
                    while ($row = $resultado->fetch_assoc()){
                     ?>

                    <tr>
                      <td align="center"><?php echo '<img src="'.$row['alumno'].'" width="70" height="70"/>'; ?></td>
                      <td align="center"><?php echo $row['puesto'] ?></td>
                      <td align="center"><?php echo $row['consultoria'] ?></td>
                      <td align="center"><a href='alumno.php'>Regresar</a></td></tr>
                    </tr>
                  <?php
                  }
                   ?>
                  </table>

              	</table>

							</article>

					</div>

				<!-- Sidebar -->
					<section id="sidebar">

						<!-- Intro -->
							<section id="intro">
								<a href="alumno.php" class="logo"><div align="center">
                  <?php
                  include("conexion.php");
                  $query= "SELECT * FROM alumnos WHERE correo='".$_SESSION['u_usuario']."'";
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
