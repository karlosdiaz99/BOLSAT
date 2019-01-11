<?php
require('conexion.php');

$nombre = $_POST["nombre"];
$rfc = $_POST["rfc"];
$razon_social = $_POST["razon_social"];
$logotipo = $_POST["logotipo"];
$giro = $_POST["giro"];
$titular = $_POST["titular"];
$puesto = $_POST["puesto"];
$direccion = $_POST["direccion"];
$telefono = $_POST["telefono"];
$correo = $_POST["correo"];
$pagina_web = $_POST["pagina_web"];
$convenio = $_POST["convenio"];

$insertar ="INSERT INTO empresa(nombre,rfc,razon_social,logotipo,giro,titular,puesto,direccion,telefono,correo,pagina_web,convenio) values ('$nombre', '$rfc','$razon_social','$logotipo','$giro','$titular','$puesto','$direccion','$telefono','$correo','$pagina_web','$convenio')";

$resultado = mysqli_query($conexion1, $insertar);
?>

<!DOCTYPE HTML>
<HTML>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />
		<title>Bolsa T ITO</title>
		<link rel="shortcut icon" href="imagenes/escudoM.png"/>
		<link href="estilo10.css" rel="Stylesheet"/>	
		<link href="style.css" rel="Stylesheet"/>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/micss.css">

	</head>
	<body>

<header>
<img class="logoMex" src="imagenes/TECNACMEX.png"width="300" height="100" align="letf">	
	<img class="logoSEP" src="imagenes/SEP.png"width="300" height="100" align="right">
	<div class="row encabezado text-center">
	<img class="logoIto" src="imagenes/imagenlogo.png"width="100" height="100">	
<div class="col.lg-1 col-lg-offset-2">
	<h3>TECNOLOGICO NACIONAL DE MEXICO</h3>
	<h4>Intituto Tecnologico de Oaxaca</h4>
</div>

<div class="menus">
				<a href="#" class="bt-menu"><span class="icon-list2"></span>Menu</a>
			</div>
			<nav>
				<ul>
					<li class="submenu">
						<a href="#" ><span class="icon-user"></span>REGISTRO DE EMPRESA<span class="caret icon-circle-down"></span></a>
						
					</li>
	
		</ul>
		</nav>


	 </header>

	

<div class="panel-body" align="center">
	<form role="form" enctype="multipart/form-data" class="form-horizontal" method="POST" autocomplete="off">
		<div class="form-group">
<table class="egt">
	<tr>
		<td><label class="control-label col-sm-4">NOMBRE: </label></td>
		<td>
			<div class="col-sm-6">
				<input value class="form-control" type="text" name="nombre" required>
			</div></td>
		</tr>
	<tr>
		<td><label class="control-label col-sm-4">RFC </label></td>
		<td>
			<div class="col-sm-6">
				<input value class="form-control" type="text" name="rfc" required>
			</div></td>
		</tr>
	<tr>
		<td><label class="control-label col-sm-4">RAZON SOCIAL: </label></td>
		<td>
			<div class="col-sm-6">
				<input value class="form-control" type="text" name="razon_social" required>
			</div></td>
		</tr>

		<tr>
		<td><label class="control-label col-sm-4">LOGOTIPO OFICIAL: </label></td>
		<td>
			<div class="col-sm-6">
				<input name="logotipo" type="file" required>
			</div></td>
		</tr>

			<tr>
		<td><label class="control-label col-sm-4">GIRO: </label></td>
		<td>
			<div class="col-sm-6">
				<input value class="form-control" type="text" name="giro" required>
			</div></td>
		</tr>

			<tr>
		<td><label class="control-label col-sm-4">TITULAR DE LA ORGANIZACION: </label></td>
		<td>
			<div class="col-sm-6">
				<input value class="form-control" type="text" name="titular" required>
			</div></td>
		</tr>

			<tr>
		<td><label class="control-label col-sm-4">PUESTO DEL TITULAR: </label></td>
		<td>
			<div class="col-sm-6">
				<input value class="form-control" type="text" name="puesto" required>
			</div></td>
		</tr>

			<tr>
		<td><label class="control-label col-sm-4">DOMICILIO: </label></td>
		<td>
			<div class="col-sm-6">
				<input value class="form-control" type="text" name="direccion" required>
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
		<td><label class="control-label col-sm-4">E-MAIL: </label></td>
		<td>
			<div class="col-sm-6">
				<input value class="form-control" type="text" name="correo" required>
			</div></td>
		</tr>

			<tr>
		<td><label class="control-label col-sm-4">PAGINA WEB: </label></td>
		<td>
			<div class="col-sm-6">
				<input value class="form-control" type="text" name="pagina_web" required>
			</div></td>
		</tr>

					<tr>
		<td><label class="control-label col-sm-4">CONVENIO </label></td>
		<td>
			<div class="col-sm-6">
				<div class="radio">
					<label>
						<input type="radio" name="convenio" value="si" checked> SI
					</label>
				</div>
				<div class="radio">
					<label>
						<input type="radio" name="convenio" value="no" checked> NO
					</label>
				</div>
			</div></td>
		</tr>


	</table>
	<div class="col-sm-10 con-sm.offset-1">
			<div class="checkbox">
				<label>
					<input type="checkbox" required>
					Acepta: La informacion registrada es confidencial y sera utilizada con fines oficiales
				</label>
				<div class="col-sm-5">
					<input class="btnbtn-warning" type="submit" value="Registrarme">
				</div>
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

