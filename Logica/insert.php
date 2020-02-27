<?php 

	require_once "conexion.php";

	$conexion=conexion();

   

	$RazonSocial=$_POST['idRazonSocial'];
    $IdDocumento= $_POST['idIdDocumento'];
	$NDocumento=$_POST['idNDocumento'];
    $Telefono=$_POST['idTelefono'];
    $Celular=$_POST['idCelular'];
    $Correo=$_POST['idCorreo'];
    $TPersona=$_POST['idTPersona'];
    $Activo=$_POST['idActivo'];
    $FIngreso=strftime( "%Y-%m-%d %H-%M-%S", time() );

	$sql="CALL sp_insertar_datos('$RazonSocial',
                                '$IdDocumento',
                                '$NDocumento',
                                '$Telefono',
                                '$Celular',
                                '$Correo',
                                '$TPersona',
                                '$Activo',
                                '$FIngreso')";
    echo mysqli_query($conexion,$sql);
    mysqli_close($conexion);
 ?>
 
<script type="text/javascript">
	//script de retorno a pagina de inicio y script de exito en la insert
	alert("Datos Ingresados Exitosamante!!");
	window.location.href='../index.php';
</script>