<?php  

include("conexion.php");

$query= "SELECT f.id_ticket, f.fondo_actual, f.oper_fond, f.hora_local, t.total  from fodndo_f f left join fan_ticket t on t.id_ticket=f.id_ticket WHERE f.fecha=date(NOW()) ORDER BY f.id_fondo DESC";

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