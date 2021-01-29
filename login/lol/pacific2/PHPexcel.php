<?php 
require ('conexion.php');
$query= "SELECT cp.id_Contacto_Pacific as ID, cp.nombre_pc as NOMBRE, cp.apellido_pc as APELLIDO,
cp.tel_pc as TELEFONO, cp.correo_e_pc as CORREO, cp.campus_pc as CAMPUS, mpc.nombre_materia AS INTERES, cp.revalidacion_pc as REVAL, cp.fechade_nac_pc as FECHANAC, cp.fecha_ingreso as FECHAREG, cp.inscrito_pc
as REGISTRO, cp.otrauni as OTRAUNI, cp.cantacto as CONTACTO, cp.nota as NOTA FROM contacto_pacific cp inner JOIN materias_pc mpc on cp.interes_pc=mpc.id_materias";

$resultado = mysqli_query($conexion, $query);

require ('PHPEx/Classes/PHPExcel.php');

$fila =2;
$objPHPExcel = new PHPExcel();
$objPHPExcel->getProperties()->setCreator("Pacific University")->setDescription("Reporte de Contactos");
$objPHPExcel->setActiveSheetIndex(0);
$objPHPExcel->getActiveSheet()->setTitle("Contactos Coatza");
$objPHPExcel->getActiveSheet()->setCellValue("A1","NOMBRE");
$objPHPExcel->getActiveSheet()->setCellValue("B1","APELLIDO");
$objPHPExcel->getActiveSheet()->setCellValue("C1","TELEFONO");
$objPHPExcel->getActiveSheet()->setCellValue("D1","CORREO");
$objPHPExcel->getActiveSheet()->setCellValue("E1","CAMPUS");
$objPHPExcel->getActiveSheet()->setCellValue("F1","CARRERA");
$objPHPExcel->getActiveSheet()->setCellValue("G1","REVALIDACION");
$objPHPExcel->getActiveSheet()->setCellValue("H1","FECHA DE NACIMIENTO");
$objPHPExcel->getActiveSheet()->setCellValue("I1","FECHA DE REGISTRO");
$objPHPExcel->getActiveSheet()->setCellValue("J1","INSCRITO");
$objPHPExcel->getActiveSheet()->setCellValue("K1","CONSULTO OTRA U.");
$objPHPExcel->getActiveSheet()->setCellValue("L1","MEDIO DE CONTACTO");
$objPHPExcel->getActiveSheet()->setCellValue("M1","NOTA");
while($row=$resultado->fetch_assoc()){
    
    $objPHPExcel->getActiveSheet()->setCellValue("A".$fila,$row["NOMBRE"]);
$objPHPExcel->getActiveSheet()->setCellValue("B".$fila,$row["APELLIDO"]);
$objPHPExcel->getActiveSheet()->setCellValue("C".$fila,$row["TELEFONO"]);
$objPHPExcel->getActiveSheet()->setCellValue("D".$fila,$row["CORREO"]);
$objPHPExcel->getActiveSheet()->setCellValue("E".$fila,$row["CAMPUS"]);
$objPHPExcel->getActiveSheet()->setCellValue("F".$fila,$row["INTERES"]);
$objPHPExcel->getActiveSheet()->setCellValue("G".$fila,$row["REVAL"]);
$objPHPExcel->getActiveSheet()->setCellValue("H".$fila,$row["FECHANAC"]);
$objPHPExcel->getActiveSheet()->setCellValue("I".$fila,$row["FECHAREG"]);
$objPHPExcel->getActiveSheet()->setCellValue("J".$fila,$row["REGISTRO"]);
$objPHPExcel->getActiveSheet()->setCellValue("K".$fila,$row["OTRAUNI"]);
$objPHPExcel->getActiveSheet()->setCellValue("L".$fila,$row["CONTACTO"]);
$objPHPExcel->getActiveSheet()->setCellValue("M".$fila,$row["NOTA"]);
$fila++;
}
	header("Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet");
	header('Content-Disposition: attachment;filename="ContactosPacificUniversity.xlsx"');
	header('Cache-Control: max-age=0');
$Writer = new PHPExcel_Writer_Excel2007($objPHPExcel);
$Writer->save('php://output')

?>