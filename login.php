<!DOCTYPE html>
<html lang="en">
<head>
	<title>Auditorio ILB</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="logo/info.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/vendorlog/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/fonts/font-awesome-4.7.0log/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/fonts/iconiclog/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/vendorlog/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/vendorlog/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/vendorlog/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/vendorlog/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/vendorlog/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/css/utillog.css">
	<link rel="stylesheet" type="text/css" href="assets/css/mainlog.css">

	<link rel="stylesheet" type="text/css" href="assets/css/mainlog2.css">

<!--===============================================================================================-->
</head>
<body>
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
				<li><a href="reg.php" class="button1 large fit">Registrar</a></li>
			</ul>
			<ul class="actions stacked">
				<li><a href="login.php" class="button1 large fit">INICIAR SESIÓN</a></li>
			</ul>
		</section>
	</section>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-t-85 p-b-20">
				<form action="existe.php" method="post" class="login100-form validate-form">
					<span class="login100-form-title p-b-70">
						Bienvenido de nuevo
					</span>
					<span class="login100-form-avatar">
						<img src="logo/info.png" alt="Informática">
					</span>

					<div class="wrap-input100 validate-input m-t-85 m-b-35" data-validate = "Inserta el correo correcto">
						<input class="input100" type="text" name="email" required>
						<span class="focus-input100" data-placeholder="Correo"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-50" data-validate="Inserta el password correcto">
						<input class="input100" type="password" name="password" required>
						<span class="focus-input100" data-placeholder="Contraseña"></span>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							INICIAR SESIÓN
						</button>
					</div>

					<ul class="login-more p-t-190">
						<li class="m-b-8">
							<span class="txt1">
								Si la olvidaste
							</span>

							<a href="#" class="txt2">
								Correo / Contraseña?
							</a>
						</li>

						<li>
							<span class="txt1">
								Aún no tienes una cuenta?
							</span>

							<a href="reg.php" class="txt2">
								Registrarse
							</a>
						</li>
					</ul>
				</form>
			</div>
		</div>
	</div>

	<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
	<script src="assets/vendorlog/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="assets/vendorlog/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="assets/vendorlog/bootstrap/js/popper.js"></script>
	<script src="assets/vendorlog/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="assets/vendorlog/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="assets/vendorlog/daterangepicker/moment.min.js"></script>
	<script src="assets/vendorlog/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="assets/vendorlog/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="assets/js/mainlog.js"></script>

	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/browser.min.js"></script>
	<script src="assets/js/breakpoints.min.js"></script>
	<script src="assets/js/util.js"></script>
	<script src="assets/js/main.js"></script>

</body>
</html>
