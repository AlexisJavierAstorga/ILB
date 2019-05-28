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
										<h2><a href="#">Modifica tu perfil en proceso...</a></h2>
										<p>Cambia datos que creas necesarios.</p>
									</div>
								</header>
                <!--
								<section>
									<h3>Datos del alumno</h3>
									<form action="updatealu.php" name="formulario" method="post">
										<div class="row gtr-uniform">

                      <?php
                      include("conexion.php");

                      $result = mysqli_query($con, "SELECT * FROM alumnos WHERE id_alu='".$_SESSION['id']."'");

                      if ($row = mysqli_fetch_array($result)){
                        /*echo "<table border = '1'><tr><td>ID Venta</td><td>Correo</td><td>ID Producto</td><td>Nombre producto</td><td>Talla</td><td>Cantidad del producto</td><td>Total venta</td><td>Fecha de compra</td></tr>";*/
                      }
                            /*echo "<tr><td>".$row["IDVEN"]."</td><td>".$row["correo"]."</td><td>".$row["IDPROD"]."</td><td>".$row["nombre"]."</td><td>".$row["talla"]."</td><td>".$row["cantidadProducto"]."</td><td>".$row["totalVenta"]."</td><td>".$row["fechaCompra"]."</td></tr> \n";
                          }while ($row = mysqli_fetch_array($result));
                         echo "</table> \n";
                      }else {
                      echo "¡ No haz realizado compras !";
                      }*/

                        ?>

											<div class="col-6 col-12-xsmall">
                        <h4>Nombre</h4>
                        <?php
                        echo "<input type='text' value='".$row['nombre']."' pattern='[A-Za-z0-9_-]{1,30}'>";
                        ?>
											</div>

											<div class="col-6 col-12-xsmall">
                        <h4>Apellido Paterno</h4>
                        <?php
                        echo "<input type='text' value='".$row['app']."' pattern='[A-Za-z0-9_-]{1,30}'>";
                        ?>
											</div>

                      <div class="col-6 col-12-xsmall">
                        <br><h4>Apellido Materno</h4>
                        <?php
                        echo "<input type='text' value='".$row['apm']."' pattern='[A-Za-z0-9_-]{1,30}'>";

                        echo "<label for='name'>Grupo</label>";
  											echo "<select name='grupo' id='LISTA'>
  										          <option value='' selected>".$row['grupo']."</option>
  															<option value='1101'>1101</option>
  										          <option value='1201'>1201</option>
  															<option value='1301'>1301</option>
  															<option value='1401'>1401</option>
  															<option value='1501'>1501</option>
  															<option value='1601'>1601</option>
  															<option value='1701'>1701</option>
  															<option value='1801'>1801</option>
  										   </select>";
                        ?>
											</div>


											<div class="col-12">
                        <br>
												<ul class="actions">
                          <?php
                              echo "<a href='updatealu.php'><button class='btn btn-default'><span>Modificar</span></button></a>";
                          ?>
												</ul>
											</div>
										</div>
									</form>
								</section>

							</article>
            -->
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
