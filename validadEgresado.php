<?php

require('conexion.php');


$nombre_acceso=$_POST["nombre_acceso"];
$clave=$_POST["clave"];
$perfil=$_POST["perfil"];

//conexion vinculacion


$consultaa="SELECT * FROM accesos WHERE perfil='egresado' and nombre_acceso='$nombre_acceso' and clave='$clave'";

$resultadouno=mysqli_query($conexion1,$consultaa);



	$egreg=mysqli_num_rows($resultadouno);
	if($egreg>0){
		header("location:egresado.php");
	}else{
		header("location:accesoEgresado.php");
	}
	mysqli_free_result($resultadouno);


?>
