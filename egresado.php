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
						<a href="#" ><span class="icon-user"></span>Datos de Alumno<span class="caret icon-circle-down"></span></a>
						<ul class="children">
							<li><a href="egresado.php">Modiificar</a></li>
							<li><a href="egresado.php">Visualizar</a></li>
						</ul>
					</li>
					<li class="submenu">
						<a href="#"><span class="icon-book2"></span>corriculum<span class="caret icon-circle-down"></span></a>
							<ul class="children">
								<li><a href="curriculum.php">Actualizar</a></li>
								<li><a href="curriculum.php">Visualizar</a></li>
								<li><a href="curriculum.php">Agregar</a></li>
								
								
							</ul>
					</li>
			
					<li class="submenu">
						<a href="#"><span class="icon-book2"></span>ofertas<span class="caret icon-circle-down"></span></a>
							<ul class="children">
								<li><a href="egresado.php">Nuevas empresas</a></li>
								<li><a href="egresado.php">Peticiones aceptadas</a></li>
								<li><a href="egresado.php">Empresas Convenio</a></li>
							</ul>
					</li>

					<li class="submenu">
						<a href="#"><span class="icon-book2"></span>contacto<span class="caret icon-circle-down"></span></a>
							<ul class="children">
								<li><a href="egresado.php">Contacto Empresarial</a></li>
								<li><a href="egresado.php">Contacto Departamento</a></li>
							</ul>
					</li>

					<li class="submenu">
						<a href="inicio.php" ><span class="icon-user"></span>Cerrar Sesion<span class="caret icon-circle-down"></span></a>
					</li>
	
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