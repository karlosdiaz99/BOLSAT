<?php
session_start();
?>

 <?php error_reporting(E_ALL ^ E_NOTICE);
$usuario= "root";
$password="";
$nombre_base="sistema_bolsat";
$host="localhost";
$conexion1=mysqli_connect("$host","$usuario","$password","$nombre_base");

$usuario ="SELECT nombre_acceso FROM accesos ";

?>
<!DOCTYPE HTML>
<HTML>
	<head>
  <title>Bolsa de trabajo</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
      <link href="estilo10.css" rel="Stylesheet"/>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
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

<div class="menus">
				<a href="#" class="bt-menu"><span class="icon-list2"></span>Menu</a>
			</div>
			<nav>
				<ul>
					<li class="submenu">
						<a href="#" ><span class="icon-user"></span>Busqueda<span class="caret icon-circle-down"></span></a>
						<ul class="children">
							<li><a href="busqueda_egresado_interno.php">Egresados</a></li>
							<li><a href="busqueda_empresa_interno.php">Empresas</a></li>


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