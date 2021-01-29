<?php include ('validar.php') ?>
<?php include ('conexion.php') ?>
<?php include ('menuyheader.php') ?>

	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
	
<!-- Optional: include a polyfill for ES6 Promises for IE11 and Android browser -->
<script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
<script src="sweetalert2.min.js"></script>
<link rel="stylesheet" href="sweetalert2.min.css">


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <section class="content-header">

  </section>
<div class="contenedor">
 <center>
      <h1>
        Registros del Dia
      </h1>
  </center><br> 
 
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
              <th># Ticket</th>
            <th>Operacion</th>
            <th>Hora local</th>
            <th>Fondo en ese momemto</th>
              <th ><a href="PHP/Nuevaventa.php" class="btn btn-primary">Nueva venta</a> </th>                    
            </tr>
          </thead>          
        </table>
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
             "url":"PHP/Registros.php"

          },
          "columns":[
                  
                 {"data":"id_ticket"},
                  {"data":"oper_fond"},
                  {"data":"hora_local"},
                  {"data":"fondo_actual"},
                  {render: function (data, type, row){return `<a class="btn btn-primary" href="Detalleticket.php?id=${row.id_ticket}" role="button">Detalle de operacion</a> <a   class="btn btn-danger" onclick="comprobarcontra(${row.id_ticket});" >Hacer Devolucion</a>`}}
                  

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
  <script type="text/javascript">
var contr="<?php echo $_SESSION['contrasenasup']?>";
</script>
<script type="application/ecmascript">

      function comprobarcontra ($x){
            var x = $x;
          (async function getPassword ($x) {
const {value: password} = await Swal.fire({
  title: 'Ingrese Contraseña Maestra',
  input: 'password',
  inputPlaceholder: 'Ingrese contraseña',
  inputAttributes: {
    maxlength: 12,
    autocapitalize: 'off',
    autocorrect: 'off'
  }
})
if (password==contr) {
location.href='PHP/agregarofondo.php?id=3&t='+x;
}
})()
      }
  </script>
<?php include ('footer.php') ?>

