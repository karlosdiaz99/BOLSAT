<?php

require('conexion.php');


$nombre_egresado=$_POST["nombre_egresado"];
$clave=$_POST["clave"];


//conexion vinculacion


$consultaa="SELECT * FROM egresado WHERE nombre_egresado='$nombre_egresado' and clave='$clave'";

$resultadouno=mysqli_query($conexion1,$consultaa);



	$egreg=mysqli_num_rows($resultadouno);
	if($egreg>0){
		header("location:egresado.php");
	}else{
		header("location:accesoEgresado.php");
	}
	mysqli_free_result($resultadouno);


?>
