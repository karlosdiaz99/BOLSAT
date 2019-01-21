<?php

require('conexion.php');


$razon_social=$_POST["razon_social"];
$clave=$_POST["clave"];


//conexion vinculacion

$consultab="SELECT * FROM empresa WHERE razon_social='$razon_social' and clave='$clave'";

$resultadodos=mysqli_query($conexion1,$consultab);

$empress=mysqli_num_rows($resultadodos);
if($empress>0){
	header("location:empresa.php");
}else{
	header("location:accesoEmpresa.php");
}
mysqli_free_result($resultado);

?>
