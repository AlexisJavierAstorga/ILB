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
    <link rel="stylesheet" href="assets/css/form.css" />
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
                  <?php
  										echo "<li><a href='salir.php'><h3>Salir de la cuenta</h3></a></li>";
  								?>

								</ul>
							</section>

						<!-- Actions -->
							<section>
								<ul class="actions stacked">
									<li><a href="reg.php" class="button large fit">Registrar</a></li>
								</ul>
								<ul class="actions stacked">
									<li><a href="login.php" class="button large fit">INICIAR SESIÓN</a></li>
								</ul>
							</section>
					</section>

				<!-- Main -->
					<div id="main">


            <article class="post">

            <div class="form-style-10">
                <h1>Registra tu Proyecto<span>Llena cada campo para validar la presentación de tu proyecto en el Auditorio.</span></h1>
                <form>
                  <div class="section"><span>1</span>Grado escolar</div>
                  <div class="inner-wrap">

                    <div class="wrap-input100 validate-input" data-validate="Grupo requerido">
          						<span class="label-input100">Grupo</span>
          						<select name="grupo" required>
          					          <option value="">Selecciona tu GRUPO</option>
          					          <option value="1101 Li">1101 Li</option>
          										<option value="1201 Li">1201 Li</option>
                              <option value="1301 Li">1301 Li</option>
                              <option value="1401 Li">1401 Li</option>
                              <option value="1501 Li">1501 Li</option>
                              <option value="1601 Li">1601 Li</option>
                              <option value="1701 Li">1701 Li</option>
                              <option value="1801 Li">1801 Li</option>
          					          <!--option value="2">Estado de mexico</option -->
          					   </select>
          						 <span class="focus-input100"></span>
          					</div><br>

                    <div class="wrap-input100 validate-input" data-validate="Salón requerido">
          						<span class="label-input100">Salón</span>
          						<select name="salon" required>
          					          <option value="">Selecciona tu SALÓN</option>
          					          <option value="1101 Li">1101 Li</option>
          										<option value="1201 Li">1201 Li</option>
                              <option value="1301 Li">1301 Li</option>
                              <option value="1401 Li">1401 Li</option>
                              <option value="1501 Li">1501 Li</option>
                              <option value="1601 Li">1601 Li</option>
                              <option value="1701 Li">1701 Li</option>
                              <option value="1801 Li">1801 Li</option>
          					          <!--option value="2">Estado de mexico</option -->
          					   </select>
          						 <span class="focus-input100"></span>
          					</div>
                  </div>

                  <div class="section"><span>2</span>Datos del Proyecto</div>
                  <div class="inner-wrap">
                    <span>Nombre de la Consultoría <input type="text" name="consul" placeholder="Nombre de la Consultoría..." required/></span><br>
                    <span>Imagen Corporativa<br><br> <input id="file" type="file" name="foto" required/>
                      <div id="preview">DIMENSIONES 900X600 cm</div>
                    </span><br>
                    <span>Nombre del Proyecto <input type="text" name="proy" placeholder="Nombre del Proyecto..." required/></span><br>
                    <span>Breve Descripción del Proyecto <br><textarea name="desc" rows="4" cols="50" placeholder="Descripción..." required/></textarea></span><br>
                    <span>Organigrama<br><br> <input id="file" type="file" name="organi" required/>
                      <div id="preview">DIMENSIONES 900X600 cm</div>
                    </span><br>
                  </div>

                  <div class="section"><span>3</span>Presentación</div>
                  <div class="inner-wrap">
                    <span>Presentación en Power Point<br><br> <input id="file" type="file" name="power" required/>
                      <div id="preview"></div>
                    </span><br>
                    <span>Link de Video en YouTube <input type="text" name="youtube" placeholder="https://www.youtube.com/?hl=es-419&gl=MX" required/></span><br>
                  </div>
                  <div class="button-section">
                    <input type="submit" value="Registrar proyecto" name="Sign Up" />

                  </div>
                </form>
              </div>
            </article>



					</div>

				<!-- Sidebar -->
					<section id="sidebar">

						<!-- Intro -->
							<section id="intro">
								<a href="index.php" class="logo"><div align="center"><img src="logo/info.png" alt="" /></div></a>
								<header>
									<div align="center">

										<?php
											echo "tu foto es: <img src='/".$_SESSION['f_foto']."'>";
										 ?>

										<h2>
											<?php
									      echo $_SESSION['nombre'], '&nbsp', $_SESSION['apellidoPat'], '&nbsp', $_SESSION['apellidoMat'];
									  ?>
									</h2>

									<?php
										echo $_SESSION['u_usuario'];
								?>



									</div>
								</header>
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

	</body>
</html>
