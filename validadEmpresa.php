<?php

require('conexion.php');


$nombre_acceso=$_POST["nombre_acceso"];
$clave=$_POST["clave"];
$perfil=$_POST["perfil"];

//conexion vinculacion

$consultab="SELECT * FROM accesos WHERE perfil='empresa' and nombre_acceso='$nombre_acceso' and clave='$clave'";

$resultadodos=mysqli_query($conexion1,$consultab);

$empress=mysqli_num_rows($resultadodos);
if($empress>0){
	header("location:empresa.php");
}else{
	header("location:accesoEmpresa.php");
}
mysqli_free_result($resultado);

?>
