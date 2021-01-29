<?php
session_start();
$_SESSION['contrasenasup']="Fantastico24";
$fechactual=date("Y-m-d");
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {

} else {
   echo "Esta pagina es solo para usuarios registrados.<br>";
   echo "<br><a href='../index.html'>Login</a>";

exit;
}

$now = time();

if($now > $_SESSION['expire']) {
session_destroy();

echo "Su sesion a terminado,
<a href='../index.html'>Necesita Hacer Login</a>";
exit;
}
?>