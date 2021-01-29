<?php  

include("conexion.php");

$query= "SELECT CONCAT(nombre_cli,' ',apellidop_cli,' ',apellidom_cli ) AS nombre, tel_cli, correo_e_cli, num_evento, id_clientes FROM clientes order by num_evento asc";

$resultado = mysqli_query($mysqli, $query);

if ( !$resultado ){
	die("Error");

}else{
	while( $data= mysqli_fetch_assoc($resultado)){
		$arreglo["data"][] = $data;
	}
	echo json_encode($arreglo);
}

mysqli_free_result($resultado);
mysqli_close($mysqli);


?>