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
		<link rel="shortcut icon" href="imagenes/escudoM.png"/><p></p>
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
</div>			<nav>
				<ul>
					<li class="submenu">
						<a href="accesoVinculacion.php" ><span class="icon-user"></span>Personal del Instituto<span class="caret icon-circle-down"></span></a>
						
					</li>
					<li class="submenu">
						<a href="accesoEgresado.php"><span class="icon-book2"></span>Egresados<span class="caret icon-circle-down"></span></a>
							
					</li>
					<li>
						<a href="accesoEmpresa.php"><span class="icon-tie"></span>Empresas<span class="caret icon-circle-down"></span></a>
						
					</li>
				</ul>
		</nav>
			<div class="container-fluid">
	<div class="sidenav">
	<div class="row">
	<div class="col-sm-10 col-sm-offset-1">
	<div class="well well-1 text-justify">
	<p class="text-center subtitulo">



		
BOLSA DE TRABAJO </P>

	Portal Bolsa de Trabajo del Instituto Tecnológico de Oaxaca.
	<br>
La Subdirección de Planeación y Vinculación a través del Departamento 
de Gestión Tecnológica y Vinculación en apoyo a los 
<i>Egresados</i> 
de esta Institucion genera un portal web en donde las empresas 
dan a conocer las vacantes que ofrecen, para las diferentes 
carreras que se imparten en este Instituto con la finalidad 
de ofrecer nuevas oportunidades, de empleo a nuestros 
<i>Egresados</i> 
en sus diferentes niveles.
       
       </p>
       </div>
       <div class="well well-1 text-justify">
<strong>MISION: </strong>
<p>

Somos un instrumento de desarrollo de la comunidad, 
con el compromiso de formar profesionistas de excelencia, 
capaces de responder de manera eficiente y específica a las 
necesidades con calidad, productividad y con una visión nacional 
e internacional para el presente y el futuro.

</p>
</div>

<div class="well well-1 text-justify">
<strong>VISION: </strong>
<p>

Ser la mejor institución de educación superior tecnológica en la región y del país reconocida y acreditada internacionalmente como una institución de calidad.


</p>
</div>

       </div>
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