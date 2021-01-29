


<?php 
$nombre=$_POST["Nombre"];
$email=$_POST["email"];
$tel=$_POST["Tel"];
$asuntos=$_POST["Asunto"];
$mensaje=$_POST["Mensaje"];

$destinatario="ckubota54@gmail.com";//aqui va el correo que le va a llegar 
$asunto="Contacto por".$asuntos;//se construye el formato del correo
$carta.="Contacto por: $nombre\n";
$carta.="Correo del remitente: $email \n";
$carta.="Telefono del remitente: $tel \n";
$carta.="Mensaje: $mensaje"; 

$recaptcha = $_POST["g-recaptcha-response"];
 
	$url = 'https://www.google.com/recaptcha/api/siteverify';
	$data = array(
		'secret' => '6Lepoa8UAAAAAOOTgWuKWlcBSEUaEuvlWtzikgD3',
		'response' => $recaptcha
	);
	$options = array(
		'http' => array (
			'method' => 'POST',
			'content' => http_build_query($data)
		)
	);
	$context  = stream_context_create($options);
	$verify = file_get_contents($url, false, $context);
	$captcha_success = json_decode($verify);
	if ($captcha_success->success) {
	//enviando mensaje 
mail($destinatario, $asunto, $carta);
    
echo "<script type= >

Swal.fire(
  'Good job!',
  'You clicked the button!',
  'success'
)

</script>";

	} else {
	echo "lo siento eres un robot";
	}

?>



