

<?php include ('conexion.php') ?>
<?php include ('MenuyHeaderP.php') ?>

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
        Lista de contactos
      </h1>
  </center><br> 
 <a href="index.php" class="btn btn-primary">Formulario</a>
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
              <th>Nombre/s</th>
            <th>Apellido</th>
            <th>Telefono</th>
            <th>Correo</th>
            <th>Campus</th>
            <th>Carrera</th>
            <th>Revalidacion</th>
            <th>Fecha de Nacimiento</th>
            <th>Fecha de Registro</th>
            <th>Inscrito</th>
             <th>Consulto Otra U.</th>
              <th>Medio de Contacto</th>
               <th>Nota</th>
            <th></th>
              <th ><a href="index.php" class="btn btn-primary">Formulario</a> </th>                    
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
             "url":"consultarcontactos.php"

          },
          "columns":[
                  
                 {"data":"NOMBRE"},
                  {"data":"APELLIDO"},
                  {"data":"TELEFONO"},
                  {"data":"CORREO"},
                  {"data":"CAMPUS"},
                  {"data":"INTERES"},
                  {"data":"REVAL"},
                  {"data":"FECHANAC"},
                  {"data":"FECHAREG"},
                  {"data":"REGISTRO"},
                   {"data":"OTRAUNI"},
                  {"data":"CONTACTO"},
                  {"data":"NOTA"},
                  {render: function (data, type, row){return `<a class="btn btn-primary" href="modif_contactos.php?id=${row.ID}" role="button">Editar Contacto</a>`}}
                  

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
<?php include ('../footer.php') ?>

