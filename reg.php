<!DOCTYPE HTML>
<!--
	Dimension by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Auditorio ILB</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="reg/assets/css/main.css" />
		<link rel="shortcut icon" href="logo/info.png" type="image/x-icon">
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<div class="logo">
							<span class="icon fa-users"></span>
						</div>
						<div class="content">
							<div class="inner">
								<h1>Bienvenid@</h1>
								<p>Les recordamos que si no tienen una cuenta ¡realicenla!, los INVITADOS también pueden asistir al evento solo regístrense.<br/>
								Si tienen dudas de como realizar su registro <a href="duda.php">CLICK AQUÍ</a> para resolver tus dudas.</p>
							</div>
						</div>
						<nav>Registros
							<ul>
								<li><a href="#intro">Alumnos</a></li>
								<li><a href="#work">Invitados</a></li>
								<li><a href="#about">Maestros</a></li>
								<!--<li><a href="#elements">Elements</a></li>-->
							</ul>
						</nav>
							<div class="content">
							</div>
							<nav>Inicio de Sesiones
								<ul>
									<li><a href="#contact">Login Alumno</a></li>
									<li><a href="#contact2">Login Maestro</a></li>
									<li><a href="#contact3">Login Invitado</a></li>
									<li><a href="index.php">Salir</a></li>
									<!--<li><a href="#elements">Elements</a></li>-->
								</ul>
							</nav>

					</header>

				<!-- Main -->
					<div id="main">

						<!-- Intro -->
							<article id="intro">
								<h2 class="major">Registro Alumnos</h2>
								<h2 class="major">Sin acentos</h2>
								<form action="reg_alu.php" method="post" enctype="multipart/form-data">
									<div class="fields">
										<div class="field half">
											<label for="foto">Foto para gafete</label>
											<input id="file" type="file" name="foto" required/>
										</div>
										<div class="field half">
											<label for="name">Nombre</label>
											<input type="text" name="name" id="name" placeholder="Escribe solo un nombre" pattern="[A-Za-z0-9_ -]{1,30}" required/>
										</div>
										<div class="field half">
											<label for="name">Apellido Paterno</label>
											<input type="text" name="app" id="name" placeholder="Escribe tu apellido paterno" pattern="[A-Za-z0-9_ -]{1,30}" required/>
										</div>
										<div class="field half">
											<label for="name">Apellido Materno</label>
											<input type="text" name="apm" id="name" placeholder="Escribe tu apellido materno" pattern="[A-Za-z0-9_ -]{1,30}" required/>
										</div>
										<div class="field half">
											<label for="name">Grupo</label>
											<select name="grupo" id="LISTA" required>
										          <option value="" selected disabled>Grupos</option>
															<option value="1101">1101</option>
										          <option value="1201">1201</option>
															<option value="1301">1301</option>
															<option value="1401">1401</option>
															<option value="1501">1501</option>
															<option value="1601">1601</option>
															<option value="1701">1701</option>
															<option value="1801">1801</option>
										          <!--option value="2">Estado de mexico</option -->
										   </select>
										</div>
										<div class="field half">
											<label for="name">Grado</label>
											<select name="grado" id="LISTA" required>
															<option value="" selected disabled>Nieveles</option>
															<option value="Licenciatura">Licenciatura</option>
															<option value="Bachillerato">Bachillerato</option>
															<!--option value="2">Estado de mexico</option -->
											 </select>
										</div>
										<div class="field half">
											<label for="name">Cargo</label>
											<select name="id_categoria" id="id_categoria" required>
															<option value="" selected disabled>Selecciona tu Rol</option>
															<option value="Lider">Líder</option>
															<option value="Otro">Otro</option>
															<!--option value="2">Estado de mexico</option -->
											 </select>
										</div>
										<div class="field half">
											<label for="name">Puesto</label>
											<select name="puesto" id="id_input" required>
															<option value="-" selected>Selecciona tu Puesto</option>
															<option value="Administrador de Proyectos">Administrador de Proyectos</option>
															<option value="Sponsor">Sponsor</option>
															<option value="Analista de Sistemas">Analista de Sistemas</option>
															<option value="Diseñador de Sistemas">Diseñador de Sistemas</option>
															<option value="Base de datos">Base de Datos</option>
															<option value="Programador SeniorSenior lo más">Programador Senior</option>
															<option value="Programador Junior">Programador Junior</option>
															<option value="Programador Web">Programador Web</option>
															<option value="Tester de Sistemas">Tester de Sistemas</option>
															<option value="Staff">Staff</option>
															<option value="Business Intelligence">Business Intelligence</option>
															<!--option value="2">Estado de mexico</option -->
											 </select>
										</div>
										<div class="field half">
											<label for="email">Correo</label>
											<input type="text" name="email" id="email" placeholder="ejemplo@hotmail.com" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required/>
										</div>
										<div class="field half">
											<label for="email">Contraseña</label>
											<input type="password" name="password" id="password" placeholder="MAX 15 CARACTERES" title="Recuerda bien tu contraseña." value="" pattern="[A-Za-z0-9_ -]{1,15}" required/>
										</div>
										<div class="field half">
											<label for="email">Confirmar contraseña</label>
											<input type="password" name="repeat-pass" id="confirm_password" value="" pattern="[A-Za-z0-9_ -]{1,15}" required/>
										</div>
									</div>
									<ul class="actions">
										<li><input type="submit" value="Registrar" name="btn" class="primary" /></li>
										<li><input type="reset" value="Limpiar" /></li>
									</ul>
								</form>
							</article>

						<!-- Work -->
							<article id="work">
								<h2 class="major">Registro Invitados</h2>
								<h2 class="major">Sin acentos</h2>
								<form method="post" action="reg_inv.php" enctype="multipart/form-data">
									<div class="fields">
										<div class="field half">
											<label for="name">Foto para gafete</label>
											<input id="file" type="file" name="foto" required/>
										</div>
										<div class="field half">
											<label for="name">Nombre</label>
											<input type="text" name="name" id="name" placeholder="Escribe tu nombre" pattern="[A-Za-z0-9_ -]{1,30}" required/>
										</div>
										<div class="field half">
											<label for="name">Apellido Paterno</label>
											<input type="text" name="app" id="name" placeholder="Escribe tu apellido paterno" pattern="[A-Za-z0-9_ -]{1,30}" required/>
										</div>
										<div class="field half">
											<label for="name">Apellido Materno</label>
											<input type="text" name="apm" id="name" placeholder="Escribe tu apellido materno" pattern="[A-Za-z0-9_ -]{1,30}" required/>
										</div>
										<div class="field half">
											<label for="email">Correo</label>
											<input type="text" name="email" id="email" placeholder="ejemplo@hotmail.com" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required/>
										</div>
										<div class="field half">
											<label for="name">Equipo a visitar</label>
											<select name="eqv" id="LISTA" required>
												<option value="-" selected>Selecciona el equipo</option>
										          <?php
																include("conexion.php");
																	$sql = "SELECT * FROM proyectos";
																	$rec = mysqli_query($con, $sql);
																	while ($row=mysqli_fetch_array($rec)) {
																		echo "<option>";
																		echo $row['consultoria'];
																		echo "</option>";
																		// code...
																	}
															 ?>
										          <!--option value="2">Estado de mexico</option -->
										   </select>
										</div>
										<div class="field half">
											<label for="email">Contraseña</label>
											<input type="password" name="password" id="password" placeholder="MAX 15 CARACTERES" title="Recuerda bien tu contraseña." pattern="[A-Za-z0-9_ -]{1,15}" value="" required/>
										</div>
										<div class="field half">
											<label for="email">Confirmar contraseña</label>
											<input type="password" name="repeat-pass" id="confirm_password" value="" pattern="[A-Za-z0-9_ -]{1,15}" required/>
										</div>
									</div>
									<ul class="actions">
										<li><input type="submit" value="Registrar" class="primary" name="btn-2"/></li>
										<li><input type="reset" value="Limpiar" /></li>
									</ul>
								</form>
							</article>

						<!-- About -->
							<article id="about">
								<h2 class="major">Registro Maestros</h2>
								<h2 class="major">Sin acentos</h2>
								<form method="post" action="reg_maes.php" enctype="multipart/form-data">
									<div class="fields">
										<div class="field half">
											<label for="name">Foto para gafete</label>
											<input id="file" type="file" name="foto" required/>
										</div>
										<div class="field half">
											<label for="name">Nombre</label>
											<input type="text" name="name" id="name" placeholder="Escribe tu nombre" pattern="[A-Za-z0-9_ -]{1,30}" required/>
										</div>
										<div class="field half">
											<label for="name">Apellido Paterno</label>
											<input type="text" name="app" id="name" placeholder="Escribe tu apellido paterno" pattern="[A-Za-z0-9_ -]{1,30}" required/>
										</div>
										<div class="field half">
											<label for="name">Apellido Materno</label>
											<input type="text" name="apm" id="name" placeholder="Escribe tu apellido materno" pattern="[A-Za-z0-9_ -]{1,30}" required/>
										</div>
										<div class="field half">
											<label for="email">Correo</label>
											<input type="text" name="email" id="email" placeholder="ejemplo@hotmail.com" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required/>
										</div>
										<div class="field half">
											<label for="email">Contraseña</label>
											<input type="password" name="password" id="password" placeholder="MAX 15 CARACTERES" title="Recuerda bien tu contraseña." pattern="[A-Za-z0-9_ -]{1,15}" value="" required/>
										</div>
										<div class="field half">
											<label for="email">Confirmar contraseña</label>
											<input type="password" name="repeat-pass" id="confirm_password" value="" pattern="[A-Za-z0-9_ -]{1,15}" required/>
										</div>
										<div class="field half">
											<label for="email">PIN de maestros</label>
											<input type="password" name="pin" id="password" title="Recuerda bien tu contraseña." pattern="5678987654323ILB" value="" required/>
										</div>
									</div>
									<ul class="actions">
										<li><input type="submit" value="Registrar" class="primary" name="btn-3"/></li>
										<li><input type="reset" value="Limpiar" /></li>
									</ul>
								</form>
							</article>

						<!-- Contact -->
							<article id="contact">
								<h2 class="major">Iniciar Sesión Alumno</h2>
								<form method="post" action="existe.php">
									<div class="fields">
										<div class="field half">
											<label for="name">Correo</label>
											<input type="text" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required />
										</div>
										<div class="field half">
											<label for="email">Contraseña</label>
											<input type="password" name="password" pattern="[A-Za-z0-9_ -]{1,15}" required />
										</div>
									</div>
									<ul class="actions">
										<li><input type="submit" value="Iniciar Sesión" class="primary" /></li>
									</ul>
								</form>
							</article>
							<article id="contact2">
								<h2 class="major">Iniciar Sesión Maestro</h2>
								<form method="post" action="existe2.php">
									<div class="fields">
										<div class="field half">
											<label for="name">Correo</label>
											<input type="text" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required />
										</div>
										<div class="field half">
											<label for="email">Contraseña</label>
											<input type="password" name="password" pattern="[A-Za-z0-9_-]{1,30}" required />
										</div>
									</div>
									<ul class="actions">
										<li><input type="submit" value="Iniciar Sesión" class="primary" /></li>
									</ul>
								</form>
							</article>
							<article id="contact3">
								<h2 class="major">Iniciar Sesión Invitado</h2>
								<form method="post" action="existe3.php">
									<div class="fields">
										<div class="field half">
											<label for="name">Correo</label>
											<input type="text" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required />
										</div>
										<div class="field half">
											<label for="email">Contraseña</label>
											<input type="password" name="password" pattern="[A-Za-z0-9_-]{1,30}" required />
										</div>
									</div>
									<ul class="actions">
										<li><input type="submit" value="Iniciar Sesión" class="primary" /></li>
									</ul>
								</form>
							</article>

						<!-- Elements -->


					</div>

				<!-- Footer -->
					<footer id="footer">
						<p class="copyright">Desarrollado por: Alexis Astorga</p>
					</footer>

			</div>

		<!-- BG -->
			<div id="bg"></div>

		<!-- Scripts -->
			<script src="reg/assets/js/jquery.min.js"></script>
			<script src="reg/assets/js/browser.min.js"></script>
			<script src="reg/assets/js/breakpoints.min.js"></script>
			<script src="reg/assets/js/util.js"></script>
			<script src="reg/assets/js/main.js"></script>
			<script src="reg/assets/js/passconf.js"></script>
			<script src="reg/assets/js/alu_reg.js"></script>
	</body>
</html>
