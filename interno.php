<?php
session_start();
?>

 <?php error_reporting(E_ALL ^ E_NOTICE);
$usuario= "root";
$password="";
$nombre_base="sistema_bolsat";
$host="localhost";
$conexion1=mysqli_connect("$host","$usuario","$password","$nombre_base");
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
						<a href="#" ><span class="icon-user"></span>Alumnos<span class="caret icon-circle-down"></span></a>
						<ul class="children">
							<li><a href="interno.php">Registar alumno</a></li>
							<li><a href="interno.php">Eliminar alumno</a></li>
							<li><a href="interno.php">Buscar alumno</a></li>

						</ul>
					</li>
					<li class="submenu">
						<a href="#"><span class="icon-book2"></span>Empresas<span class="caret icon-circle-down"></span></a>
							<ul class="children">
								<li><a href="interno.php">Registrar empresa</a></li>
								<li><a href="interno.php">Eliminar empresa</a></li>
								<li><a href="interno.php">Buscar empresa</a></li>
								
								
							</ul>
					</li>
			
					<li class="submenu">
						<a href="#"><span class="icon-book2"></span>Documentos Externos<span class="caret icon-circle-down"></span></a>
							<ul class="children">
								<li><a href="interno.php">domuentos alumnos</a></li>
								<li><a href="interno.php">documentos empresas</a></li>
								<li><a href="interno.php">analisis semestrales</a></li>
								<li><a href="interno.php">otros archivos</a></li>
							</ul>
					</li>

					<li class="submenu">
						<a href="#"><span class="icon-book2"></span>Documentos internos<span class="caret icon-circle-down"></span></a>
							<ul class="children">
								<li><a href="interno.php">domuentos alumnos</a></li>
								<li><a href="interno.php">documentos empresas</a></li>
								<li><a href="interno.php">analisis semestrales</a></li>
								<li><a href="interno.php">otros archivos</a></li>
							</ul>
					</li>
										<li class="submenu">
						<a href="#"><span class="icon-book2"></span>Contactos<span class="caret icon-circle-down"></span></a>
							<ul class="children">
								<li><a href="interno.php">Contacto Alumnos</a></li>
								<li><a href="interno.php">Contacto Empresas</a></li>
							</ul>
					</li>

										<li class="submenu">
						<a href="inicio.php" ><span class="icon-user"></span>Cerrar Sesion<span class="caret icon-circle-down"></span></a>
					</li>
	
<!--<div class="form-1-2">
	<label for="caja_busqueda">Buscar:</label>
	<input type="text" name="caja_busqueda" id="caja_busqueda"></input> 
</div>
<div id="datos">
	
</div>-->

		</ul>
		</nav>
	 </header>

	<div class="piepag1" class="form-control">
			<p>
				Instituto Tecnológico de Oaxaca. <br>Departamento de Gestión Tecnológica y Vinculación <br>
				vin_oaxaca@tecnm.mx.<br>
				Tel&eacute;fono: 51 3 23 47				
			</p>
	</div>
		
	</body>
</html>