<?php 
include ('conexion.php');
$nombre= $_POST['nombre'];

$apellido=$_POST['apellido'];
$tel=$_POST['tel'];
$correo=$_POST['correo'];
$fecha_nac= $_POST['fecha_nac'];
$campus= $_POST['Campus'];
$carrera= $_POST['carrera'];
$revalidacion= $_POST['revalidacion'];
$uni_unic= $_POST['uni-unic'];
$sql="INSERT INTO contacto_pacific (nombre_pc,apellido_pc,tel_pc,correo_e_pc,campus_pc,interes_pc,revalidacion_pc,fechade_nac_pc,inscrito_pc) 
VALUES ('$nombre','$apellido','$tel','$correo','$campus','$carrera','$revalidacion','$fecha_nac','NO')";
$conexion->query($sql);
header("Location: index.php?f=1");


?>