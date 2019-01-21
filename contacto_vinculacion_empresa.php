<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Bolsa T ITO</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />
		
		<!-- ESTILOS -->
		<link rel="shortcut icon" href="imagenes/escudoM.png"/>
		<link href="estilo10.css" rel="Stylesheet"/>	
		<link href="style.css" rel="Stylesheet"/>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/micss.css">
		<!-- SCRIPTS JS-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script src="peticion_egresado.js"></script>
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

<nav>
				<ul>

								<li class="submenu">
						<a href="empresa.php" ><span class="icon-user"></span>Menu<span class="caret icon-circle-down"></span></a>
					</li>
		</ul>
	</nav>


	 </header>

<div class="panel-body" align="center">
	<form action="registroEmpresa.php" role="form" enctype="multipart/form-data" class="form-horizontal" method="POST" autocomplete="off">
		<div class="form-group">
<table class="egt">
		<tr>
		<td><label class="control-label col-sm-4">CORREO: </label></td>
		<td>
			<div class="col-sm-6">
				<input value class="form-control" type="text" name="correo" required>
			</div></td>
		</tr>

				<tr>
		<td><label class="control-label col-sm-4">ASUNTO: </label></td>
		<td>
			<div class="col-sm-6">
				<input value class="form-control" type="text" name="asunto" required>
			</div></td>
		</tr>

			<tr>
		<td><label class="control-label col-sm-4">MENSAJE: </label></td>
		<td>
			<div class="col-sm-6">
				<textarea value class="form-control" name="resumen_profecional" rows="10" cols="100" placeholder="TU OPINION NOS INTERESA"></textarea>
			</div></td>
		</tr>

	</table>
	<div class="col-sm-10 con-sm.offset-1">
			
				<div class="col-sm-5">
					<input class="btnbtn-warning" type="submit" value="Enviar">
				</div>
		
	</div>
		</div>
	</form>



	</body>
</html>


