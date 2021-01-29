<?php
include ('conexion.php');

if($mysqli->connect_errno)
{
	echo "Existe un error en la conexion";
	return true;
}


$query = "INSERT INTO `fan_ticket`( `total`, `tip_pago`) VALUES (NULL,NULL)";


$mysqli->query($query);

$id=$mysqli->insert_id;
echo $id;
header("Location: ../caja.php?id=$id");



?>