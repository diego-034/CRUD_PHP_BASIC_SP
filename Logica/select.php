<?php 
	require_once "conexion.php";
	$conexion=conexion();

	$IdEmpresa=$_POST['idIdEmpresa'];
	$sql="CALL sp_obtener_empresa($IdEmpresa)";

	$result=mysqli_query($conexion,$sql);

	$ver=mysqli_fetch_row($result);

	$datos=array(
        'idIdEmpresa2'=>$ver[0],
        'idRazonSocial2'=>$ver[1],
        'idIdDocumento2'=>$ver[2],
        'idNDocumento2'=>$ver[3],
        'idTelefono2'=>$ver[4],
        'idCelular2'=>$ver[5],
        'idCorreo2'=>$ver[6],
        'idTPersona2'=>$ver[7],
        'idActivo2'=>$ver[8],
        '#'=>$ver[9]); 
         
      echo json_encode($datos); 
      mysqli_close($conexion);
 ?>