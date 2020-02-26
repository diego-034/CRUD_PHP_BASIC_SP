
<?php 
	require_once "conexion.php";
	$conexion=conexion();

	$sql="CALL sp_mostrar_datos";
	$result= $conexion->query($sql) or die(mysqli_error($conexion));
 ?>
 