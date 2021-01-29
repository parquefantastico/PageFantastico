
<?php include ('conexion.php');?>
<?php




$operacion=$_GET['id'];






if($mysqli->connect_errno)
{
	echo "Existe un error en la conexion";
	return true;
}

switch($operacion) {
case '1':
$ticket=NULL;
$op='Cargo';
$cantidad=$_POST['cantidad'];
	$query = "INSERT INTO fodndo_f (fondo_actual,oper_fond,fecha,hora_local) values ('$cantidad','$op',NOW(),NOW())";


$mysqli->query($query);
header("Location: ../index.php?f=1");
	break;
case '2': 
$d=$_GET['t'];
$sql="SELECT total FROM `fan_ticket` ORDER BY id_ticket DESC LIMIT 1";
$result= mysqli_query($mysqli,$sql);  
$row = $result->fetch_assoc();
$totalticket=$row['total'];
$sql2="SELECT fondo_actual FROM fodndo_f ORDER BY id_fondo DESC LIMIT 1";
$result2= mysqli_query($mysqli,$sql2);  
$row2 = $result2->fetch_assoc();
$totalfondo=$row2['fondo_actual'];
$fondoact=$totalticket+$totalfondo;
$op='Venta';
$query = "INSERT INTO fodndo_f (fondo_actual,oper_fond,fecha,id_ticket,hora_local) values ('$fondoact','$op',NOW(),'$d',NOW())";


$mysqli->query($query);


header("Location: imprimirticket.php?t=$d");



break;
case '3':
    $d=$_GET['t'];
    $sql="SELECT f.total, f.pag_t, f.camb_t, f.rt from fan_ticket f  WHERE f.id_ticket='".$d."'";
$result= mysqli_query($mysqli,$sql);  
$row = $result->fetch_assoc();
if($row['rt']>0){
$sql2="select fondo_actual from fodndo_f order by id_fondo DESC limit 1"; 
$resul2= mysqli_query($mysqli,$sql2);  
$row2 = $resul2->fetch_assoc();
$nuevofondo=$row2['fondo_actual']-$row['total'];
$query = "INSERT INTO fodndo_f (fondo_actual,oper_fond,fecha,id_ticket,hora_local) values ('$nuevofondo','Reembolso',NOW(),'$d',NOW())";


$mysqli->query($query);
$queryb = "UPDATE fan_ticket set rt=0 where id_ticket='$d'";


$mysqli->query($queryb);
$queryb2 = "UPDATE det_ticket set R=0 where id_ticket='$d'";


$mysqli->query($queryb2);

header("Location: imprimirticketrem.php?t=$d");
}else {
    echo "lo siento bro ya fue devuelto";
}
break;
case '4':
    $cant=$_POST['cant'];
   
$query = "INSERT INTO fan_ticket (total) values ($cant)";
$mysqli->query($query);
$d = $mysqli->insert_id ; 
$sql2="select fondo_actual from fodndo_f order by id_fondo DESC limit 1"; 
$resul2= mysqli_query($mysqli,$sql2);  
$row2 = $resul2->fetch_assoc();

$nuevofondo=($row2['fondo_actual']-$cant); 

$query2 = "INSERT INTO fodndo_f (fondo_actual,oper_fond,fecha,id_ticket,hora_local) values ('$nuevofondo','Retiro',NOW(),'$d',NOW())";


$mysqli->query($query2);
header("Location: imprimirticketret.php?t=$d");


}






?>
