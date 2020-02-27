<?php 
	require_once "conexion.php";

	$conexion=conexion();

	$RazonSocial=$_POST['idRazonSocial2'];
	$IdDocumento=$_POST['idIdDocumento2'];
	$NDocumento=$_POST['idNDocumento2'];
    $Telefono=$_POST['idTelefono2'];
    $Celular=$_POST['idCelular2'];
    $Correo=$_POST['idCorreo2'];
    $TPersona=$_POST['idTPersona2'];
    $Activo=$_POST['idActivo2'];
    $IdEmpresa=$_POST['idIdEmpresa2'];

	$sql="CALL sp_actualizar_datos('$RazonSocial',
									'$IdDocumento',
									'$NDocumento',
                                    '$Telefono',
                                    '$Celular',
                                    '$Correo',
                                    '$TPersona',
                                    '$Activo',
                                    '$IdEmpresa')";
    
    $result= $conexion->query($sql) or die(mysqli_error($conexion));
    mysqli_close($conexion);
    
 ?>
 
<script type="text/javascript">
	//script de retorno a pagina de inicio y script de exito en la update
	alert("Datos Actualizados Exitosamante!!");
	window.location.href='../index.php';
</script>