<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="es">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>ABC</title>
<script language="JavaScript" type="text/javascript" src="../libs/funciones.js"></script>
<link rel="stylesheet" type="text/css" href="style/estilomenu.css" />
<link href="../caexlogin/loginmodule.css" rel="stylesheet" type="text/css" > 
</head>
<?php
$fecha=date("Y-m-d"); 
?>
<html 
<head>
<title>Roles - Menu</title>
</head>
 <body bgcolor=#6495ED>
 <form action='' method='POST'>
	<table align='center'>
	        <tr><td>Nombre:</td><td><input type='text' name='user' size='36'></input></td></tr>
	        <tr><td>Fecha Nacimiento:</td><td><input type='text' name='psw' value='<?php echo $fecha?>'></input></td></tr>
		<tr><td>Fecha Ingreso:</td><td><input type='text' name='nombre' value='<?php echo $fecha?>'></input></td></tr>
                <tr><td>Puesto:</td><td>
		<select name="puesto" id="puesto" style="width:234px">
                <option value='0'>Elija Puesto</option>
                </select></td></tr>

                <tr><td>Estatus:</td><td>
		<select name="estatus" id="estatus" style="width:234px">
                <option value='0'>Elija Estatus</option>
                 <?php
    		//se llena el combo Banco
     		include("conexion.php");
     		$link=conexion();
     		$estatus= mysql_query("select * from estatususuario order by idEstatusUsuario asc",$link); 
     			while($row = mysql_fetch_array($estatus)) {
    			 printf("<option value='%s'>%s</option>",$row['idEstatusUsuario'],$row['Descripcion']);
    			 }
     			 mysql_close($conexion);
    		?>
                </select></td></tr>

                <tr><td>Tipo Sangre:</td><td>
		<select name="tsangre" id="tsangre" style="width:234px">
                <option value='0'>Elija Tipo Sangre</option>
                </select></td></tr>
         
                <tr><td>Fecha Egreso:</td><td><input type='text' name='nombre' value='<?php echo $fecha?>'></input></td></tr>

		<tr><td>Motivo Egreso:</td><td>
		<select name="megreso" id="megreso" style="width:234px">
                <option value='0'>Motivo Egreso</option>
                </select></td></tr>

		<tr><td>Forma de Pago:</td><td>
		<select name="fpago" id="fpago" style="width:234px">
                <option value='0'>Forma de Pago</option>
                </select></td></tr>
                
		<tr><td align='center' colspan='2'><br><input type='submit' value='Guardar'></input></td></tr>
   </form>  

<TABLE BORDER=1 CELLSPACING=1 CELLPADDING=1 align=center bgcolor=#48D1CC ><TR>
      <br>
      <TR>
      <TD>&nbsp;Id&nbsp;</TD>
      <TD>&nbsp;Nombre&nbsp;</TD>
      <TD>&nbsp;Fecha Nacimiento&nbsp;</TD>	
      <TD>&nbsp;Fecha Ingreso</TD>
      <TD>&nbsp;Puesto&nbsp;</TD>
      <TD>&nbsp;Estatus&nbsp;</TD>
      <TD>&nbsp;Tipo Sangre&nbsp;</TD>
      <TD>&nbsp;Fecha Egreso&nbsp;</TD>
      <TD>&nbsp;Motivo Egreso&nbsp;</TD>
      <TD>&nbsp;Forma Pago&nbsp;</TD>
      <TD>&nbsp;Modificar&nbsp;</TD>	
      <TD>&nbsp;Eliminar&nbsp;</TD>
      </TR> 

<?php      
   $result=mysql_query("select * from empleado",$link);
   while($row = mysql_fetch_array($result)) {
   $id=   $row['idEmpleado'];
   $nom= $row['Nombre'];
   $fnac= $row['FechaNacimiento'];
   $fingreso=  $row['FechaIngreso'];
   $puesto=$row['idPuesto']; 
   $idestatusemp=$row['idEstatusEmpleado'];
   $idtsangre=$row['idTipoSangre'];
   $fegreso=$row['FechaEgreso'];
   $idmegreso=$row['idMotivoEgreso']; 
   $idfpago=$row['idFormaPago']; 
        printf("<tr>
              <th
 	      <td>&nbsp;%s</td>
 	      <td>&nbsp;%s</td>		 
              <td>&nbsp;%s</td> 
              <td>&nbsp;%s</td> 
              <td>&nbsp;%s</td>
              <td>&nbsp;%s</td>
              <td>&nbsp;%s</td>
	      <td>&nbsp;%s</td>
              <td>&nbsp;%s</td>
              <td>&nbsp;%s</td>
	      <td><a href=\"frmModificaEmpleado.php?acc=1\">Modificar</a></td>
              <td><a href=\"borraEmpleado.php?id=$id\">Eliminar</a></td>
              </tr>",$row["idEmpleado"],$row["Nombre"],$row["FechaNacimiento"],$row["FechaIngreso"],$row["idPuesto"],$row["idEstatusEmpleado"],$row["idTipoSangre"],
              $row["FechaEgreso"],$row['idMotivoEgreso'],$row['idFormaPago']);
   }
   mysql_free_result($result);
   mysql_close($link);   
?>
</table> 
</body>
</html>
