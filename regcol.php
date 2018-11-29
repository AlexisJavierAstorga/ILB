<!doctype html>
<html>
	<head>
		<title>Auditorio ILB</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="shortcut icon" href="logo/info.png" type="image/x-icon">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <script type="text/javascript">
$(function() {
            $("#proyecto").autocomplete({
                source: "productos.php",
                minLength: 2,
                select: function(event, ui) {
					event.preventDefault();
                    $('#proyecto').val(ui.item.proyecto);

                    $('#descripcion').val(ui.item.descripcion);

                    $('#alumno').val(ui.item.alumno);

                    $('#grupo').val(ui.item.grupo);

                    $('#salon').val(ui.item.salon);

                    $('#consultoria').val(ui.item.consultoria);

                    $('#corporativa').val(ui.item.corporativa);

                    $('#organigrama').val(ui.item.organigrama);

                    $('#presentacion').val(ui.item.presentacion);
					//$('#id_proy').val(ui.item.id_proy);
			     }
            });
		});
</script>
</head>
<body>

<div class="ui-widget" align="center">
  <a href="colaborador.php"><-- Regresar </a><br><br>
  <form action="regproy.php" name="formulario" method="post">
  Proyecto:  <input id="proyecto" placeholder="Inserta el nombre del proyecto"><br><br>
  Alumno: <input id="alumno" readonly><br><br>
  Grupo:  <input id="grupo" readonly><br><br>
  Salon: <input id="salon" readonly><br><br>
  Consultoria: <input id="consultoria" readonly><br><br>
  Imagen corporativa: <input id="corporativa" readonly><br><br>
  Descripcion: <input id="descripcion" readonly><br><br>
  Organigrama: <input id="organigrama" readonly><br><br>
  Presentacion: <input id="presentacion" readonly><br><br>

<input type="submit" value="Registrarte en el proyecto" />
</form>

</div>
</body>
</html>
