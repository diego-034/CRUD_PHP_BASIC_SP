<?php
require_once "conexion.php";

$conexion=conexion();

	$sql="CALL sp_mostrar_datos";
	$result= $conexion->query($sql) or die(mysqli_error($conexion));


$libros = array();

while( $rows = mysqli_fetch_assoc($result) ) {
 $libros[] = $rows;
}

if(isset($_POST["exportar"])) {
    if(!empty($libros)) {
    $filename = "Empresas.xls";
    header("Content-Type: application/vnd.ms-excel");
    header("Content-Disposition: attachment; filename=".$filename);
   
    $mostrar_columnas = false;
   
    foreach($libros as $libro) {
    if(!$mostrar_columnas) {
    echo implode("\t", array_keys($libro)) . "\n";
    $mostrar_columnas = true;
    }
    echo implode("\t", array_values($libro)) . "\n";
    }
   
    }else{
    echo 'No hay datos a exportar';
    }
    exit;
   }

   	mysqli_close($conexion);
?>