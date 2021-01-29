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
    <form class="form-horizontal" autocomplete="off"  method="post" id="addproduct" action="PHP/agregarcliente.php" role="form">
       <div class="form-group">
   

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Nombre/s</label>
    <div class="col-md-6">
      <input type="text" name="nombre"  autocomplete="off"  class="form-control" required id="no" placeholder="Nombre/s">
    </div>
  </div>
 
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Apellido Paterno</label>
    <div class="col-md-6">
      <input type="text" name="apellidop" class="form-control" required id="no" placeholder="Apellido Materno">
    </div>
  </div>
  
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Apellido Materno</label>
    <div class="col-md-6">
      <input type="text" name="apellidom" class="form-control" id="no" placeholder="Apellido Materno">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Direccion</label>
    <div class="col-md-6">
      <input type="text" name="direccion" class="form-control" id="no" placeholder="Calle Ejemplo 123">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Numero de telefono</label>
    <div class="col-md-6">
      <input type="tel" name="numero" required class="form-control" id="no" placeholder="1234567890">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Correo</label>
    <div class="col-md-6">
      <input type="email" name="correo" class="form-control" id="no" placeholder="ejemplo@hotmail.com">
    </div>
  </div>
  
 
 


 
  

  <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
      <button type="submit" class="btn btn-primary">Agregar Cliente </button>
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