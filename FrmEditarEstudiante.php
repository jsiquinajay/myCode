<?php
include("conexion.php");
$con=conexion();
$idest=trim($_GET['id']);//id de la agencia

		$result=mysql_query("SELECT * FROM practicaabc.estudiante where idestudiante='$idest'",$con);
		//die($result);
		while($row = mysql_fetch_array($result)) {
					$id=$row['idestudiante'];
					$nombre1=$row['primernombre'];$nombre2=$row['segundonombre'];$apellido1=$row['primerapellido'];
					$apellido2=$row['segundoapellido'];$sexo=$row['sexo'];$edad=$row['edad'];$fechanac=$row['fechanac'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="es">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>
<title>Cargo Expreso, Guias ICG</title>
<script language="JavaScript" type="text/javascript" src="../../libs/funciones.js"></script><!--Se agrego ../ para salir y accesar a funciones.js-->
<link rel="stylesheet" type="text/css" href="style/estilo.css"/>
<link href="../style/estilo.css" rel="stylesheet" type="text/css"/>
</head>
<body bgcolor="" class="body" onLoad="Oculta('field2'); Oculta('field3');">
<br><br>
<center>
<!--<body bgcolor="#0B0B3B" class="body">-->
</center>
		<form name="FrmBanco" action="ActualizaEstudiante.php" target="_self" method='post'>
			<table align='center' class='tablados' border='0'>
			<table <table align='center' class='tablados' border='0'>
			<input type="hidden" id="idest" name='idest' value="<?php echo $id;?>"/>
			<tr>
					<th align="center" colspan="5">CATALOGO DE ESTUDIANTES</th>
				</tr>
				<tr>
					<td align="left">Primer Nombre:</td><td align="left"><input type="text" id='pnombre' name="pnombre" style="width: 250px" value='<?php echo $nombre1;?>'></input>
					</td>
				</tr>
				<tr>
					<td align="left">Segundo Nombre:</td><td align="left"><input type="text" id='snombre' name="snombre" style="width: 250px" value='<?php echo $nombre2;?>'></input>
					</td>
				</tr>
				<tr>
					<td align="left">Primer Apellido:</td><td align="left"><input type="text" id='papellido' name="papellido" style="width: 250px" value='<?php echo $apellido1;?>'></input>
					</td>
				</tr>
				<tr>
					<td align="left">Segundo Apellido:</td><td align="left"><input type="text" id='sapellido' name="sapellido" style="width: 250px" value='<?php echo $apellido2;?>'></input>
					</td>
				</tr>
				<tr>
					<td align="left">Edad:</td><td align="left"><input type="text" id='edad' name="edad" style="width: 60px" value='<?php echo $edad;?>'></input>
					</td>
				</tr>
				<tr>
					<td align="left">Sexo:</td><td align="left"><input type="text" id='sexo' name="sexo" style="width: 60px" value='<?php echo $sexo;?>'></input>
					</td>
				</tr>
				<tr>
					<td align="left">Fecha Nacimiento:</td><td align="left"><input type="text" id='fnac' name="fnac" style="width: 80px" value='<?php echo $fechanac;?>'></input>
					</td>
				</tr>						
				<tr>
					<td colspan="5" align="center"><input type='submit' name='bancos' value='Guardar'>
					<!--<a href='../member-index.php'><input type="button" value='Regresar' name='regresar'></a>-->
					<a href='index.php'<font size='3' style='color:blue'><img src='fonts/volver.png' width='30' height='28'>
					<!--<input type="button" value="Limpiar" onclick="location.reload();" STYLE ='WIDTH:75px'></td>-->
				<tr>	
			</table>
		</form>
	</body>
</html>
<?php
	}
	//Close($conn);     
?>
