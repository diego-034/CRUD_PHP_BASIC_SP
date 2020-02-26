<?php 
	require_once "conexion.php";
	$conexion=conexion();

	$IdEmpresa=$_POST['idIdEmpresa'];
	$sql="CALL sp_obtener_regJuego($IdEmpresa)";

	$result=mysqli_query($conexion,$sql);

	$ver=mysqli_fetch_row($result);

	$datos=array(
        'idRazonSocial'=>$ver[0],
        'idIdDocumento'=>$ver[1],
        'idNDocumento'=>$ver[2],
        'idTelefono'=>$ver[3],
        'idCelular'=>$ver[4],
        'idCorreo'=>$ver[5],
        'idTPersona'=>$ver[6],
        'idActivo'=>$ver[7]);
        echo json_encode($datos);
 ?>