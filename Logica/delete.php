<?php

require_once "conexion.php";

$conexion = conexion();
$IdEmpresa = $_POST['idIdEmpresa'];
$sql = "CALL sp_eliminar_datos('$IdEmpresa')";
echo mysqli_query($conexion, $sql);
mysqli_close($conexion);
?>

<script type="text/javascript">
	//script de retorno a pagina de inicio y script de exito en el delete
	alert("Datos eliminados Exitosamante!!");
	window.location.href = '../index.php';
</script>