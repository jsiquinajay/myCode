<?php
include("conexion.php");
$con=conexion();
$id=$_GET['id'];

if(true){
	$querydel="delete from practicaabc.estudiante where idestudiante='$id'";
	$resultado=mysql_query($querydel,$con);
	mysql_close($con);	
	//mensajes de alerta
if($resultado){
	//si existe repuesta de eliminacion muestra:
	echo "<script>alert('Registro Eliminado');document.location=('./index.php');</script>"; 
}else{
	echo "<script>alert('No se puede elimiar el registro correctamente');document.location=('./index.php');</script>"; 
	}
}else{
	
	echo "<script>alert('Error... $salida');document.location=('./index.php');</script>"; 
	
	}
?>
