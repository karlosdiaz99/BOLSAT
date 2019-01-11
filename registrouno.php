<?php
error_reporting(E_ALL ^ E_NOTICE);
$usuario= "root";
$password="";
$nombre_base="sistema_bolsat";
$host="localhost";
$conexion1=mysqli_connect("$host","$usuario","","$nombre_base");
 if($_REQUEST["enviar"]!=null)
  {
	  if($_REQUEST["enviar"]=="Agregar"){
    $ver="insert into alumno (id,nombre,app,apm,fecha_nac,domicilio,telefono,curp,sexo,id_grupo)
  values(".$_REQUEST["id"].",
         '".$_REQUEST["nombre"]."',
         '".$_REQUEST["app"]."',
         '".$_REQUEST["apm"]."',
         '".$_REQUEST["fecha"]."',
		  '".$_REQUEST["domicilio"]."',
		   '".$_REQUEST["telefono"]."',
         '".$_REQUEST["curp"]."',
         '".$_REQUEST["sexo"]."',
         ".$_REQUEST["id_grupo"].")";
	  }else if($_REQUEST["enviar"]=="Guardar")
		  {
    $ver="insert into maestro(id,nombre,app,apm,fecha_nac,domicilio,telefono,curp,sexo)
  values(".$_REQUEST["id"].",
         '".$_REQUEST["nombre"]."',
         '".$_REQUEST["app"]."',
         '".$_REQUEST["apm"]."',
         '".$_REQUEST["fecha"]."',
		  '".$_REQUEST["domicilio"]."',
		   '".$_REQUEST["telefono"]."',
         '".$_REQUEST["curp"]."',
         '".$_REQUEST["sexo"]."')";
	  }
	  //echo $ver;
		$ver2=mysqli_query($conexion1,$ver);
		$si_hay=mysqli_affected_rows($conexion1);
  if($si_hay==1)
   {
	 
	   $em="select * from materia inner join (select grado from grupo where id=".$_REQUEST['id_grupo'].") as t on materia.grado=t.grado";//echo $ver;
					$em2=mysqli_query($conexion1,$em);
					
						while($m1=mysqli_fetch_array($em2)) {
							$verb="insert into boleta(id_alumno,id_materia) values(".$_REQUEST[id].",".$m1['id'].")";
							$ver2b=mysqli_query($conexion1,$verb);   
						}
    ?>
    <script type="text/javascript">
     alert("Se ha registrado correctamente");
    </script>
    <?php
  }
  else
  {
   ?>
   <script type="text/javascript">
       alert("No se ha registrado correctamente, verique porfavor");
       </script>
   <?php
   }
 }
error_reporting(E_ALL ^ E_NOTICE);
 ?>
<?php
session_start();
if(!isset($_SESSION["session_username"])) {
 header("location:.php");
} 
else {
	?>
		<script type="text/javascript" src="https://code.jquery.com/jquery-2.2.4.js"></script>
		<script languaje="javascript" type="text/javascript"></script>
<html>
	<head>
		<!--<script type="text/javascript" src="jquery.js"></script>-->
		<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />
		<title>SII Insertar</title>
		<link rel="shortcut icon" href="imagenes/escudoM.png"/>
		<link href="estilo10.css" rel="Stylesheet"/>		<link href="style.css" rel="Stylesheet"/>
		<script src="http://code.jquery.com/jquery-latest.js"></script>
		<script src="main.js"></script>
	</head>
	<body>
		<div class="encabezado" >
			<table align="center">
				<tr><td><img src="imagenes/encabezado.png" width="100%" ></td></tr>
			</table>
		</div>
<?php
	if($_SESSION["rol"]=="administrador") {
 
		?>
		<header>
			<div class="menus">
				<a href="#" class="bt-menu"><span class="icon-list2"></span>Menu</a>
			</div>
			<nav>
				<ul>
					<li class="submenu">
						<a href="#" ><span class="icon-user"></span>Usuarios <span class="caret icon-circle-down"></span></a>
						<ul class="children">
							<li><a href="register.php">Crear un nuevo usuario</a></li>
							<li><a href="eliminarusuario.php">Eliminar usuario</a></li>
							<li><a href="editarusuario.php">Editar usuario</a></li>
						</ul>
					</li>
					<li class="submenu">
						<a href="#"><span class="icon-book2"></span>Alumnos<span class="caret icon-circle-down"></span></a>
							<ul class="children">
								<li><a href="insertar.php">Registrar nuevo</a></li>
								<li><a href="editar.php">Editar alumno</a></li>
								<li><a href="eliminar.php">Eliminar alumno</a></li>
								<li><a href="reporte.php">Ver reportes</a></li>
								<li><a href="boleta.php">Ingresar calificaciones</a></li>
								<li><a href="verboleta.php">Ver Boleta</a></li>
							</ul>
					</li>
					<li>
					<a href="#"><span class="icon-tie"></span>Maestros<span class="caret icon-circle-down"></span></a>
						<ul class="children">
						<li><a href="insertarM.php">Registrar nuevo</a></li>
													<li><a href="editar1.php">Editar maestro</a></li>
						<li><a href="eliminar1.php">Eliminar maestro</a></li>
						</ul>
					</li>
					<li>
						<a href="#"><span class="icon-pencil"></span>Asignar<span class="caret icon-circle-down"></span></a>
						<ul class="children">
							<li><a href="asignar.php">Asignar relacion</a></li>
						</ul>
					</li>
					<li>
						<a href="logout.php"><span class="icon-exit"></span>Cerrar Sesi&oacute;n</a>
					</li>
				</ul>
		</nav>
	 </header>
		<?php
	}
	else if($_SESSION["rol"]=="maestro") {
			header("location:intropage.php");
		?>
	 
		<?php //include("includes/header.php"); //include("includes/footer.php");  ?>
		
		<?php
	}
	else if($_SESSION["rol"]=="coordinador") {
 
		?>
	 
		<?php //include("includes/header.php"); //include("includes/footer.php");  ?>
			<header>
				<div class="menus">
					<a href="#" class="bt-menu"><span class="icon-list2"></span>Menu</a>
				</div>
				<nav>
					<ul>
						<li class="submenu">
							<a href="#"><span class="icon-book2"></span>Alumnos<span class="caret icon-circle-down"></span></a>
								<ul class="children">
									<li><a href="insertar.php">Registrar uno nuevo</a></li>
									<li><a href="editar.php">Editar alumno</a></li>
									<li><a href="eliminar.php">Eliminar alumno</a></li>
									<li><a href="reporte.php">Ver reportes</a></li>
									<li><a href="boleta.php">Ingresar calificaciones</a></li>
									<li><a href="verboleta.php">Ver Boleta</a></li>
								</ul>
						</li>
						<li>
						<a href="#"><span class="icon-tie"></span>Maestros<span class="caret icon-circle-down"></span></a>
							<ul class="children">
							<li><a href="insertarM.php">Registrar uno nuevo</a></li>
														<li><a href="editar1.php">Editar maestro</a></li>
							<li><a href="eliminar1.php">Eliminar maestro</a></li>
							</ul>
						</li>
						<li>
							<a href="#"><span class="icon-pencil"></span>Asignar<span class="caret icon-circle-down"></span></a>
							<ul class="children">
								<li><a href="asignar.php">Asignar relacion</a></li>
							</ul>
						</li>
						<li>
							<a href="logout.php"><span class="icon-exit"></span>Cerrar Sesi&oacute;n</a>
						</li>
					</ul>
			</nav>
		</header>	 
		<?php
		
	}
	else if($_SESSION["rol"]=="capturista") {
 
		?>
	 
		<?php //include("includes/header.php"); //include("includes/footer.php");  ?>
			<header>
			<div class="menus">
				<a href="#" class="bt-menu"><span class="icon-list2"></span>Menu</a>
			</div>
			<nav>
				<ul>
					<li class="submenu">
						<a href="#"><span class="icon-book2"></span>Alumnos<span class="caret icon-circle-down"></span></a>
							<ul class="children">
								<li><a href="insertar.php">Registrar uno nuevo</a></li>
								<li><a href="editar.php">Editar alumno</a></li>
							</ul>
					</li>
					<li>
					<a href="#"><span class="icon-tie"></span>Maestros<span class="caret icon-circle-down"></span></a>
						<ul class="children">
						<li><a href="insertarM.php">Registrar uno nuevo</a></li>
													<li><a href="editar1.php">Editar maestro</a></li>
						</ul>
					</li>
					<li>
						<a href="logout.php"><span class="icon-exit"></span>Cerrar Sesi&oacute;n</a>
					</li>
				</ul>
		</nav>
	 </header>
		<?php
	}else {header("location:index.php");
	}
}
?>
  <div id="alumno" class="formulario">
  <h1> Insertar Alumno</h1>
    <form class="" action="insertar.php" method="get">
    <!--input  type="number"  name="id" value="" required placeholder="&#127380;" maxlength="8"><br> <br-->
    <input type="text"  name="nombre" value="" required placeholder="&#128100;Nombre (s)">  &nbsp; &nbsp; <input type="text"   name="app" value="" required placeholder="&#128100;Apellido Paterno">  &nbsp; &nbsp;  <input type="text"  name="apm" value="" required placeholder="&#128100;Apellido Materno"><br><br>
    Fecha de Nacimiento:<br> <input type="date"  min="2002-01-01" max="2006-12-31" name="fecha" value="" required placeholder="&#128100;Fecha Nacimiento"><br><br>
    <input type="text"  name="domicilio" value="" required placeholder="&#127969;Domicilio"><br><br>
    <!--input type="text"  name="curp" value=""required placeholder="&#128100;CURP"><br><br-->
    <input type="text" name="telefono" value="" required placeholder="&#9743;Telefono"><br><br>
    <input type="text"  name="sexo" value="" required placeholder="&#9892;Sexo"><br><br>
	<select name="id_grupo" required>
		<?php
					$verm="select * from grupo";//}
					$ver2m=mysqli_query($conexion1,$verm);
		?>
		<option value="">Selecciona el grupo</option>
			<?php 
				while($fila=mysqli_fetch_array($ver2m)) {?>
					<option value="<?php echo $fila["id"]?>"><?php echo 'grado:'.$fila["grado"].' grupo:'.$fila["grupo"] ?></option>
				<?php
			}?>
	</select></br><br>
    <input type="submit" name="enviar" value="Agregar" />&nbsp;&nbsp;<span><a href="insertar.php"><input type="button" name="cancelar" value="Cancelar" /></a></span>
  	</form>
  </div>
  <div class="piepag" class="form-control">
			<p>
				Lic. Verdad y Avenida Ju&aacute;rez s/n. Oaxaca de Juarez Oaxaca<br>
				Tel&eacute;fono: 51 3 23 47				
			</p>
	</div>
	</body>
  </body>
</html>
