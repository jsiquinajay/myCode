<?php
include("conexion.php");
$con=conexion();
//$idbanco= Repst('idbanco');
$nombre1=$_POST['pnombre'];
$nombre2=$_POST['snombre'];
$apellido1=$_POST['papellido'];
$apellido2=$_POST['sapellido'];
$edad=$_POST['edad'];
$sexo=$_POST['sexo'];
$fnac=$_POST['fnac'];
$fechaingresa=date("Y-m-d H:i:s");

/*echo "<td><p>Banco: $banco<br></ td>";
echo "<td><p>Status: $status<br></ td>";*/
if($nombre1==''){	
	echo "<SCRIPT language='JavaScript'>alert('No ha ingresado Datos');document.location=('./index.php');</script>";				
	die();
	}
				
	//trae el conteo de mensajes enviados por ruta
	$tabla="practicaabc.estudiante";
	$campos="primernombre,segundonombre,primerapellido,segundoapellido,sexo,edad,fechanac";
	$valores="'$nombre1','$nombre2','$apellido1','$apellido1','$sexo','$edad','$fnac'";
			$query="insert into $tabla ($campos) values ($valores)";
			//die($query);
			$resultado=mysql_query($query,$con);
		    mysql_close($con);
			echo "<script>alert('Registro Guardado Correctamente');document.location=('./index.php');</script>";
			//header('Location: FrmCatBanco.php');
?>
