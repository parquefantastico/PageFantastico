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
      <?php  
$sql="SELECT SUM(det.cant_tick) as total FROM det_ticket det inner JOIN fodndo_f f ON f.id_ticket=det.id_ticket WHERE det.id_producto =1 AND f.fecha=date(NOW()) AND det.R=1";
$result= mysqli_query($conexion,$sql);  
$row = $result->fetch_assoc();


$sql2="SELECT SUM(det.cant_tick) as total2 FROM det_ticket det inner JOIN fodndo_f f ON f.id_ticket=det.id_ticket WHERE det.id_producto =2 AND f.fecha=date(NOW()) AND det.R=1";
$result2= mysqli_query($conexion,$sql2);  
$row2 = $result2->fetch_assoc();
$sql3="SELECT SUM(det.cant_tick) as total3 FROM det_ticket det inner JOIN fodndo_f f ON f.id_ticket=det.id_ticket WHERE det.id_producto =3 AND f.fecha=date(NOW()) AND det.R=1";
$result3= mysqli_query($conexion,$sql3);  
$row3 = $result3->fetch_assoc();
$sql4="SELECT SUM(det.cant_tick) as total4 FROM det_ticket det inner JOIN fodndo_f f ON f.id_ticket=det.id_ticket WHERE det.id_producto =4 AND f.fecha=date(NOW()) AND det.R=1";
$result4= mysqli_query($conexion,$sql4);  
$row4 = $result4->fetch_assoc();
$sql5="SELECT SUM(det.cant_tick) as total5 FROM det_ticket det inner JOIN fodndo_f f ON f.id_ticket=det.id_ticket WHERE det.id_producto =5 AND f.fecha=date(NOW()) AND det.R=1";
$result5= mysqli_query($conexion,$sql5);  
$row5 = $result5->fetch_assoc();
$sql6="SELECT SUM(det.cant_tick) as total6 FROM det_ticket det inner JOIN fodndo_f f ON f.id_ticket=det.id_ticket WHERE det.id_producto =6 AND f.fecha=date(NOW()) AND det.R=1";
$result6= mysqli_query($conexion,$sql6);  
$row6 = $result6->fetch_assoc();


$sql11="SELECT fondo_actual FROM fodndo_f WHERE oper_fond='Cargo' AND fecha= date(NOW())";
$result11= mysqli_query($conexion,$sql11);  
$row11 = $result11->fetch_assoc();


?>
  </center><br> 
<h7>
<table class="table table-striped">
  <thead> 
    <tr>
       <tr>
           <th scope="col">--</th>
      <th scope="col">Niños +2 </th>
      <th scope="col">Niños -2</th>
      <th scope="col">Adulto +18</th>
      <th scope="col">Calcetines</th>
         <th scope="col">Niño -1</th>
      <th scope="col">Dinero F</th>
    </tr>
    <tr>
      <th scope="col"># de ventas</th>
      <th scope="col"><?php echo $row['total'] ?></th>
      <th scope="col"><?php echo $row2['total2'] ?></th>
      <th scope="col"><?php echo $row3['total3'] ?></th>
      <th scope="col"><?php echo $row4['total4'] ?></th>
         <th scope="col"><?php echo $row5['total5'] ?></th>
      <th scope="col"><?php echo $row6['total6'] ?></th>
      
        <?php
        $niños=$row['total']*150;
        $niños2=$row2['total2']*80;
        $adul=$row3['total3']*0;
        $calc=$row4['total4']*15;
        $bebes=$row5['total5']*0;
        
        
        
        
        
        $todo=($niños+$niños2+$adul+$calc+$bebes+$row6['total6']);
        ?>
        
        
    </tr>
     <tr>
      <th scope="col">Ingreso</th>
      <th scope="col">$<?php echo $niños ?></th>
      <th scope="col">$<?php echo $niños2?></th>
      <th scope="col">$<?php echo $adul ?></th>
      <th scope="col">$<?php echo $calc?></th>
         <th scope="col">$<?php echo $bebes?></th>
      <th scope="col">$<?php echo $row6['total6'] ?></th>
      
        
    </tr>
  </thead>
  <tbody>


  </tbody>
</table>
</h7>
  </div>

      </h7>
 
 
 
 <h8>
<div>Fondo <br>
<?php echo $row11['fondo_actual'] ?>
    
    
    
</div>   
<div>Ingreso Total<br>
<?php echo $todo ?>
    
    
    
</div>  
     
     
     
     
     
 </h8>





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
