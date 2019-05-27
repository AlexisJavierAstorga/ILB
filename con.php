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
							<li><a href="index.php">Inicio</a></li>
							<li><a href="reg.php">Registrar / NICIAR SESIÓN</a></li>
							<li><a href="con.php">Contacto</a></li>
							<!-- comienza otro menu -->
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
									<a href="index.php">
										<h3>Inicio</h3>
										<p>Academia de Informática 2018.</p>
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
								<header>
									<div class="title">
										<h2><a href="#">Contacto</a></h2>
										<p>Nos puedes contactar llenando el siguiente formulario.</p>
									</div>
								</header>

								<section>
									<h3>Datos del proyecto</h3>
									<form name="contactform" method="post" action="send_form_email.php">
<table width="450px"><!---Este tamaño en px es personalizable -->
<tr>
 <td valign="top">
  <label for="first_name">Nombre *</label>
 </td>
 <td valign="top">
  <input  type="text" name="first_name" maxlength="50" size="30" required>
 </td>
</tr>
<tr>
 <td valign="top">
  <label for="last_name">Apellido *</label>
 </td>
 <td valign="top">
  <input  type="text" name="last_name" maxlength="50" size="30" required>
 </td>
</tr>
<tr>
 <td valign="top">
  <label for="email">E-mail *</label>
 </td>
 <td valign="top">
  <input  type="text" name="email" maxlength="80" size="30" required>
 </td>
</tr>
<tr>
 <td valign="top">
  <label for="telephone">Teléfono</label>
 </td>
 <td valign="top">
  <input  type="text" name="telephone" maxlength="30" size="30" required>
 </td>
</tr>
<tr>
 <td valign="top">
  <label for="message">Mensaje *</label>
 </td>
 <td valign="top">
  <textarea  name="message" maxlength="1000" cols="25" rows="6" required></textarea>
 </td>
</tr>
<tr>
 <td colspan="2" style="text-align:center">
  <input type="submit" value="Enviar">
 </td>
</tr>
</table>
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
											<h2>Eventos Informática 2018</h2>
											<p>En esta Página Web podrás encontrar todo lo relacionado a los eventos que suceden en la Academia de Informática. </p>
											<p>Si eres alumno <a href="reg.php">Regístrate</a> y sube tu proyecto. </p>
										</div>
									</header>
								</section>

							<!-- Mini Posts -->
								<section>
									<div class="mini-posts">

										<!-- Mini Post -->
											<article class="mini-post">
												<header>
													<h3><a href="single.php">¿Tienes dudas de como registrar tu proyecto?</a></h3>
													<time class="published" datetime="2018-11-22">Noviembre 22, 2018</time>
													<a href="#" class="author"><img src="images/autor/avatar1.jpg" alt="" /></a>
												</header>
												<a href="duda.php" class="image"><img src="images/7mo.jpeg" alt="" height="250"/></a>
											</article>

										<!-- Mini Post
											<article class="mini-post">
												<header>
													<h3><a href="single.php">Titulo</a></h3>
													<time class="published" datetime="2015-10-20">Mes Dia, Año</time>
													<a href="#" class="author"><img src="images/avatar.jpg" alt="" /></a>
												</header>
												<a href="single.php" class="image"><img src="images/pic05.jpg" alt="" /></a>
											</article>

										-->

									</div>
								</section>

							<!-- Posts List -->
								<section>
									<h2>Proyectos</h2>
									<ul class="posts">
										<li>
											<article>
												<header>
													<h3><a href="http://rstextilnew.000webhostapp.com">R.S. Textil</a></h3>
													<time class="published" datetime="2018-11-22">Noviembre 22, 2018</time>
												</header>
												<a href="single.php" class="image"><img src="images/nov/rs.png" alt="" /></a>
											</article>
										</li>
									</ul>
								</section>

							<!-- About -->
								<section class="blurb">
									<h2>Acerca de la Academia</h2>
									<p><b>Objetivo de la licenciatura en Ciencias de la Informática</b></p>
									<p align="justify">Preparar profesionistas informáticos con un perfil ejecutivo y emprendedor que emplee la información como recurso corporativo, para brindar soluciones competitivas mediante...</p>
									<ul class="actions">
										<li><a href="acer.php" class="button">Leer más</a></li>
									</ul>
								</section>

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

		</body>
	</html>
