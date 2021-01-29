<?php include ('validar.php') ?>
<?php include ('menuyheader.php') ?>
<?php include ('conexion.php')?>
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <section class="content-header">

<?php $tick=$_GET['id'];
?>

<script>
function hideshow(){
var frm=document.form1;
if(frm.style.display=="block"){frm.style.display="none"}
else
if(frm.style.display=="none"){frm.style.display="block"}
}
</script>

  <h1>Fecha del reporte deseado</h1>
  <br>


  <section class="content">
<div class="row">
  <div class="col-md-12">

<div class="box box-primary"><br>
    <form class="form-horizontal" method="post" id="addproduct" autocomplete="off" action="Generarreproteglob.php" role="form">
       <div class="form-group">
   

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Fecha</label>
    <div class="col-md-6">
      <input type="date" name="fech" class="form-control" required pattern= "[0-9]+" class="form-control" id="no" value="0" placeholder="Cantidad">
 <input type="hidden" name="ret" value= "7"/>
    </div>
  </div>



 
  

  <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
      <button type="submit" class="btn btn-primary">Generar reporte </button>
    </div>
  </div>

  </div>






  </tbody>
</table>
</h4>
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








  
  
<?php include ('footer.php') ?>
<?php include ('scripts.php') ?>