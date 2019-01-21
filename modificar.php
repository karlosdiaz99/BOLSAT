<?php

require('conexion.php');


$nombre_egresado=$_POST["nombre_egresado"];
$trabajo=$_POST["trabajo"];
$aptitud=$_POST["aptitud"];
$resumen_profecional=$_POST["resumen_profecional"];

$consulta="UPDATE egresado set trabajo='$trabajo' where nombre_egresado='$nombre_egresado'";
$consultados="UPDATE egresado set aptitud='$aptitud' where nombre_egresado='$nombre_egresado'";
$consultatres="UPDATE egresado set resumen_profecional='$resumen_profecional' where nombre_egresado='$nombre_egresado'";

$resultadouno=mysqli_query($conexion1,$consulta);
$resultadodos=mysqli_query($conexion1,$consultados);
$resultadotres=mysqli_query($conexion1,$consultatres);


	$egreg=mysqli_num_rows($resultadouno and $resultadodos and $resultadotres);
	if($egreg>0){
		header("location:curriculum.php");
	}else{
		header("location:egresado.php");
	}
	mysqli_free_result($resultadouno);


?>


