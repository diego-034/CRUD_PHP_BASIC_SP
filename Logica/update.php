<?php 
	require_once "conexion.php";

	$conexion=conexion();

	$RazonSocial=$_POST['idRazonSocial'];
	$IdDocumento=$_POST['idIdDocumento'];
	$NDocumento=$_POST['idNDocumento'];
    $Telefono=$_POST['idTelefono'];
    $Celular=$_POST['idCelular'];
    $Correo=$_POST['idCorreo'];
    $TPersona=$_POST['idTPersona'];
    $Activo=$_POST['idActivo'];
    $FIngreso=$_POST['idFIngreso'];
    $IdEmpresa=$_POST['idIdEmpresa'];

	$sql="CALL sp_actualizar_datos('$RazonSocial',
									'$IdDocumento',
									'$NDocumento',
                                    '$Telefono',
                                    '$Celular',
                                    '$Correo',
                                    '$TPersona',
                                    '$Activo',
                                    '$FIngreso',
                                    '$IdEmpresa')";
	echo mysqli_query($conexion,$sql);
 ?>