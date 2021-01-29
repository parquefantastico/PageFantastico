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
$ticket=$_GET['t'];

$sql = "SELECT inv.id_inv, inv.descrip, inv.precio_unit,det.cant_tick, fan.id_descuento,  (det.cant_tick*inv.precio_unit) as total FROM inventario inv INNER JOIN det_ticket det ON
det.id_producto=inv.id_inv inner join fan_ticket fan on fan.id_ticket=det.id_ticket  WHERE det.id_ticket='".$ticket."'"; 
$result= mysqli_query($conexion,$sql);  
$prectotal=0;
    while($mostrar=mysqli_fetch_array($result)){
   switch ($mostrar['id_inv']) {
    case 1:
        $totalniños150= $totalniños150+$mostrar['total'];
        break;
    case 2:
        $totalniños80= $totalniños80+$mostrar['total'];
        break;
    
   }
    
    ?>
  


 




    <tr>
      <th 
       scope="col"><?php echo $mostrar['descrip'] ?></th>
         <th 
       scope="col"><?php echo '$'.$mostrar['precio_unit'] ?></th>
        <th 
        
        
        
        
       scope="col"><?php echo 'x'.$mostrar['cant_tick'] ?></th>
       <th 
      
          <th 
       scope="col"><?php echo '$'.$mostrar['total'];




$prectotal=$prectotal+$mostrar['total'];


       ?></th>
        
    </tr>

      <?php 

      }

     ?>
  </tbody>
</table>
</h7>
  </div>
  
  <?php
 
  $sql2 = "select des.id_descueto, des.descuento from descuento des inner join fan_ticket fan on fan.id_descuento=des.id_descueto where fan.id_ticket='".$ticket."'";
  $result2= mysqli_query($conexion,$sql2);
  $mostrar2=mysqli_fetch_array($result2);
  
  
  switch ($mostrar2['id_descueto']) {
      case 1:
           $totalniños150= $totalniños150;
        $totalniños80= $totalniños80;
          break;
    case 2:
        $totalniños150= $totalniños150*.20;
        $totalniños80= $totalniños80*.25;
        break;
    case 3:
        $totalniños150= $totalniños150*.50;
        $totalniños80= $totalniños80*.50;
        break;
         case 4:
            $mod2x1a=$totalniños150%300;
             $cal2x1a=$totalniños150-$mod2x1a;
             $cal2x1a=$cal2x1a/2; 
             $totalniños150=$cal2x1a;
               $mod2x1b=$totalniños80%160;
             $cal2x1b=$totalniños80-$mod2x1b;
             $cal2x1b=$cal2x1b/2; 
             $totalniños80=$cal2x1b;
     
        break;
  }
  
  if($mostrar2['id_descueto']!=1){
     $semitotal=$totalniños150+$totalniños80;
     $prectotal= $prectotal-$semitotal;
  }
  ?>
  

      </h7>
 <section class="content">
<div class="row">
  <div class="col-md-12">

  <br>
<div class="box box-primary"><br>
    <form class="form-horizontal" method="post" id="addproduct" autocomplete="off" action="PHP/agregarticketfondo.php?id=1&t=<?php echo $ticket ?>" role="form">
       <div class="form-group">
<div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Descuento de entradas</label>
    <div class="col-md-4">
      <input type="text" name="descuento" required class="form-control" id="descuento" placeholder="Subtotal" value= " <?php echo $mostrar2['descuento']?>" readonly> 
    </div>
  </div> 

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Total $</label>
    <div class="col-md-4">
      <input type="text" name="subtotal" required class="form-control" id="subtotal" placeholder="Subtotal" value= " <?php echo $prectotal?>" readonly> 
    </div>
  </div> 
  
         <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Tipo de Pago</label>
    <div class="col-md-6">
     <select name="tipo_pago" class="form-control" > 
         <option value="Efectivo">Efectivo</option>
         <option value="Tarjeta">Tarjeta</option>
         
        </select>
    </div>
  </div>   

         <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Pago $</label>
    <div class="col-md-6">
      <input type="text" name="pago" required pattern= "[0-9]+" autofocus class="form-control" id="iva" placeholder="Pago" onChange="calculo();">
    </div>
  </div> 

       <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Cambio $</label>
    <div class="col-md-6">
      <input type="text" name="cambio" required class="form-control" id="nombrl" placeholder="Cambio" readonly>
    </div>
  </div> 

  </div> 

  <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
      <button type="submit" class="btn btn-primary">Agregar Completar venta</button>
    </div>
  </div>

  </div>


            <script> 

function calculo() {
  //tasa de impuesto
  var tasa = 16;

  //monto a calcular el impuesto
  var monto = $("input[name=subtotal]").val();
   var pago = $("input[name=pago]").val();

  //calsulo del impuesto
  var cambio = (pago - monto);
if(cambio<0){

swal.fire({
	title: "Pago insuficiente",
	 
   allowOutsideClick: false,
   allowEscapeKey: false,

 
});
$("input[name=pago]").val(null);

} else  //se carga el iva en el campo correspondien te
  $("input[name=cambio]").val(cambio);

  //se carga el total en el campo correspondiente
 

}

 </script>



  

 










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