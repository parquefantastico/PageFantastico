
<?php include ('MenuyHeaderP.php') ?>
<?php include ('../conexion.php')?>
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <section class="content-header">



        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
  
  <!-- Optional: include a polyfill for ES6 Promises for IE11 and Android browser -->
  <script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
  <script src="sweetalert2.min.js"></script>
  <link rel="stylesheet" href="sweetalert2.min.css">
  
  <?php 
  
  if(isset($_GET['f'])==true){
  
  ?>
  <script type="text/javascript">
    const Toast = Swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 3000
  });
  
  Toast.fire({
    type: 'success',
    title: '<h1> Contacto Modificado</h1>',
    width: 600,
    padding: '1em',
  })
  </script>
  
  
  
  <?php
  }
  ?>
    <?php
 $consulta=ConsultarProducto($_GET['id']);
function ConsultarProducto( $id_pro )
{
    include 'conexion.php'; 
    $sentencia="SELECT * FROM contacto_pacific WHERE 
id_Contacto_Pacific='".$id_pro."' ";
    $resultado= $conexion->query($sentencia);
    $mostrar=$resultado->fetch_assoc();
    return [

        $mostrar['nombre_pc'], //0
        $mostrar['apellido_pc'],//1
        $mostrar['tel_pc'],//2
        $mostrar['correo_e_pc'],//3
        $mostrar['campus_pc'],//4
        $mostrar['interes_pc'],//5
           $mostrar['revalidacion_pc'],//6
        $mostrar['fechade_nac_pc'],//7
        $mostrar['inscrito_pc'],//8
        $mostrar['otrauni'],//9
        $mostrar['cantacto'],//10
        $mostrar['nota'],//11
        $mostrar['revalidacion_pc']//12
          
    ];
   
}



    
    ?>   


<script>
function hideshow(){
var frm=document.form1;
if(frm.style.display=="block"){frm.style.display="none"}
else
if(frm.style.display=="none"){frm.style.display="block"}
}
</script>

  <h1>Nuevo Contacto</h1>
  <br>
 
  
      <button onclick="window.location.href='ListadeContactos.php'" class="btn btn-primary">Lista de Contactos</button>
     <button onclick="window.location.href='PHPexcel.php'" class="btn btn-primary">Descargar Excel</button>

  <section class="content">
<div class="row">
  <div class="col-md-12">

<div class="box box-primary"><br>
    <form class="form-horizontal" method="post" autocomplete="off" id="addproduct" action="PHPmodifcontactos.php" role="form">
       <div class="form-group">
   

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Nombre</label>
    <div class="col-md-6">
      <input type="text" required name="nombre" autocomplete="off" autofocus   class="form-control"  class="form-control" id="input1" placeholder="Nombre" value= "<?php echo $consulta[0] ?>">

    </div>
  </div>


  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Apellido</label>
    <div class="col-md-6">
      <input type="text" name="apellido" required autocomplete="off"  class="form-control"   class="form-control" id="input2"  placeholder="Apellido"  value= "<?php echo $consulta[1] ?>" >

    </div>
  </div>
 <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Telefono</label>
    <div class="col-md-4">
      <input type="number" required autocomplete="off" name="tel"  class="form-control"   class="form-control" id="input3"  placeholder="Telefono" value= "<?php echo $consulta[2] ?>">

    </div>
  </div>
   <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Correo Electronico</label>
    <div class="col-md-6">
      <input type="email" required name="correo" autocomplete="off"  class="form-control"   class="form-control" id="input4"  placeholder="Correo" value= "<?php echo $consulta[3] ?>">

    </div>
    
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Fecha de nacimiento</label>
    <div class="col-md-6">
      <input type="date" name="fecha_nac" autocomplete="off"  class="form-control"   class="form-control" id="input4"  placeholder="Correo" value ="<?php echo $consulta[7] ?>">

    </div>
    
  </div>



   <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Campus</label>
    <div class="col-md-6">
     
      <select name="Campus"  class="form-control"  pattern= "[0-9]+" class="form-control" id="input5"  placeholder="Cantidad">
  <option value="Coatzacoalcos" autofocus>Coatzacoalcos</option>
  
</select>
 
    </div>
  </div>
  <div class="form-group">
               <?php

include 'conexion.php' ;
$query=mysqli_query($conexion,"SELECT id_materias,nombre_materia FROM materias_pc");

?>
    <label for="inputEmail1" class="col-lg-2 control-label">Carreras</label>
    <div class="col-md-6">
    <select name="carrera" class="form-control" id="lugar"> 
        <?php
    while($datos = mysqli_fetch_array($query) )
    {
        
    if ($datos['id_materias']==$consulta[5]){
        
        
        ?>
        
         <option selected="selected" value="<?php echo $datos['id_materias'] ?>"> <?php echo $datos['nombre_materia'] ?> </option>
        
        
        
     <?php    
    }else{
    ?>
        <option value="<?php echo $datos['id_materias'] ?>"> <?php echo $datos['nombre_materia'] ?> </option>
        <?php
    }}
        ?>
        
        </select>
        
    </div>
  </div>
<div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">revalidacion</label>
    <div class="col-md-6">

      <select name="revalidacion"  class="form-control" pattern= "[0-9]+" class="form-control" id="input6"  >
          <option selected="selected" value="<?php echo $consulta[12] ?>"><?php echo $consulta[12] ?></option>
  <option value="NO">NO</option>
  <option value="SI">SI</option>
  >
</select>
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Inscrito</label>
    <div class="col-md-6">

      <select name="inscrito"  class="form-control" pattern= "[0-9]+" class="form-control" id="input6"  >
          
  <option value="NO">NO</option>
  <option value="SI">SI</option>
  >
</select>
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Aplico a otra U?</label>
    <div class="col-md-6">

      <select name="uni-unic"     class="form-control" pattern= "[0-9]+" class="form-control" id="input6"  >
           <option selected="selected" value="<?php echo $consulta[9] ?>"><?php echo $consulta[9] ?></option>
  <option value="NO">NO</option>
  <option value="SI">SI</option>
  >
</select>

    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Medio de contacto</label>
    <div class="col-md-6">

      <select name="m-contacto"  class="form-control"  class="form-control" id="input6"  >
           <option selected="selected" value="<?php echo $consulta[10] ?>"><?php echo $consulta[10] ?></option>
  <option value="Facebook">Facebook</option>
  <option value="Whatsapp">Whatsapp</option>
   <option value="Radio">Radio</option>
  <option value="Instagram">Instagram</option>
   <option value="Conocido">Conocido</option>
  <option value="Otro">Otro</option>
  >
</select>
    </div>
  </div>
   <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">NOTA</label>
    <div class="col-md-6">

      <input  type="text" name="nota"     class="form-control" class="form" value="<?php echo $consulta[11] ?>"> 
      <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
    </div>
  </div>
 
  

  <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
      <button type="submit" id="submit" class="btn btn-primary">Agregar Contacto</button>
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

<script>
// Funcion que se ejecuta cada vez que se pulsa una tecla en cualquier input
// Tiene que recibir el "event" (evento generado) y el siguiente id donde poner
// el foco. Si ese id es "submit" se envia el formulario
function saltar(e,id)
{
	// Obtenemos la tecla pulsada
	(e.keyCode)?k=e.keyCode:k=e.which;
 
	// Si la tecla pulsada es direc derecha (codigo ascii 13)
	if(k==39)
	{
		// Si la variable id contiene "submit" enviamos el formulario
		if(id=="submit")
		{
			document.forms[0].submit();
		}else{
			// nos posicionamos en el siguiente input
			document.getElementById(id).focus();
		}
	}
}
function regresar(e,id)
{
	// Obtenemos la tecla pulsada
	(e.keyCode)?k=e.keyCode:k=e.which;
 
	// Si la tecla pulsada es direc derecha (codigo ascii 13)
	if(k==37)
	{
		// Si la variable id contiene "submit" enviamos el formulario
		if(id=="submit")
		{
			document.forms[0].submit();
		}else{
			// nos posicionamos en el siguiente input
			document.getElementById(id).focus();
		}
	}
}




</script>




  
  
<?php include ('../footer.php') ?>
<?php include ('../scripts.php') ?>