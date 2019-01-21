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
		<title>SII BOLSA T</title>
		<link rel="shortcut icon" href="imagenes/escudoM.png"/>
		<link href="estilo10.css" rel="Stylesheet"/>	
		<link href="style.css" rel="Stylesheet"/>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/micss.css">

	</head>
	<body>
<header>
  <div id="sfcwhfazg5pp5cscswpm1m9uxxmsfbb5abb"></div>
                <script type="text/javascript" src="https://counter5.wheredoyoucomefrom.ovh/private/counter.js?c=whfazg5pp5cscswpm1m9uxxmsfbb5abb&down=async" async></script><br><noscript><a href="https://www.contadorvisitasgratis.com" title="contador de entradas"><img src="https://counter5.wheredoyoucomefrom.ovh/private/contadorvisitasgratis.php?c=whfazg5pp5cscswpm1m9uxxmsfbb5abb" border="0" title="contador de entradas" alt="contador de entradas"></a></noscript>

  <div class="row">
                <div class="col-lg-4 ">
                <img class="logoMex" src="imagenes/TECNACMEX.png"width="250" height="100" align="letf">     
                </div>
                <div class="col-lg-4 text-center" >
                  <img class="logoITO" src="imagenes/imagenlogo.png" width="100" height="100">
                    <p class="encabezado text-center">
                        </p><h3>Tecnológico Nacional de México </h3>
                        <h4>Instituto Tecnológico de Oaxaca </h4>
                    <p></p>
                </div>
            <div class="col-lg-4">
                    <img class="logoSEP" src="imagenes/SEP.png"width="250" height="100">
                </div>
            </div>


			<nav>
				<ul>
					<li class="submenu">
						<a href="#" ><span class="icon-user"></span>Egresado<span class="caret icon-circle-down"></span></a>
						
					</li>
					
				</ul>
		</nav>

		<div class="container mlogin" align="center">
		<div id="login" >
			<h1 align="center">Acceso A Sistema</h1>
			<form name="loginform" id="loginform" action="validadEgresado.php" method="POST" class="cuerpo" >
			<p>
			 <label for="user_login">Nombre De Usuario<br />
			 <input type="text" name="nombre_egresado" id="nombre_egresado" class="input" placeholder="&#128100; Id" value="" size="20" /></label>
			 </p>
			 <p>
			 <label for="user_pass">Contraseña<br />
			 <input type="password" name="clave" id="clave" class="input" placeholder="&#128272; Contrase&ntilde;a" value="" size="20" /></label>
			 </p>
			 <p class="submit">
			 <input type="submit" name="login" class="button" value="Ingresar" />
			 </p>
			 <a href="registroEgresado.php">REGISTRARSE</a>


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