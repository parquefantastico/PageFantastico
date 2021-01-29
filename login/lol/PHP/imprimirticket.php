<?php include ('../conexion.php') ?>
<html>
 
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <link rel="stylesheet" href="styletick.css">
  <script src="scripttick.js"></script>
 
</head>
 
<body>
  <div class="ticket">
    <p class="centrado">Fantastico 
      <br>
      <br> <?php echo "Fecha: ".date("d-m-y")." Hora:".date("H-i")  ?></p>
    <table>
      <thead>
          <tr>
          <th class="cantidad">CANT.</th>
          <th class="producto">DESCR.</th>
          <th class="precio">IMPORT.</th>
        </tr>
      </thead>
      <tbody>
        
         <?php $ticket=$_GET['t'];

$sql = "SELECT inv.descrip, inv.precio_unit,det.cant_tick, (det.cant_tick*inv.precio_unit) as total FROM inventario inv INNER JOIN det_ticket det ON
det.id_producto=inv.id_inv WHERE det.id_ticket='".$ticket."'"; 
$result= mysqli_query($conexion,$sql);  
$prectotal=0;
while($mostrar=mysqli_fetch_array($result)){
    ?>
        <tr>
          <td class="cantidad"><?php echo $mostrar['cant_tick'] ?> </td>
          <td class="producto"><?php echo $mostrar['descrip'] ?></td>
       
          <td class="precio"><?php echo '$'.$mostrar['total'] ?></td>
        </tr>
      <?php } ?>
      
     <?php  
$sql="SELECT f.total, f.pag_t, f.camb_t, f.id_ticket from fan_ticket f  WHERE f.id_ticket='".$ticket."'";
$result= mysqli_query($conexion,$sql);  
$row = $result->fetch_assoc();
$sql2 = "select des.id_descueto, des.descuento from descuento des inner join fan_ticket fan on fan.id_descuento=des.id_descueto where fan.id_ticket='".$ticket."'";
  $result2= mysqli_query($conexion,$sql2);
  $mostrar2=mysqli_fetch_array($result2);
  
  
  
 ?>
      <tr>
          
          <td></td>
          <?
          if($mostrar2['id_descueto']!=1){
            
           
          
          ?>
            <td>DESC. ENTR. </td>
          <td><?php echo $mostrar2['descuento']?> </td>
          </tr>
          <?
          }
          ?>
          <tr>
           <td></td>
          <td>TOTAL</td>
          <td><?php echo "$".$row['total'] ?></td>
        </tr>
         <tr>
             <td></td>
      <td>PAGO</td>
          <td><?php echo "$".$row['pag_t'] ?></td>
          </tr>
          <tr>
             <td></td>
      <td>CAMBIO</td>
          <td><?php echo "$".$row['camb_t'] ?></td>
          </tr>
        
      </tbody>
       
    </table>
   
    <p class="centrado">¡GRACIAS POR SU VISITA!
    <br>El bienestar del menor dentro de las instalaciones así como los bienes y propiedades de los clientes son responsabilidad única y exclusiva de los adultos que ingresen con el menor, la empresa no se hace responsable de cualquier incidente que puedan sufrir los menores por no estar supervisados por el adulto acompañante.
      <br>Creado por WolfGangE
      <br> #<?php echo $row['id_ticket'] ?></p>
      
  </div>
</body>

<button class="oculto-impresion" autofocus Onclick="location.href='../index.php?f=1'">Inicio</button>

</html>
