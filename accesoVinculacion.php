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
</div>		<nav>
				<ul>
					<li class="submenu">
						<a href="#" ><span class="icon-user"></span>Personal del Instituto<span class="caret icon-circle-down"></span></a>
						
					</li>
					
				</ul>
		</nav>

		<div class="container mlogin" align="center">
		<div id="login" >
			<h1 align="center">Acceso A Sistema</h1>
			<form name="loginform" id="loginform" action="validad.php" method="POST" class="cuerpo" >
			<p>
			 <label for="user_login">Nombre De Usuario<br />
			 <input type="text" name="nombre_acceso" id="nombre_acceso" class="input" placeholder="&#128100; Id" value="" size="20" /></label>
			 </p>
			 <p>
			 <label for="user_pass">Contraseña<br />
			 <input type="password" name="clave" id="clave" class="input" placeholder="&#128272; Contrase&ntilde;a" value="" size="20" /></label>
			 </p>
			 <p class="submit">
			 <input type="submit" name="login" class="button" value="Ingresar" />
			 </p>
			</form>
		 
		</div>
	</div>
	 </header>

	</div>
	<div class="piepag1" class="form-control">
			<p>
				Instituto Tecnológico de Oaxaca. <br>Departamento de Gestión Tecnológica y Vinculación <br>
				vin_oaxaca@tecnm.mx.<br>
				Tel&eacute;fono: 51 3 23 47				
			</p>
	</div>
		
	</body>
</html>