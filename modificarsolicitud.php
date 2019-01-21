<?php

require('conexion.php');


$nombre=$_POST["nombre"];
$requerimiento=$_POST["requerimiento"];
$titulacion=$_POST["titulacion"];


$consulta="UPDATE empresa set requerimiento='$requerimiento' where nombre='$nombre'";
$consultados="UPDATE empresa set titulacion='$titulacion' where nombre='$nombre'";


$resultadouno=mysqli_query($conexion1,$consulta);
$resultadodos=mysqli_query($conexion1,$consultados);



	$egreg=mysqli_num_rows($resultadouno and $resultadodos);
	if($egreg>0){
		header("location:solicitud.php");
	}else{
		header("location:empresa.php");
	}
	mysqli_free_result($resultadouno);


?>
