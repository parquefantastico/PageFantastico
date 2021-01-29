<?php  $mysqli = new mysqli("67.217.34.70","parquefa_naruto","Lalo37yayo","parquefa_fantastic"); ?>
<?php

$server= '67.217.34.70';
$user= 'parquefa_naruto';
$password = 'Lalo37yayo';
$bd = 'parquefa_fantastic';

$mysqli = mysqli_connect($server, $user, $password, $bd);
$mysqli-> set_charset("utf8");
if (!$mysqli){
	die("Error de conexion : ".mysqli_connect_errno());

}

?>