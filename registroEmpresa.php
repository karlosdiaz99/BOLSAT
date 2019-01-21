<?php
require('conexion.php');

$razon_social = $_POST["razon_social"];
$logotipo = $_POST["logotipo"];
$giro = $_POST["giro"];
$rfc = $_POST["rfc"];
$titular = $_POST["titular"];
$puesto = $_POST["puesto"];
$estado = $_POST["estado"];
$colonia = $_POST["colonia"];
$calle = $_POST["calle"];
$numero = $_POST["numero"];
$codigo_postal = $_POST["codigo_postal"];
$telefono = $_POST["telefono"];
$correo = $_POST["correo"];
$pagina_web = $_POST["pagina_web"];
$convenio = $_POST["convenio"];

$insertar ="INSERT INTO empresa(razon_social,logotipo,giro,rfc,titular,puesto,estado,colonia,calle,numero,codigo_postal,telefono,correo,pagina_web,convenio,clave) values ('$razon_social','$logotipo','$giro','$rfc','$titular','$puesto','$estado','$colonia','$calle','$numero','$codigo_postal','$telefono','$correo','$pagina_web','$convenio','$razon_social')";



$resultado = mysqli_query($conexion1, $insertar);


// Datos para el correo
//$destinatario = $correo;
//$asunto = "Claves de acceso";

//$carta = "Usuario $nombre \n";
//$carta .= "Clave: $nombre \n";


// Enviando Mensaje
//mail($destinatario, $asunto, $carta);

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
						<a href="#" ><span class="icon-user"></span>REGISTRO DE EMPRESA<span class="caret icon-circle-down"></span></a>
						
					</li>
							<li class="submenu">
						<a href="inicio.php" ><span class="icon-user"></span>Menu<span class="caret icon-circle-down"></span></a>
					</li>
	
		</ul>
		</nav>


	 </header>

	

<div class="panel-body" align="center">
	<form action="registroEmpresa.php" role="form" enctype="multipart/form-data" class="form-horizontal" method="POST" autocomplete="off">
		<div class="form-group">
<table class="egt">
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
		<td><label class="control-label col-sm-4">RFC </label></td>
		<td>
			<div class="col-sm-6">
				<input value class="form-control" type="text" name="rfc" required>
			</div></td>
		</tr>

			<tr>
		<td><label class="control-label col-sm-4">TITULAR DE LA ORGANIZACION: </label></td>
		<td>
			<div class="col-sm-6">
				<input value class="form-control" type="text" name="titular" placeholder="Lic./Ing. Nombre completo" required>
			</div></td>
		</tr>

			<tr>
		<td><label class="control-label col-sm-4">PUESTO DEL TITULAR: </label></td>
		<td>
			<div class="col-sm-6">
				<input value class="form-control" type="text" name="puesto" placeholder="Cargo que ocupa" equired>
			</div></td>
		</tr>

			<tr>
		<td><label class="control-label col-sm-4">DOMICILIO PARTICULAR: </label></td>
		<td>
			<div class="col-sm-6">
                 <select class="form-control" name="estado">
                 	<option>AGUASCALIENTES</option>
    <option>BCN</option>
    <option>BAJA CALIFORNIA SUR</option>
    <option>CAMPECHE</option>
    <option>COAHUILA</option>
    <option>COLIMA</option>
    <option>CHIAPAS</option>
    <option>CHIHUAHUA</option>
    <option>DISTRITO FEDERAL</option>
    <option>DURANGO</option>
    <option>GUANAJUATO</option>
    <option>GUERRERO</option>
    <option>HIDALGO</option>
    <option>JALISCO</option>
    <option>MEXICO</option>
    <option>MICHOACAN</option>
    <option>MORELOS</option>
    <option>NAYARIT</option>
    <option>NUEVO LEON</option>
    <option>OAXACA</option>
    <option>PUEBLA</option>
    <option>QUERETARO</option>
    <option>QUINTANA ROO</option>
    <option>SAN LUIS POTOSI</option>
    <option>SINALOA</option>
    <option>SONORA</option>
    <option>TABASCO</option>
    <option>TAMAULIPAS</option>
    <option>TLAXCALA</option>
    <option>VERACRUZ</option>
    <option>YUCATAN</option>
    <option>ZACATECAS</option>
    </select>
				<input value class="form-control" type="text" name="colonia" placeholder="nombre de colonia" required>
				<input value class="form-control" type="text" name="calle" placeholder=" nombre de calle" required>
				<input value class="form-control" type="text" name="numero" placeholder="numero de casa" required>
				<input value class="form-control" type="text" name="codigo_postal" placeholder="CP" required>
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

