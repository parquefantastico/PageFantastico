<?php include ('validar.php') ?>
<?php include ('menuyheader.php') ?>
<?php include ('conexion.php') ?>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
  
<!-- Optional: include a polyfill for ES6 Promises for IE11 and Android browser -->
<script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
<script src="sweetalert2.min.js"></script>
<link rel="stylesheet" href="sweetalert2.min.css">

<?php 

if($_GET['f']==1){

?>
<script type="text/javascript">
  const Toast = Swal.mixin({
  toast: true,
  position: 'top-end',
  showConfirmButton: false,
  timer: 3000
});

Toast.fire({
  type: 'success',
  title: '<h1> Transaccion Realizada</h1>',
  width: 600,
  padding: '1em',
})
</script>



<?php
}
?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper"  src="https://unpkg.com/sweetalert/dist/sweetalert.min.js">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <section class="content-header">
  
    <center>
    <img src="img/Logo.png" align="middle">
    </center>

<?php  
$sql="SELECT date(fecha) fechsintime FROM `fodndo_f` WHERE fecha=date(NOW())";
$result= mysqli_query($conexion,$sql);  
$row = $result->fetch_assoc();

if ( $row['fechsintime'] == $fechactual) { 
 ?>



  <section class="content">
<div class="row">
  <h1>
  <div class="col-md-12" style="text-align: center;">
  <a href="PHP/Nuevaventa.php" class="btn btn-primary" style="width: 150px; height: 150px" ><h2>Nueva <br> Venta</h2></a>
  <a href="Registros.php" class="btn btn-primary" style="width: 150px; height: 150px" ><h2>Registros  </h2></a>
   

     <a href="GenerarPDF.php" class="btn btn-primary" style="width: 150px; height: 150px" ><h2>Reporte  </h2></a>
     
     <a href="retiro.php" class="btn btn-primary" style="width: 150px; height: 150px" ><h2>Retiro</h2></a>
 



<?php
}else { 

?>
    <section class="content">
<div class="row">
  <h1>
  <div class="col-md-12" style="text-align: center;">
  <a href="Cargarfondo.php" class="btn btn-primary" style="width: 150px; height: 150px" ><h2>Cargar<br>Fondo  </h2></a>

<?php
}


?>








   
 
    
  </div>
  </h1>
  </div>
  </section>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i></a></li>
        <li class="active">Fantastico  </li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">

      <!--------------------------
        | Your Page Content Here |
        -------------------------->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<?php include ('scripts.php') ?>
 <?php include ('footer.php') ?>