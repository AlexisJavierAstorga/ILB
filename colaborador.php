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
								<li><a href="mod.php">Modificar</a></li>
								<li><a href="audi.php">Acceso Auditorio</a></li>
								<li><a href="conlog.php">Contacto</a></li>
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
                    <p>Academia de Informática 2018.</p>
                  </a>
                </li>
                <li>
                  <a href="mod.php">
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
                <li>
                  <a href="con.php">
                    <h3>Contacto</h3>
                    <p>Contacto con la intalación del ILB Centro.</p>
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
									<h3>Datos del proyecto</h3>
									<form action="regproy.php" name="formulario" method="post">
										<div class="row gtr-uniform">

                      <div class="col-12">
												<select name="demo-category" id="demo-category">
													<option value="">- Selecciona un proyecto -</option>
                          <?
                          session_start();
                          include("conexion.php");
                 $consulta="select * from proyecto";
                 $resultado=mysqli_query($con,$consulta);

                        while($lista=mysqli_fetch_array($resultado)){

	    ?>
                   <option>  <? echo $lista['proyecto']?></option>
    <? } ?>
												</select>
											</div>

                      <div class="col-12 col-12-xsmall">
                        <h4>*Líder</h4>
												<input type="text" name="lider" id="demo-grupo" value="" placeholder="Líder del proyecto..." required disabled/>
											</div>

											<div class="col-6 col-12-xsmall">
                        <h4>*Grupo</h4>

												<input type="text" name="grupo" id="demo-grupo" value="" required disabled/>
											</div>

											<div class="col-6 col-12-xsmall">
                        <h4>*Salón</h4>
												<input type="text" name="salon" id="demo-salon" value="" required disabled/>
											</div>

                      <div class="col-6 col-12-xsmall">
                        <br><h4>*Nombre de la consultoría</h4>
												<input type="text" name="consul" id="demo-grupo" value="" required disabled/>
											</div>

                      <div class="col-6 col-12-xsmall">
                        <br><h4>*Nombre del proyecto</h4>
												<input type="text" name="proy" id="demo-proy" value="" required disabled/>
											</div>

											<div class="col-12">
                        <br><h4>*Breve descripción del proyecto</h4>
												<textarea name="desc" id="demo-desc" rows="4" disabled></textarea>
											</div>

											<div class="col-12">
                        <br>
												<ul class="actions">
													<li><input type="submit" value="Registrarte en el proyecto" /></li>
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
								<a href="index.php" class="logo"><div align="center"><img src="logo/info.png" alt="" /></div></a>
								<header>
									<div align="center">

                    <h2>Bienvenido</h2>

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
