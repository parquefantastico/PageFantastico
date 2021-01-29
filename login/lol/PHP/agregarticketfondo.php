<!DOCTYPE html>
<html>
<head>
	<title> Fantastico</title>


	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
	
<!-- Optional: include a polyfill for ES6 Promises for IE11 and Android browser -->
<script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
<script src="sweetalert2.min.js"></script>
<link rel="stylesheet" href="sweetalert2.min.css">
</head>
<body>
<?php
include ('conexion.php')?>
<?php
$ticket=$_GET['t'];
$total=$_POST['subtotal'];
$tippago=$_POST['tipo_pago'];
$cambio=$_POST['cambio'];
$pagado=$_POST['pago'];





$query = "UPDATE fan_ticket set total='$total', tip_pago='$tippago', pag_t='$pagado', camb_t='$cambio' where id_ticket='$ticket'";


$mysqli->query($query);

?>





<script type="application/ecmascript" >



// Attempting to assign a value to a string's .length property has no observable effect. 



var texts ='Procesando...\nTipo de pago: <?php echo $tippago?>    \n     Total: <?php echo $total?> \n     Pagado: <?php echo $pagado ?>    \n   Cambio: <?php echo $cambio ?> ';




Swal.fire({
  title: texts,
   allowOutsideClick: false,
   allowEscapeKey: false,
  width: 600,
  padding: '1em',
 type: 'success',
  background: '#fff',
  backdrop: `
    rgba(47,77,177,0.73)
  `
}).then((result) => {
  if (result.value) {
   window.location.href='agregarofondo.php?id=2&t=<?php echo $ticket ?>';

  }
})


</script>

</body>
</html>