<?php 

	require_once "conexion.php";

	$conexion=conexion();
	$IdEmpresa=$_POST['idIdEmpresa'];
	$sql="CALL sp_eliminar_datos('$IdEmpresa')";
	echo mysqli_query($conexion,$sql);
