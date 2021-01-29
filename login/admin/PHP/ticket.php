<?php
include ('conexion.php');


$id_ticket=$_GET['t'];




if( !empty($_POST['cant'])){

$cant=$_POST['cant'];
$id_inv=$_POST['id_inv1'];
$query = "INSERT INTO det_ticket (id_ticket,id_producto,cant_tick) values ('$id_ticket','$id_inv','$cant')";


$mysqli->query($query);
}
if( !empty($_POST['cant2'])){

$cant=$_POST['cant2'];
 $id_inv=$_POST['id_inv2'];
$query = "INSERT INTO det_ticket (id_ticket,id_producto,cant_tick) values ('$id_ticket','$id_inv','$cant')";


$mysqli->query($query);
}
if( !empty($_POST['cant3'])){

$cant=$_POST['cant3'];
 $id_inv=$_POST['id_inv3'];
$query = "INSERT INTO det_ticket (id_ticket,id_producto,cant_tick) values ('$id_ticket','$id_inv','$cant')";


$mysqli->query($query);
}
 if(!empty($_POST['cant4'])){

$cant=$_POST['cant4'];
 $id_inv=$_POST['id_inv4'];
$query = "INSERT INTO det_ticket (id_ticket,id_producto,cant_tick) values ('$id_ticket','$id_inv','$cant')";


$mysqli->query($query);
}
 if(!empty($_POST['cant5'])){

$cant=$_POST['cant5'];
 $id_inv=$_POST['id_inv5'];
$query = "INSERT INTO det_ticket (id_ticket,id_producto,cant_tick) values ('$id_ticket','$id_inv','$cant')";


$mysqli->query($query);
}
 if(!empty($_POST['cant6'])){
$cant=$_POST['cant6'];
 $id_inv=$_POST['id_inv6'];
$query = "INSERT INTO det_ticket (id_ticket,id_producto,cant_tick) values ('$id_ticket','$id_inv','$cant')";


$mysqli->query($query);
}
if(!empty($_POST['cant7'])){
$cant=$_POST['cant7'];
 $id_inv=$_POST['id_inv7'];
$query = "INSERT INTO det_ticket (id_ticket,id_producto,cant_tick) values ('$id_ticket','$id_inv','$cant')";


$mysqli->query($query);
}
if(!empty($_POST['cant8'])){
$cant=$_POST['cant8'];
 $id_inv=$_POST['id_inv8'];
$query = "INSERT INTO det_ticket (id_ticket,id_producto,cant_tick) values ('$id_ticket','$id_inv','$cant')";


$mysqli->query($query);
}
if(!empty($_POST['descuento'])){
$des=$_POST['descuento'];
 
$query = "UPDATE fan_ticket
SET id_descuento = '$des'
WHERE id_ticket = '$id_ticket'";


$mysqli->query($query);
}

header("Location: ../ticket.php?t=$id_ticket");


 ?>


