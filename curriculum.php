<?php
require('conexion.php');

$trabajo = $_POST["trabajo"];
$aptitud = $_POST["aptitud"];
$resumen = $_POST["resumen"];
$exito_profecional = $_POST["exito_profecional"];

$insertar ="INSERT INTO curriculum(trabajo,aptitud,resumen,exito_profecional) values ('$trabajo', '$aptitud','$resumen','$exito_profecional')";

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
						<a href="#" ><span class="icon-user"></span>Curriculum Vitae<span class="caret icon-circle-down"></span></a>
			</li>

								<li class="submenu">
						<a href="egresado.php" ><span class="icon-user"></span>Menu<span class="caret icon-circle-down"></span></a>
					</li>
		</ul>
	</nav>
	</header>
		<li>DATOS PERSONALES</li>
	<table class="egt">
		<tr>
			<td><label class="control-label col-sm-4">NOMBRE: </label></td>
			<td>
				<div class="col-sm-6">
					<input value class="form-control" type="text" name="nombre" required>
				</div>
			</td>
		</tr>

		<tr>
			<td><label class="control-label col-sm-4">CARRERA: </label></td>
			<td>
				<div class="col-sm-6">
					<input value class="form-control" type="text" name="carrera" required>
				</div>
			</td>
		</tr>

		<tr>
			<td><label class="control-label col-sm-4">GENERACION: </label></td>
			<td>
				<div class="col-sm-6">
					<input value class="form-control" type="text" name="generacion" required>
				</div>
			</td>
		</tr>

			<tr>
		<td><label class="control-label col-sm-4">DOMICILIO PARTICULAR: </label></td>
		<td>
			<div class="col-sm-6">
				<input value class="form-control" type="text" name="domicilio" required>
			</div></td>
		</tr>

			<tr>
		<td><label class="control-label col-sm-4">TELEFONO: </label></td>
		<td>
			<div class="col-sm-6">
				<input value class="form-control" type="text" name="telefono" required>
			</div></td>
		</tr>

			<tr>
		<td><label class="control-label col-sm-4">EMAIL: </label></td>
		<td>
			<div class="col-sm-6">
				<input value class="form-control" type="text" name="correo" required>
			</div></td>
		</tr>

					<tr>
		<td><label class="control-label col-sm-4">¿ERES TITULADO? </label></td>
		<td>
			<div class="col-sm-6">
				<div class="radio">
					<label>
						<input type="radio" name="titulado" value="si" checked> SI
					</label>
				</div>
				<div class="radio">
					<label>
						<input type="radio" name="titulado" value="no" checked> NO
					</label>
				</div>
			</div></td>

		</tr>
			</table>

	<li>DATOS LABORALES</li>

<div class="panel-body" align="center">
	<form role="form" enctype="multipart/form-data" class="form-horizontal" method="POST" autocomplete="off">
		<div class="form-group">

<table>

		<tr>
			<td><label class="control-label col-sm-4">TRABAJOS DONDE HAS LABORADO </label></td>
			<td>
				<div class="col-sm-6">
				    <textarea value class="form-control" name="trabajo" rows="10" cols="100">Escribe aquí tus comentarios</textarea>
				</div>
			</td>
		</tr>
		<tr>
			<td><label class="control-label col-sm-4">aptitudes generales </label></td>
			<td>
				<div class="col-sm-6">
					<textarea value class="form-control" name="aptitud" rows="10" cols="100">Escribe aquí tus comentarios</textarea>
				</div>
			</td>
		</tr>

		<tr>
			<td><label class="control-label col-sm-4">RESUMEN PROFECIONAL </label></td>
			<td>
				<div class="col-sm-6">
				<textarea value class="form-control" name="resumen" rows="10" cols="100">Escribe aquí tus comentarios</textarea>
				</div>
			</td>
		</tr>

		<tr>
			<td><label class="control-label col-sm-4">EXITOS PROFECIONALES </label></td>
			<td>
				<div class="col-sm-6">
					<textarea value class="form-control" name="exito_profecional" rows="10" cols="100">Escribe aquí tus comentarios</textarea>
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