<?php include ('validar.php') ?>
<?php include ('menuyheader.php') ?>
<?php include ('conexion.php') ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <section class="content-header">
 
    

  </section>

    <section class="content">
<div class="row">
  <div class="col-md-12">

  <h1>Nuevo cargo de caja</h1>
  <br>
<div class="box box-primary"><br>
    <form class="form-horizontal" method="post" id="addproduct" action="PHP/agregarofondo.php?id=1" role="form">
       <div class="form-group">
   

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Cantidad de Fondo</label>
    <div class="col-md-6">
      <input type="text" name="cantidad" class="form-control" id="no" placeholder="Fondo de caja">
    </div>
  </div>
 
 
 


 
  

  <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
      <button type="submit" class="btn btn-primary">Agregar Fondo de: <?php echo date("d-m") ?> </button>
    </div>
  </div>

  </div>


      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Here</li>
      </ol>
   
    <!-- Main content -->
    <section class="content container-fluid">

      <!--------------------------
        | Your Page Content Here |
        -------------------------->

    </section>
    <!-- /.content -->

  <!-- /.content-wrapper -->

 <?php include ('scripts.php') ?>
 <?php include ('footer.php') ?>