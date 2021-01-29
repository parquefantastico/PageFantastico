<?php  

include("conexion.php");

$query= "SELECT cp.id_Contacto_Pacific as ID, cp.nombre_pc as NOMBRE, cp.apellido_pc as APELLIDO,
cp.tel_pc as TELEFONO, cp.correo_e_pc as CORREO, cp.campus_pc as CAMPUS, mpc.nombre_materia AS INTERES, cp.revalidacion_pc as REVAL, cp.fechade_nac_pc as FECHANAC, cp.fecha_ingreso as FECHAREG, cp.inscrito_pc
as REGISTRO, cp.otrauni as OTRAUNI, cp.cantacto as CONTACTO, cp.nota as NOTA FROM contacto_pacific cp inner JOIN materias_pc mpc on cp.interes_pc=mpc.id_materias";

$resultado = mysqli_query($conexion, $query);

if ( !$resultado ){
	die("Error");

}else{
	while( $data= mysqli_fetch_assoc($resultado)){
		$arreglo["data"][] = $data;
	}
	echo json_encode($arreglo);
}

mysqli_free_result($resultado);
mysqli_close($conexion);


?>