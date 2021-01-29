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

  <h1>Nueva Venta</h1>
  <br>


  <section class="content">
<div class="row">
  <div class="col-md-12">

<div class="box box-primary"><br>
    <form class="form-horizontal" method="post" autocomplete="off" id="addproduct" action="PHP/ticket.php?t=<?php echo $tick?>" role="form">
       <div class="form-group">
   

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Niños (150)</label>
    <div class="col-md-6">
      <input type="text" name="cant" autofocus  onkeyup="saltar(event,'input2');regresar(event,'input6')" class="form-control"  pattern= "[0-9]+" class="form-control" id="input1" placeholder="Cantidad">
 <input type="hidden" name="id_inv1" value= "1"/>
    </div>
  </div>


  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Niños 2(80)</label>
    <div class="col-md-6">
      <input type="text" name="cant2"  onkeyup="saltar(event,'input3');regresar(event,'input1')" class="form-control"  pattern= "[0-9]+" class="form-control" id="input2"  placeholder="Cantidad">
 <input type="hidden" name="id_inv2" value= "2"/>
    </div>
  </div>
 <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">BEBES</label>
    <div class="col-md-6">
      <input type="text" name="cant5" onkeyup="saltar(event,'input4');regresar(event,'input2')" class="form-control"  pattern= "[0-9]+" class="form-control" id="input3"  placeholder="Cantidad">
 <input type="hidden" name="id_inv5" value= "5"/>
    </div>
  </div>
   <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Adulto</label>
    <div class="col-md-6">
      <input type="text" name="cant3"  onkeyup="saltar(event,'input5');regresar(event,'input3')" class="form-control"  pattern= "[z0-9]+" class="form-control" id="input4"  placeholder="Cantidad">
 <input type="hidden" name="id_inv3" value= "3"/>
    </div>
  </div>
   <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Calcetines</label>
    <div class="col-md-6">
      <input type="text" name="cant4"  onkeyup="saltar(event,'input6');regresar(event,'input4')" class="form-control"  pattern= "[0-9]+" class="form-control" id="input5"  placeholder="Cantidad">
 <input type="hidden" name="id_inv4" value= "4"/>
    </div>
  </div>
<div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Dinero Fantastico</label>
    <div class="col-md-6">
      <input type="text" name="cant6"  onkeyup="saltar(event,'input7');regresar(event,'input5')" class="form-control" pattern= "[0-9]+" class="form-control" id="input6"  placeholder="Cantidad">
 <input type="hidden" name="id_inv6" value= "6"/>
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" > Descuento en entradas</label>
    <select name="descuento">
  <option value="1">0%</option>
  <option value="2">20%</option>
  <option value="3">50%</option>
    <option value="4">2x1</option>
</select>
    <div class="col-md-6">
      
    </div>
  </div>
  
  
 
  

  <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
      <button type="submit" id="submit" class="btn btn-primary">Agregar productos</button>
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




  
  
<?php include ('footer.php') ?>
<?php include ('scripts.php') ?>