<?php include ('conexion.php');?>
<?php
 $nombre=$_POST['nombre'];
$apellidop=$_POST['apellidop'];
$apelldiom=$_POST['apellidom'];
$numero=$_POST['numero'];
$direccion=$_POST['direccion'];
$correo=$_POST['correo'];

echo $apellidop;
echo $apelldiom;
echo $numero;
echo $direccion;
echo $correo;

if($mysqli->connect_errno)
{
	echo "Existe un error en la conexion";
	return true;
}

	$query = "INSERT INTO clientes (nombre_cli,apellidop_cli,apellidom_cli,direccion_cli,tel_cli,correo_e_cli) values
     ('$nombre','$apellidop','$apelldiom','$direccion','$numero','$correo')";


$mysqli->query($query);
header("Location: ../index.php?f=1");

?>