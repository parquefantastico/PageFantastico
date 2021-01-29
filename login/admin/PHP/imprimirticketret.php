<?php include ('../conexion.php') ?>
<html>
 
<head>
  <link rel="stylesheet" href="styletick.css">
  <script src="scripttick.js"></script>
 
</head>
 <?php $ticket=$_GET['t']; ?>
  <?php  
$sql="SELECT f.total, f.pag_t, f.camb_t, f.id_ticket from fan_ticket f  WHERE f.id_ticket='".$ticket."'";
$result= mysqli_query($conexion,$sql);  
$row = $result->fetch_assoc();

 ?>
<body>
  <div class="ticket">
    <p class="centrado">Fantastico 
      <br>
      <br> <?php echo "Fecha: ".date("d-m-y")." Hora:".date("H-i")  ?>
      <br> Yo CLIENTE GENERAL hago constancia
       de devolucíon de DINERO FANTASTICO
       por la cantidad de:
       <br>
          <td>TOTAL</td>
          <td><?php echo "$".$row['total'] ?></td>
      </p>

        
        
      
    
       
        
         <tr>
             </tr> 
             <td></td>
       <tr>
           <td></td>
             </tr> 
             <tr>
           <td></td>
             </tr> 
         <td>______________________</td>
        
      </tbody>
       
    </table>
   
    <p class="centrado">¡GRACIAS POR SU VISITA :D!
      <br>Creado por WolfGangE
      <br> #<?php echo $row['id_ticket'] ?></p>
      
  </div>
</body>

<button class="oculto-impresion" autofocus Onclick="location.href='../index.php?f=1'">Inicio</button>

</html>