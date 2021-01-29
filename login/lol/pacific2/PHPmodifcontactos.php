<?php 
include ('conexion.php');
$nombre= $_POST['nombre'];

$apellido =$_POST['apellido'];
$tel =$_POST['tel'];
$correo=$_POST['correo'];
$fecha_nac= $_POST['fecha_nac'];
$campus= $_POST['Campus'];
$carrera= $_POST['carrera'];
$revalidacion= $_POST['revalidacion'];
$uni_unic= $_POST['uni-unic'];
$nota=$_POST['nota'];
$mcontacto=$_POST['m-contacto'];
$inscrito=$_POST['inscrito'];
$id=$_POST['id'];



Modificarcontacto($nombre, $apellido,$tel,$correo,$fecha_nac,$campus,$carrera,$revalidacion,$uni_unic,$nota,$mcontacto,$inscrito,$id);

function Modificarcontacto($nombre1, $apellido1,$tel1,$correo1,$fecha_nac1,$campus1,$carrera1,$revalidacion1,$uni_unic1,$nota1,$mcontacto1,$inscrito1,$id1){

 $sentencia="UPDATE contacto_pacific SET nombre_pc='".$nombre1."', apellido_pc='".$apellido1."', tel_pc='".$tel1."', correo_e_pc='".$correo1."',campus_pc='".$campus1."',interes_pc='".$carrera1."',revalidacion_pc='".$revalidacion1."',fechade_nac_pc='".$fecha_nac1."',inscrito_pc='".$inscrito1."',otrauni='".$uni_unic1."',cantacto='".$mcontacto1."',nota='".$nota1."' where id_Contacto_Pacific='".$id1."'";
    $conexion->query($sentencia) or die ("Error al actualizar datos".mysqli_error($conexion));
}








?>