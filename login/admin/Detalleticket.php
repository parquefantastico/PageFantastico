<?php include ('validar.php') ?>
<?php include ('menuyheader.php') ?>
<?php include ('conexion.php')?>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
  
<!-- Optional: include a polyfill for ES6 Promises for IE11 and Android browser -->
<script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
<script src="sweetalert2.min.js"></script>
<link rel="stylesheet" href="sweetalert2.min.css">
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <section class="content-header">


<?php $ticket=$_GET['id']; ?>
<?php if($ticket==null){
    
 ?>   
    
    <script>
swal.fire(
    title: 'Sin ticket de referencia',
    type: 'warning',
    timer 2000,
    
    )        
        
        
        
    </script>
    
    
    
    
 <?php   
    
}else{



?>


<div class="contenedor">
 <center>
      <h1>
        Ticket de venta
      </h1>
  </center><br> 
<h7>
<table class="table table-striped">
  <thead> 
    <tr>
      <th scope="col">Descripcion </th>
      <th scope="col">Precio Unitario</th>
      <th scope="col">Cantidad</th>
      <th scope="col">Importe</th>
    </tr>
  </thead>
  <tbody>

<?php 
$ticket=$_GET['id'];

$sql = "SELECT inv.descrip, inv.precio_unit,det.cant_tick, (det.cant_tick*inv.precio_unit) as totals FROM inventario inv INNER JOIN det_ticket det ON
det.id_producto=inv.id_inv inner join fan_ticket t on det.id_ticket=t.id_ticket WHERE det.id_ticket='".$ticket."'"; 
$result= mysqli_query($conexion,$sql);  
$prectotal=0;
    while($mostrar=mysqli_fetch_array($result)){
    ?>
  


 




    <tr>
      <th 
       scope="col"><?php echo $mostrar['descrip'] ?></th>
         <th 
       scope="col"><?php echo '$'.$mostrar['precio_unit'] ?></th>
        <th 
       scope="col"><?php echo 'x'.$mostrar['cant_tick'] ?></th>
          <th 
       scope="col"><?php echo '$'.$mostrar['totals'];
$prectotal=$prectotal+$mostrar['totals'];


       ?></th>
        
    </tr>

      <?php 

      }

     ?>

<?php  
$sql="SELECT total, tip_pago FROM fan_ticket WHERE id_ticket='".$ticket."'";
$result2= mysqli_query($conexion,$sql);  
$row2 = $result2->fetch_assoc();


 ?>



     <table class="table table-striped">
  <thead> 
    <tr>
      <th scope="col">Total</th>
    <th scope="col">Tipo de Pago</th>
    </tr>
  </thead>
  <tr>
     <th 
       scope="col"><?php echo $row2['total'] ?></th>
          <th 
       scope="col"><?php echo $row2['tip_pago'];


       ?></th>
       <th><a class="btn btn-primary" href="Registros.php" role="button">Regresar</a></th>
  </tr>
  <tbody>

  </tbody>
</table>
</h7>
  </div>

      </h7>

  

 <?php } ?>










      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Here</li>
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








  
  
<?php include ('footer.php') ?>
<?php include ('scripts.php') ?>