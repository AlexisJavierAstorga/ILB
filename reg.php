<!DOCTYPE html>
<html lang="es">
<head>
	<title>Auditorio ILB</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="logo/info.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/css/util.css">
	<link rel="stylesheet" type="text/css" href="assets/css/mainreg.css">
	<link rel="stylesheet" type="text/css" href="assets/css/foto.css">
<!--===============================================================================================-->
</head>
<body style="background-color: #999999;">
	<div id="popup" class="popup">
	    <a onclick="closeDialog('popup');" class="close"></a>
	    <div>
	        <!-- YOUR CONTENT -->
	    </div>
	</div>
	<div class="limiter">
		<div class="container-login100">
			<div class="login100-more" style="background-image: url('images/bg-01.jpg');"></div>


			<div class="wrap-login100 p-l-50 p-r-50 p-t-72 p-b-50">
				<form action="registrar.php" method="post" TARGET="_parent" class="login100-form validate-form" enctype="multipart/form-data">
					<a href="index.php" class="dis-block txt3 hov1 p-r-30 p-t-10 p-b-10 p-l-30">
						<i class="fa fa-long-arrow-left m-l-5"></i>
						Regresar
					</a>
					<span class="login100-form-title p-b-59">
						Registro
					</span>

					<div class="wrap-input100 validate-input" data-validate="Rol requerido">
					<span class="label-input100">Inserta la foto para tu gafete: </span><br><br>
					<input id="file" type="file" name="foto" required/><br><br>
						<div id="preview">DIMENSIONES 2.5X3 cm</div>
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Rol requerido">
						<span class="label-input100">¿Cuál es tu rol en el proyecto?</span><br><br>
						<select name="rol" required>
					          <option value="">Selecciona tu ROL</option>
					          <option value="lider">Líder</option>
										<option value="cola">Colaborador</option>
					          <!--option value="2">Estado de mexico</option -->
					   </select>
						 <span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Nombre requerido">
						<span class="label-input100" >Nombre (s):</span>
						<input class="input100" type="text" name="username" placeholder="Nombre(s)..." required>
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Apellido paterno requerido">
						<span class="label-input100">Apellido paterno:</span>
						<input class="input100" type="text" name="apellidoPat" placeholder="Apellido paterno..." required>
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Apellido materno requerido">
						<span class="label-input100">Apellido materno:</span>
						<input class="input100" type="text" name="apellidoMat" placeholder="Apellido materno..." required>
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Para correo válido es con minúsculas">
						<span class="label-input100">Correo:</span>
						<input class="input100" type="text" name="email" placeholder="ejemplo@outlook.com" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required>
						<span class="focus-input100"></span>
					</div>

					<div id="qr" name="qr"></div>

					<div class="wrap-input100 validate-input" data-validate = "Debe contener al menos un número, una letra mayúscula y minúscula, con 8 caracteres como máximo.">
						<span class="label-input100">Contraseña:</span><br>
						<span class="label-input100" style="font-size:9pt;">(Debe contener al menos un número, una letra mayúscula y minúscula; y mayor o igual a 8 caracteres.)</span>
						<input class="input100" type="password" name="password" id="password" placeholder="*************" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Debe contener al menos un número, una letra mayúscula y minúscula; y mayor o igual a 8 caracteres." required>
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100" data-validate = "Repetir contraseña requerido">
						<span class="label-input100">Repite la contraseña:</span>
						<input class="input100" type="password" name="repeat-pass" id="confirm_password" placeholder="*************" required>
						<span class="focus-input100"></span>
					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" onclick="update_qrcode()">
								REGISTRAR
							</button>
						</div>

						<a href="login.php" class="dis-block txt3 hov1 p-r-30 p-t-10 p-b-10 p-l-30">
							INICIAR SESIÓN
							<i class="fa fa-long-arrow-right m-l-5"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>

<!--===============================================================================================-->
	<script src="assets/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="assets/js/passconf.js"></script>
<!--===============================================================================================-->
	<script src="assets/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="assets/vendor/bootstrap/js/popper.js"></script>
	<script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="assets/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="assets/vendor/daterangepicker/moment.min.js"></script>
	<script src="assets/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="assets/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="assets/js/mainreg.js"></script>
	<script src="assets/js/foto.js"></script>
	<script src="assets/js/qrcode.js"></script>

	

</body>
</html>
