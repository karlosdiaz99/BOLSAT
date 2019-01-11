<?php

require('conexion.php');


$nombre_acceso=$_POST["nombre_acceso"];
$clave=$_POST["clave"];
$perfil=$_POST["perfil"];

//conexion vinculacion

$consulta="SELECT * FROM accesos WHERE perfil='administrativo' and nombre_acceso='$nombre_acceso' and clave='$clave'";


$resultado=mysqli_query($conexion1,$consulta);



	$filas=mysqli_num_rows($resultado);
	if($filas>0){
		header("location:interno.php");
	}else{
		header("location:accesoVinculacion.php");
	}
	mysqli_free_result($resultado);

?>
