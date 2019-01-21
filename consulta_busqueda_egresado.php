<?php
/////// CONEXIÓN A LA BASE DE DATOS /////////

require('conexion.php');


if ($conexion1 -> connect_errno)
{
	die("Fallo la conexion:(".$conexion1 -> mysqli_connect_errno().")".$conexion1-> mysqli_connect_error());
}

//////////////// VALORES INICIALES ///////////////////////

$tabla="";
$query="SELECT * FROM egresado ORDER BY id_numcontrol";

///////// LO QUE OCURRE AL TECLEAR SOBRE EL INPUT DE BUSQUEDA ////////////
if(isset($_POST['egresado']))
{
	$q=$conexion1->real_escape_string($_POST['egresado']);
	$query="SELECT * FROM egresado WHERE 
		id_numcontrol LIKE '%".$q."%' OR
		nombre_egresado LIKE '%".$q."%' OR
		telefono LIKE '%".$q."%' OR
		correo LIKE '%".$q."%' OR
		resumen_profecional LIKE '%".$q."%'";
}

$buscarEgresado=$conexion1->query($query);
if ($buscarEgresado->num_rows > 0)
{
	$tabla.= 
	'<table class="table">
		<tr class="bg-primary">
			<td>ID EGRESADO</td>
			<td>NOMBRE</td>
			<td>TELEFONO</td>
			<td>CORREO</td>
			<td>RESUMEN PROFECIONAL</td>
		</tr>';

	while($filaEgresado= $buscarEgresado->fetch_assoc())
	{
		$tabla.=
		'<tr>
			<td>'.$filaEgresado['id_numcontrol'].'</td>
			<td>'.$filaEgresado['nombre_egresado'].'</td>
			<td>'.$filaEgresado['telefono'].'</td>
			<td>'.$filaEgresado['correo'].'</td>
			<td>'.$filaEgresado['resumen_profecional'].'</td>
		 </tr>
		';
	}

	$tabla.='</table>';
} else
	{
		$tabla="No se encontraron coincidencias con sus criterios de búsqueda.";
	}


echo $tabla;
?>
