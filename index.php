<?php
include("conexion.php");
$link=conexion();
$fecha=date("Y-m-d");
//echo "<td color='red'><p>Agencia: $agencia<br></ td>";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="es">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Practica ABC</title>
<script language="JavaScript" type="text/javascript" src="../libs/funciones.js"></script>
<link rel="stylesheet" type="text/css" href="style/estilo.css" />
<link href="style/estilo.css" rel="stylesheet" type="text/css" />
</head>
<body bgcolor="" class="body" onLoad="Oculta('field2'); Oculta('field3');">
<center>
<br><br>
<body bgcolor="#0B0B3B" class="body">
</center>
		<form name="FrmEstuidante" action="InsertaEstudiante.php" target="_self" method='post'>
			<table align='center' class='tablados' border='0'>
			<input type="hidden" id="codpai" value="<?php print($codpai);?>"/>
			<input type='hidden' id='name' name='name'  style='width: 150px' value='<?php echo ($nombre)?>'>
			<input type='hidden' id='age' name='age'  style='width: 150px' value='<?php echo ($age)?>'>
				<tr>
					<th align="center" colspan="5">CATALOGO DE ESTUDIANTES</th>
				</tr>
				<tr>
					<td align="left">Primer Nombre:</td><td align="left"><input type="text" id='pnombre' name="pnombre" style="width: 250px" value=''></input>
					</td>
				</tr>
				<tr>
					<td align="left">Segundo Nombre:</td><td align="left"><input type="text" id='snombre' name="snombre" style="width: 250px" value=''></input>
					</td>
				</tr>
				<tr>
					<td align="left">Primer Apellido:</td><td align="left"><input type="text" id='papellido' name="papellido" style="width: 250px" value=''></input>
					</td>
				</tr>
				<tr>
					<td align="left">Segundo Apellido:</td><td align="left"><input type="text" id='sapellido' name="sapellido" style="width: 250px" value=''></input>
					</td>
				</tr>
				<tr>
					<td align="left">Edad:</td><td align="left"><input type="text" id='edad' name="edad" style="width: 60px" value=''></input>
					</td>
				</tr>
				<tr>
					<td align="left">Sexo:</td><td align="left"><input type="text" id='sexo' name="sexo" style="width: 60px" value=''></input>
					</td>
				</tr>
				<tr>
					<td align="left">Fecha Nacimiento:</td><td align="left"><input type="text" id='fnac' name="fnac" style="width: 80px" value='<?php echo $fecha;?>'></input>
					</td>
				</tr>						
				<tr>
					<td colspan="5" align="center"><input type='submit' name='bancos' value='Guardar'>
					<!--<a href='index.php'<font size='3' style='color:blue'><img src='fonts/volver.png' width='30' height='28'>-->
				<tr>	
			</table>
		</form>
		<?php
		//$tabla="<form action='' method='post'>";
		$tabla="<br><table align='center' class='tablados' border='0' width='32%'>";
		$tabla.="<tr>
				<th align='center' colspan='10'>LISTADO DE ESTUDIANTES</th>
			</tr>";
		$tabla.="<tr>
				<th>Id</th><th>Primer Nombre</th><th>Segundo Nombre</th><th>Primer Apellido</th><th>Segundo Apellido</th>
				<th>Sexo</th><th>Edad</th><th>FechaNacimiento</th><th>Editar</th><th>Eliminar</th>
			</tr>";
				$result=mysql_query("SELECT * FROM practicaabc.estudiante order by idestudiante asc",$link);
				while($row = mysql_fetch_array($result)) {
					$id=$row['idestudiante'];
					$nombre1=$row['primernombre'];$nombre2=$row['segundonombre'];$apellido1=$row['primerapellido'];
					$apellido2=$row['segundoapellido'];$sexo=$row['sexo'];$edad=$row['edad'];$fechanac=$row['fechanac'];
					$tabla.="<tr><td>$id</td><td>$nombre1</td><td>$nombre2</td><td>$apellido1</td><td>$apellido2</td><td>$sexo</td>
					<td>$edad</td><td>$fechanac</td><td align='center'><a href=\"FrmEditarEstudiante.php?id=$id\"><img  src='fonts/editar.png' width='22' height='24'></a></td>
					<td align='center'><a href=\"EliminaEstudiante.php?id=$id\"<font size='3' style='color:blue'><img src='fonts/delete.png' width='22' height='24' onclick=\"if(!confirm('Desea Eliminar Registro?'))return false\"></font><center></td></tr>";
					}
			$tabla.="</table></form>";	
			echo $tabla;
		?>
	</body>
</html>
