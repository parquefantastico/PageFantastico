<?php

$server= '67.217.34.70';
$user= 'parquefa_naruto';
$password = 'Lalo37yayo';
$bd = 'parquefa_fantastic';

$conexion = mysqli_connect($server, $user, $password, $bd);
$conexion-> set_charset("utf8");
if (!$conexion){
	die("Error de conexion : ".mysqli_connect_errno());

}

?>