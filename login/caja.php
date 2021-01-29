<?php include ('validar.php') ?>
<?php include 'menuyheader.php' ?>
<?php include 'conexion.php'?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <section class="content-header">
    
  </section>

  <?php
  
 $consulta=ConsultarProducto($_GET['id']);
function ConsultarProducto( $id_pro )
{
    include 'conexion.php'; //se Consulta la informacion del inventario de forma disponible 
   $sentencia="SELECT pro.nombre_proy, det.lugar_entrega, CONCAT(per.nombre,' ', per.apellidos) as nombre from orden_entrega det left join proyectos pro on pro.id_proyecto=det.id_proyecto left join personas per on per.id_persona=det.id_persona WHERE det.id_orden='".$id_pro."' ";
    $resultado= $conexion->query($sentencia);
    $mostrar=$resultado->fetch_assoc();
    return [

        $mostrar['nombre_proy'],
         $mostrar['lugar_entrega'],
         $mostrar['nombre']
      
    ];
   
}



    $nombre=$consulta[1];
    ?>    

    <h1>Proyecto: <?php echo $consulta[0] ?>    </h1>  <h1>Cliente: <?php echo $consulta[2] ?>    </h1> 
    <h1>Lugar de Entrega:  <?php echo $consulta[1] ?>     </h1>  
<h1>Inventario</h1>
<div class="contenedor">
<h4>
  <div class="row">
    <div id="cuadro1" class="col-sm-12 col-md-12 col-lg-12">
      <div class="col-sm-offset-2 col-sm-8">
        <h3 class="text-center"> <small class="mensaje"></small></h3>
      </div>
      <div class="table-responsive col-sm-12">    
        <table id="dt_pyt" class="table table-bordered table-hover" cellspacing="0" width="100%">
          <thead>
            <tr>                
            <th>Codigo</th>
            <th>Estado </th>
            <th>Descripcion</th>
            <th>Lugar</th>
            <th>Giro comercial</th>
            <th>Cantidad</th>
              <th ><a href="agregarproducto.php" class="btn btn-primary">Nuevo Producto</a> </th>                    
            </tr>
          </thead>          
        </table>
           <section class="content container-fluid">
  <h1>Producto a enviar</h1>
  <table class="table table-striped" class="form-control">
  <thead> 
    <tr>
      <th scope="col">Codigo</th>
      <th scope="col">Descripcion </th>
      <th scope="col">Lugar</th>
      <th scope="col">Giro Comercial</th>
    </tr>
  </thead>
  <tbody>

<?php 


$A=$_GET['id'];//se recolecta la informacion del id y muestra los productos que vaya a tener la orden
$sql = "SELECT inv.id_producto, inv.codigo, inv.descrip, lug.nombre_lugar, inv.cantidad, inv.estado, g.nombre_giro FROM inventario inv inner join giros_comerciales g on g.id_giro = inv.id_giro INNER JOIN lugares lug ON
inv.id_lugar = lug.id_lugar inner join detalle_ruta tmp
on inv.id_producto=tmp.id_producto WHERE tmp.id_orden='".$A."'"; 
$result= mysqli_query($conexion,$sql);  

    while($mostrar=mysqli_fetch_array($result)){
    ?>
    <tr>
      <th scope="col"><?php echo $mostrar['descrip'] ?></th>
      <th scope="col"><?php echo $mostrar['cantidad'] ?></th>
      <th scope="col"><?php echo $mostrar['nombre_giro'] ?></th>

      <th scope="col"> <a href="Elimnar_productodet.php?id=<?php echo $mostrar['id_producto']?>"  class="btn btn-danger">Eliminar</a>
        </th>
    </tr>

      <?php

      }
?>
    






  </tbody>
</table>

<div class="box box-primary"><br>
    <form class="form-horizontal" method="post" id="addproduct" action="agregarproorden.php" role="form">
       <div class="form-group">
   

  
 

<div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
      <button type="submit" class="btn btn-primary">Ticket</button>
    </div>






          
          
   
      </h1>
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
  
  
      </div>      
    </div>    
  </div>
  



      </h1>
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

  <script>    
    $(document).on("ready", function(){
    listar();
    });

    var listar = function(){

      var table = $("#dt_pyt").DataTable({
          "ajax":{
             "method":"POST",
             "url":"PHP/listarinventariopro.php"

          },
          "columns":[
                  
                 
                  {"data":"descrip"},
                  {"data":"precio_unit"},
                
                  {"data":"cantidad"},
                  {render: function (data, type, row){return `<a class="btn btn-primary" href="Agregardetticket.php?od=${row.id_producto}&id=<?php echo $_GET['id'] ?>" role="button">Producto a enviar</a>`}}
                  

          ],
          "language": idioma_espanol
      });

     
    }

    var idioma_espanol = {
      "sProcessing":     "Procesando...",
    "sLengthMenu":     "Mostrar _MENU_ registros",
    "sZeroRecords":    "No se encontraron resultados",
    "sEmptyTable":     "Ningún dato disponible en esta tabla",
    "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
    "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
    "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
    "sInfoPostFix":    "",
    "sSearch":         "Buscar:",
    "sUrl":            "",
    "sInfoThousands":  ",",
    "sLoadingRecords": "Cargando...",
    "oPaginate": {
        "sFirst":    "Primero",
        "sLast":     "Último",
        "sNext":     "Siguiente",
        "sPrevious": "Anterior"
    },
    "oAria": {
        "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
        "sSortDescending": ": Activar para ordenar la columna de manera descendente"
    }
    }
    

  </script>
  
 
  
  
  
  
  
  
<?php include ('footer.php') ?>