<?php
require('conexion.php');

$nombre_egresado = $_POST["nombre_egresado"];
$apellido_p = $_POST["apellido_p"];
$apellido_m = $_POST["apellido_m"];
$id_numcontrol=$_POST["id_numcontrol"];
$sexo=$POST["sexo"];
$carrera = $_POST["carrera"];
$generacion = $_POST["generacion"];
$titulacion = $_POST["titulacion"];
$estado = $_POST["estado"];
$colonia = $_POST["colonia"];
$calle = $_POST["calle"];
$numero_casa = $_POST["numero_casa"];
$codigo_postal = $_POST["codigo_postal"];
$telefono = $_POST["telefono"];
$correo = $_POST["correo"];
$clave = $_POST["clave"];




$insertar ="INSERT INTO egresado(nombre_egresado,apellido_p,apellido_m,id_numcontrol,sexo, carrera,generacion,titulacion,estado,colonia,calle,numero_casa,codigo_postal,telefono,correo,clave) values ('$nombre_egresado', '$apellido_p','$apellido_m','$id_numcontrol','$sexo','$carrera','$generacion','$titulacion','$estado','$colonia','$calle','$numero_casa','$codigo_postal','$telefono','$correo','$id_numcontrol')";


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
						<a href="#" ><span class="icon-user"></span>REGISTRO DE EGRESADO<span class="caret icon-circle-down"></span></a>
						
					</li>
							<li class="submenu">
						<a href="inicio.php" ><span class="icon-user"></span>Menu<span class="caret icon-circle-down"></span></a>
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
				<input value class="form-control" type="text" name="nombre_egresado" required>
			</div></td>
		</tr>

	<tr>
		<td><label class="control-label col-sm-4">APELLIDO PATERNO: </label></td>
		<td>
			<div class="col-sm-6">
				<input value class="form-control" type="text" name="apellido_p" required>
			</div></td>
		</tr>

	<tr>
		<td><label class="control-label col-sm-4">APELLIDO MATERNO: </label></td>
		<td>
			<div class="col-sm-6">
				<input value class="form-control" type="text" name="apellido_m" required>
			</div></td>
		</tr>
<tr>


		<tr>
		<td><label class="control-label col-sm-4">Numero de control: </label></td>
		<td>
			<div class="col-sm-6">
				<input value class="form-control" type="int" name="id_numcontrol" required>
			</div></td>
		</tr>

<tr>
	<td>SEXO</td>
	<td>
		<select class="form-control" name="sexo">
			<option>HOMBRE</option>                  
            <option>MUJER</option>
		</select>
	</td>
</tr>

<tr>
                <td>Carrera:</td>
                <td>
                    <select class="form-control" name="carrera">
                      <option>Posgrado</option>                  
                      <option>Doctorado en Ciencias y Desarrollo Regional y Tecnológico</option>
                      <option>Maestría en Administración</option>
                      <option>Maestría en Ciencias y Desarrollo Regional y Tecnológico</option>
                      <option>Maestría en Construcción</option>
                      <option>Maestría en Docencia</option>
                      <option>Licenciado en Informática</option>
                      <option>Licenciado en Administración</option>
                      <option>Ingeniero Civil(es)</option>
                      <option>Ingeniero Electrónico</option>
                      <option>Ingeniero Eléctrico</option>
                      <option>Ingeniero en Gestión Empresarial</option>
                      <option>Ingeniero Industrial</option>
                      <option>Ingeniero Mecánico</option>
                      <option>Ingeniero en Sistemas Computacionales</option>
                      <option>Ingeniero Químico</option>                 
                    </select>
                </td>
              </tr>

			<tr>
		<td><label class="control-label col-sm-4">GENERACION: </label></td>
		<td>
			<div class="col-sm-6">
				<textarea name="generacion" rows="1" cols="10" placeholder="20??-20??"></textarea>
			</div></td>
		</tr>

			<tr>
		<td><label class="control-label col-sm-4">¿ERES TITULADO? </label></td>
		<td>
			<div class="col-sm-6">
				<div class="radio">
					<label>
						<input type="radio" name="titulacion" value="si" checked> SI
					</label>
				</div>
				<div class="radio">
					<label>
						<input type="radio" name="titulacion" value="no" checked> NO
					</label>
				</div>
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
				<input value class="form-control" type="text" name="numero_casa" placeholder="numero de casa" required>
				<input value class="form-control" type="text" name="codigo_postal" placeholder="CP" required>
			</div></td>
		</tr>

			<tr>
		<td><label class="control-label col-sm-4">TELEFONO: </label></td>
		<td>
			<div class="col-sm-6">
				<input value class="form-control" type="text" name="telefono" placeholder="(lada-###-##-##)"required>
			</div></td>
		</tr>

			<tr>
		<td><label class="control-label col-sm-4">EMAIL: </label></td>
		<td>
			<div class="col-sm-6">
				<input value class="form-control" type="text" name="correo" required>
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
					<input class="btnbtn-warning" type="submit" value="registrar">
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