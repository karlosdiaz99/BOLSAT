<?php
require('conexion.php');

$requerimiento = $_POST["requerimiento"];
$exp_laboral = $_POST["exp_laboral"];
$titulacion = $_POST["titulacion"];
$relacion_externa = $_POST["relacion_externa"];

$insertar ="INSERT INTO solicitud(requerimiento,exp_laboral
,titulacion,relacion_externa) values ('$requerimiento', '$exp_laboral','$titulacion','$relacion_externa')";

//$consultar =" INTO egresado()"

$resultado = mysqli_query($conexion1, $insertar);
?>



<!DOCTYPE>
<html>
<head>
	<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />
		<title>Bolsa T ITO</title>
		<link rel="shortcut icon" href="imagenes/escudoM.png"/>
		<link href="estilo10.css" rel="Stylesheet"/>	
		<link href="style.css" rel="Stylesheet"/>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/micss.css">

	<title></title>
</head>
<body>
	<header>
		
	<img class="logoMex" src="imagenes/TECNACMEX.png"width="300" height="100" align="letf">	
	<img class="logoSEP" src="imagenes/SEP.png"width="300" height="100" align="right">
	<div class="row encabezado text-center">
	<img class="logoIto" src="imagenes/imagenlogo.png"width="100" height="100">	

<nav>
				<ul>
					<li class="submenu">
						<a href="#" ><span class="icon-user"></span>Solicitud<span class="caret icon-circle-down"></span></a>
			</li>
					<li class="submenu">
						<a href="empresa.php" ><span class="icon-user"></span>Menu<span class="caret icon-circle-down"></span></a>
					</li>
		</ul>
	</nav>
	</header>

	<li>DATOS EMPRESA</li>
	<table class="egt">
		<tr>
			<td><label class="control-label col-sm-4">NOMBRE: </label></td>
			<td>
				<div class="col-sm-6">
					<input value class="form-control" type="text" name="r_social" required>
				</div>
			</td>
		</tr>

		<tr>
			<td><label class="control-label col-sm-4">GIRO </label></td>
			<td>
				<div class="col-sm-6">
					<input value class="form-control" type="text" name="r_social" required>
				</div>
			</td>
		</tr>

		<tr>
			<td><label class="control-label col-sm-4">LOGOTIPO </label></td>
			<td>
				<div class="col-sm-6">
					<input value class="form-control" type="text" name="r_social" required>
				</div>
			</td>
		</tr>

			<tr>
		<td><label class="control-label col-sm-4">DOMICILIO PARTICULAR: </label></td>
		<td>
			<div class="col-sm-6">
				<input value class="form-control" type="text" name="r_social" required>
			</div></td>
		</tr>

			<tr>
		<td><label class="control-label col-sm-4">TELEFONO: </label></td>
		<td>
			<div class="col-sm-6">
				<input value class="form-control" type="text" name="r_social" required>
			</div></td>
		</tr>

			<tr>
		<td><label class="control-label col-sm-4">EMAIL: </label></td>
		<td>
			<div class="col-sm-6">
				<input value class="form-control" type="text" name="r_social" required>
			</div></td>
		</tr>

			</table>

	<li>DATOS DE SOLICITUD</li>

	<div class="panel-body" align="center">
	<form role="form" enctype="multipart/form-data" class="form-horizontal" method="POST" autocomplete="off">
		<div class="form-group">

<table>

	
		<tr>
			<td><label class="control-label col-sm-4">REQUERIMIENTOS </label></td>
			<td>
				<div class="col-sm-6">
					<textarea name="requerimiento" rows="10" cols="100">Escribe aquí tus comentarios</textarea>
				</div>
			</td>
		</tr>
		<tr>
			<td><label class="control-label col-sm-4">EXPERIENCIA LABORAL </label></td>
			<td>
				<div class="col-sm-6">
					<textarea name="exp_laboral" rows="10" cols="100">Escribe aquí tus comentarios</textarea>
				</div>
			</td>
		</tr>

		<tr>
			<td><label class="control-label col-sm-4">TITULACION</label></td>
			<td>
				<div class="col-sm-6">
					<textarea name="titulacion" rows="10" cols="100">Escribe aquí tus comentarios</textarea>
				</div>
			</td>
		</tr>

		<tr>
			<td><label class="control-label col-sm-4">RELACION EXTERNA </label></td>
			<td>
				<div class="col-sm-6">
					<textarea name="relacion_externa" rows="10" cols="100">Escribe aquí tus comentarios</textarea>
				</div>
			</td>
		</tr>
	</table>



<div class="col-sm-10 con-sm.offset-1">
				<div class="col-sm-5">
					<input class="btnbtn-warning" type="submit" value="Aceptar">
				</div>
	</div>
	

		</div>
	</form>

	<div class="piepag1" class="form-control">
			<p>
				Instituto Tecnológico de Oaxaca. <br>Departamento de Gestión Tecnológica y Vinculación <br>
				vin_oaxaca@tecnm.mx.<br>
				Tel&eacute;fono: 51 3 23 47				
			</p>
	</div>

</body>
</html>