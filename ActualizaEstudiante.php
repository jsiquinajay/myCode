<?php
include("conexion.php");
$con=conexion();
$idest=$_POST['idest'];
$nombre1=$_POST['pnombre'];
$nombre2=$_POST['snombre'];
$apellido1=$_POST['papellido'];
$apellido2=$_POST['sapellido'];
$edad=$_POST['edad'];
$sexo=$_POST['sexo'];
$fnac=$_POST['fnac'];
	$query="update practicaabc.estudiante set primernombre='$nombre1',segundonombre='$nombre2' ,primerapellido='$apellido1',segundoapellido='$apellido2',
	sexo='$sexo',edad='$edad',fechanac='$fnac' where idestudiante='$idest'";
	$resultado=mysql_query($query,$con);
    mysql_close($con);
	if($resultado){
	echo"<script>alert('Registro Atualizado Correctamente');document.location=('./index.php');</script>";
	exit;
	}else{
	echo"<script>alert('Error al actualizar...');document.location=('./index.php');</script>";
	}
?>
