<?php
/////// CONEXIÓN A LA BASE DE DATOS /////////

require('conexion.php');


if ($conexion1 -> connect_errno)
{
	die("Fallo la conexion:(".$conexion1 -> mysqli_connect_errno().")".$conexion1-> mysqli_connect_error());
}

//////////////// VALORES INICIALES ///////////////////////

$tabla="";
$query="SELECT * FROM empresa ORDER BY id_empresa";

///////// LO QUE OCURRE AL TECLEAR SOBRE EL INPUT DE BUSQUEDA ////////////
if(isset($_POST['empresa']))
{
	$q=$conexion1->real_escape_string($_POST['empresa']);
	$query="SELECT * FROM empresa WHERE 
		id_empresa LIKE '%".$q."%' OR
		nombre LIKE '%".$q."%' OR
		telefono LIKE '%".$q."%' OR
		correo LIKE '%".$q."%' OR
		requerimiento LIKE '%".$q."%'";
}

$buscarEmpresa=$conexion1->query($query);
if ($buscarEmpresa->num_rows > 0)
{
	$tabla.= 
	'<table class="table">
		<tr class="bg-primary">
			<td>ID EMPRESA</td>
			<td>NOMBRE</td>
			<td>REQUERIMIENTO</td>
			<td>CORREO</td>
			<td>TELEFONO</td>
		</tr>';

	while($filaEmpresa= $buscarEmpresa->fetch_assoc())
	{
		$tabla.=
		'<tr>
			<td>'.$filaEmpresa['id_empresa'].'</td>
			<td>'.$filaEmpresa['nombre'].'</td>
			<td>'.$filaEmpresa['requerimiento'].'</td>
			<td>'.$filaEmpresa['correo'].'</td>
			<td>'.$filaEmpresa['telefono'].'</td>
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
