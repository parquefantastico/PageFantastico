<?php
 //Agregamos la libreria FPDF
include 'Plantilla.php';//se llama a la plantilla que encabeza todos los docuementos
 $pdf = new PDF();
include 'conexion.php';
 $pdf->SetFont('Arial','B','4');


 $pdf->AddPage(); //Agregamos una Pagina
 $pdf->SetTextColor(255,255,255);
 $pdf->SetFillColor(118,3,3); 
 $pdf->SetFont('Arial','B','15');
 $pdf->Cell(5);
 $pdf->Cell(180,5,'Reporte de '.date("d-m-Y"),1,1,'C',1);
  $pdf->Cell(5);
 $pdf->Cell(25,10,utf8_decode("Ventas"),1,1,'C',1);
 $pdf->SetFont('Arial','B','9');
  $pdf->Cell(5);
  $pdf->Cell(25,10,utf8_decode("---"),1,0,'C',1);
  $pdf->SetTextColor(0,0,0);
$pdf->Cell(18,10,utf8_decode("NIÑOS + 2"),1,0,'C');
$pdf->Cell(18,10,utf8_decode("NIÑOS - 2"),1,0,'C');
$pdf->Cell(18,10,utf8_decode("ADULTOS"),1,0,'C');
$pdf->Cell(18,10,utf8_decode("BEBES"),1,0,'C'); 
$pdf->Cell(25,10,utf8_decode("CALCETINES"),1,0,'C');
$pdf->Cell(18,10,utf8_decode("D. F."),1,1,'C');


 $pdf->SetFont('Arial','B','9');
  $pdf->Cell(5);
   $pdf->SetTextColor(255,255,255);
  $pdf->Cell(25,10,utf8_decode("# de Ventas"),1,0,'C',1);
$sql="SELECT SUM(det.cant_tick) as total FROM det_ticket det inner JOIN fodndo_f f ON f.id_ticket=det.id_ticket inner join fan_ticket fan on fan.id_ticket=f.id_ticket  WHERE det.id_producto =1 AND f.fecha=date(NOW()) AND det.R=1 AND fan.id_descuento=1";
$result= mysqli_query($conexion,$sql);  
$row = $result->fetch_assoc();


$sql2="SELECT SUM(det.cant_tick) as total2 FROM det_ticket det inner JOIN fodndo_f f ON f.id_ticket=det.id_ticket inner join fan_ticket fan on fan.id_ticket=f.id_ticket WHERE det.id_producto =2 AND f.fecha=date(NOW()) AND det.R=1 AND fan.id_descuento=1";
$result2= mysqli_query($conexion,$sql2);  
$row2 = $result2->fetch_assoc();
$sql3="SELECT SUM(det.cant_tick) as total3 FROM det_ticket det inner JOIN fodndo_f f ON f.id_ticket=det.id_ticket WHERE det.id_producto =3 AND f.fecha=date(NOW()) AND det.R=1";
$result3= mysqli_query($conexion,$sql3);  
$row3 = $result3->fetch_assoc();
$sql4="SELECT SUM(det.cant_tick) as total4 FROM det_ticket det inner JOIN fodndo_f f ON f.id_ticket=det.id_ticket WHERE det.id_producto =4 AND f.fecha=date(NOW()) AND det.R=1";
$result4= mysqli_query($conexion,$sql4);  
$row4 = $result4->fetch_assoc();
$sql5="SELECT SUM(det.cant_tick) as total5 FROM det_ticket det inner JOIN fodndo_f f ON f.id_ticket=det.id_ticket WHERE det.id_producto =5 AND f.fecha=date(NOW()) AND det.R=1";
$result5= mysqli_query($conexion,$sql5);  
$row5 = $result5->fetch_assoc();
$sql6="SELECT SUM(det.cant_tick) as total6 FROM det_ticket det inner JOIN fodndo_f f ON f.id_ticket=det.id_ticket WHERE det.id_producto =6 AND f.fecha=date(NOW()) AND det.R=1";
$result6= mysqli_query($conexion,$sql6);  
$row6 = $result6->fetch_assoc();
$sql7="SELECT SUM(det.cant_tick) as total7 FROM det_ticket det inner JOIN fodndo_f f ON f.id_ticket=det.id_ticket WHERE det.id_producto = 8 AND f.fecha=date(NOW()) AND det.R=1";
$result7= mysqli_query($conexion,$sql7);  
$row7 = $result7->fetch_assoc();
$sql8="SELECT SUM(det.cant_tick) as total8 FROM det_ticket det inner JOIN fodndo_f f ON f.id_ticket=det.id_ticket WHERE det.id_producto = 9 AND f.fecha=date(NOW()) AND det.R=1";
$result8= mysqli_query($conexion,$sql8);  
$row8 = $result8->fetch_assoc();



$sql11="SELECT fondo_actual FROM fodndo_f WHERE oper_fond='Cargo' AND fecha= date(NOW())";
$result11= mysqli_query($conexion,$sql11);  
$row11 = $result11->fetch_assoc();
$pdf->SetTextColor(0,0,0);
$pdf->Cell(18,10,$row['total'],1,0,'C');
$pdf->Cell(18,10,$row2['total2'],1,0,'C');
$pdf->Cell(18,10,$row3['total3'],1,0,'C');
$pdf->Cell(18,10,$row5['total5'],1,0,'C');
$pdf->Cell(25,10,$row4['total4'],1,0,'C');
$pdf->Cell(18,10,$row6['total6'],1,1,'C');


  $niños=$row['total']*150;
        $niños2=$row2['total2']*80;
        $adul=$row3['total3']*0;
        $calc=$row4['total4']*15;
        $bebes=$row5['total5']*0;
       
 
        
        
        
        $todo=($niños+$niños2+$adul+$calc+$bebes+$niños2Desc+$BebesDesc+$row6['total6']);
 $pdf->SetTextColor(255,255,255);
 $pdf->Cell(5);
  $pdf->Cell(25,10,utf8_decode("Ingreso"),1,0,'C',1);
  $pdf->SetTextColor(0,0,0);
$pdf->Cell(18,10,"$".$niños,1,0,'C');
$pdf->Cell(18,10,"$".$niños2,1,0,'C');
$pdf->Cell(18,10,"$".$adul,1,0,'C');
$pdf->Cell(18,10,"$".$bebes,1,0,'C');
$pdf->Cell(25,10,"$".$calc,1,0,'C');
$pdf->Cell(18,10,"$".$row6['total6'],1,1,'C');


 
  $pdf->SetTextColor(255,255,255);
 $pdf->SetFillColor(118,3,3); 
 $pdf->SetFont('Arial','B','15');
 $pdf->Cell(5);
 $pdf->Cell(35,10,utf8_decode("Descuentos"),1,1,'C',1);
 $pdf->SetFont('Arial','B','9');//----------------------------------------------------------------------
  $pdf->Cell(5);
    $pdf->Cell(25,10,utf8_decode("---"),1,0,'C',1);
  $pdf->SetTextColor(0,0,0);

  $pdf->Cell(18,10,utf8_decode("niños 150"),1,0,'C');
$pdf->Cell(18,10,utf8_decode("Niños 150"),1,0,'C');
$pdf->Cell(18,10,utf8_decode("Niños 150"),1,0,'C');
$pdf->Cell(18,10,utf8_decode("Niños 80"),1,0,'C');
$pdf->Cell(18,10,utf8_decode("Niños 80"),1,0,'C'); 
 $pdf->Cell(18,10,utf8_decode("Niños 80"),1,1,'C'); 
 
   $pdf->Cell(5);
 $pdf->SetTextColor(255,255,255);
 $pdf->SetFillColor(118,3,3); 
 $pdf->Cell(25,10,utf8_decode("# de Entr."),1,0,'C',1);
  $pdf->SetTextColor(0,0,0);
  
  
  
  
 
 //consulta de niños de 80 20%  
$sqld2="SELECT SUM(det.cant_tick) as total2 FROM det_ticket det inner JOIN fodndo_f f ON f.id_ticket=det.id_ticket inner join fan_ticket fan on fan.id_ticket=f.id_ticket WHERE det.id_producto =2 AND f.fecha=date(NOW()) AND det.R=1 AND fan.id_descuento=2";
$resultd2= mysqli_query($conexion,$sqld2);  
$rowd2 = $resultd2->fetch_assoc();
//consulta de niños de 80 50%  
$sqld3="SELECT SUM(det.cant_tick) as total2 FROM det_ticket det inner JOIN fodndo_f f ON f.id_ticket=det.id_ticket inner join fan_ticket fan on fan.id_ticket=f.id_ticket WHERE det.id_producto =2 AND f.fecha=date(NOW()) AND det.R=1 AND fan.id_descuento=3";
$resultd3= mysqli_query($conexion,$sqld3);  
$rowd3 = $resultd3->fetch_assoc();
//consulta de niños de 80 2x1 
$sqld32x1b="SELECT SUM(det.cant_tick) as total2 FROM det_ticket det inner JOIN fodndo_f f ON f.id_ticket=det.id_ticket inner join fan_ticket fan on fan.id_ticket=f.id_ticket WHERE det.id_producto =2 AND f.fecha=date(NOW()) AND det.R=1 AND fan.id_descuento=4";
$resultd32x1b= mysqli_query($conexion,$sqld32x1b);  
$rowd32x1b = $resultd32x1b->fetch_assoc();


//consulta de niños de 150 20%  
$sqld02="SELECT SUM(det.cant_tick) as total2 FROM det_ticket det inner JOIN fodndo_f f ON f.id_ticket=det.id_ticket inner join fan_ticket fan on fan.id_ticket=f.id_ticket WHERE det.id_producto =1 AND f.fecha=date(NOW()) AND det.R=1 AND fan.id_descuento=2";
$resultd02= mysqli_query($conexion,$sqld02);  
$rowd02 = $resultd02->fetch_assoc();
//consulta de niños de 150 50%  
$sqld03="SELECT SUM(det.cant_tick) as total2 FROM det_ticket det inner JOIN fodndo_f f ON f.id_ticket=det.id_ticket inner join fan_ticket fan on fan.id_ticket=f.id_ticket WHERE det.id_producto =1 AND f.fecha=date(NOW()) AND det.R=1 AND fan.id_descuento=3";
$resultd03= mysqli_query($conexion,$sqld03);  
$rowd03 = $resultd03->fetch_assoc();
//consulta de niños de 150 2x1 
$sqld032x1="SELECT SUM(det.cant_tick) as total2 FROM det_ticket det inner JOIN fodndo_f f ON f.id_ticket=det.id_ticket inner join fan_ticket fan on fan.id_ticket=f.id_ticket WHERE det.id_producto =1 AND f.fecha=date(NOW()) AND det.R=1 AND fan.id_descuento=4";




$resultd2x1= mysqli_query($conexion,$sqld032x1);  
$rowd032x1 = $resultd2x1->fetch_assoc();






  $pdf->Cell(18,10,utf8_decode($rowd03['total2']),1,0,'C');
$pdf->Cell(18,10,utf8_decode($rowd02['total2']),1,0,'C');
$pdf->Cell(18,10,utf8_decode($rowd032x1['total2']),1,0,'C');
$pdf->Cell(18,10,utf8_decode($rowd3['total2']),1,0,'C');
$pdf->Cell(18,10,utf8_decode($rowd2['total2']),1,0,'C'); 
$pdf->Cell(18,10,utf8_decode($rowd32x1b['total2']),1,1,'C');
 

 
 
 
  $pdf->Cell(5);
 $pdf->SetTextColor(255,255,255);
 $pdf->SetFillColor(118,3,3); 
 $pdf->Cell(25,10,utf8_decode("Descuento"),1,0,'C',1);
  $pdf->SetTextColor(0,0,0);

  $pdf->Cell(18,10,utf8_decode("50%"),1,0,'C');
$pdf->Cell(18,10,utf8_decode("20%"),1,0,'C');
$pdf->Cell(18,10,utf8_decode("2x1"),1,0,'C');
$pdf->Cell(18,10,utf8_decode("50%"),1,0,'C');
$pdf->Cell(18,10,utf8_decode("20%"),1,0,'C'); 
$pdf->Cell(18,10,utf8_decode("2x1"),1,1,'C');
$pdf->Cell(5);






 $pdf->SetTextColor(255,255,255);
 $pdf->SetFillColor(118,3,3); 
 
 

 $pdf->Cell(25,10,utf8_decode("Ingreso"),1,0,'C',1);
  $pdf->SetTextColor(0,0,0);


 $niñosa150=$rowd03['total2']*75;
  $niñosb150=$rowd02['total2']*120;
       $niñosc150=$rowd032x1['total2']*75;
   $niñosa80=$rowd3['total2']*40;
 $niñosb80=$rowd2['total2']*60;
 $niñosc80=$rowd32x1b['total2']*40;
 
  $pdf->Cell(18,10,utf8_decode("$".$niñosa150),1,0,'C');
$pdf->Cell(18,10,utf8_decode("$".$niñosb150),1,0,'C');
$pdf->Cell(18,10,utf8_decode("$".$niñosc150),1,0,'C');
$pdf->Cell(18,10,utf8_decode("$".$niñosa80),1,0,'C');
$pdf->Cell(18,10,utf8_decode("$".$niñosb80),1,0,'C'); 
 $pdf->Cell(18,10,utf8_decode("$".$niñosc80),1,1,'C');
 $totaldesc=$niñosa150+$niñosb150+$niñosc150+$niñosa80+$niñosb80+$niñosc80;
 $pdf->SetTextColor(255,255,255);
 $pdf->SetFillColor(118,3,3); 
 $pdf->SetFont('Arial','B','15');
   $pdf->Cell(5);
 $pdf->Cell(35,10,utf8_decode("Reembolsos"),1,1,'C',1);
 $pdf->SetFont('Arial','B','9');
  $pdf->Cell(5);
  $pdf->Cell(25,10,utf8_decode("---"),1,0,'C',1);
  $pdf->SetTextColor(0,0,0);
$pdf->Cell(18,10,utf8_decode("NIÑOS + 2"),1,0,'C');
$pdf->Cell(18,10,utf8_decode("NIÑOS - 2"),1,0,'C');
$pdf->Cell(18,10,utf8_decode("ADULTOS"),1,0,'C');
$pdf->Cell(18,10,utf8_decode("BEBES"),1,0,'C'); 
$pdf->Cell(25,10,utf8_decode("CALCETINES"),1,0,'C');
$pdf->Cell(18,10,utf8_decode("D. F."),1,1,'C');
 $pdf->SetFont('Arial','B','9');
  $pdf->Cell(5);
   $pdf->SetTextColor(255,255,255);
   $sql0="SELECT SUM(det.cant_tick) as total FROM det_ticket det inner JOIN fodndo_f f ON f.id_ticket=det.id_ticket inner join fan_ticket fan on fan.id_ticket=f.id_ticket WHERE det.id_producto =1 AND f.fecha=date(NOW()) AND det.R=0  AND f.oper_fond='Reembolso' and fan.id_descuento=1 ";
$result0= mysqli_query($conexion,$sql0);  
$row0 = $result0->fetch_assoc();
$sql01="SELECT SUM(det.cant_tick) as total FROM det_ticket det inner JOIN fodndo_f f ON f.id_ticket=det.id_ticket inner join fan_ticket fan on fan.id_ticket=f.id_ticket WHERE det.id_producto =1 AND f.fecha=date(NOW()) AND det.R=0  AND f.oper_fond='Reembolso' and fan.id_descuento=4 ";
$result01= mysqli_query($conexion,$sql01);  
$row01 = $result01->fetch_assoc();


$sql02="SELECT SUM(det.cant_tick) as total2 FROM det_ticket det inner JOIN fodndo_f f ON f.id_ticket=det.id_ticket inner join fan_ticket fan on fan.id_ticket=f.id_ticket WHERE det.id_producto =2 AND f.fecha=date(NOW()) AND det.R=0 AND f.oper_fond='Reembolso'  and fan.id_descuento=1";
$result02= mysqli_query($conexion,$sql02);  
$row02 = $result02->fetch_assoc();

$sql02a="SELECT SUM(det.cant_tick) as total2 FROM det_ticket det inner JOIN fodndo_f f ON f.id_ticket=det.id_ticket inner join fan_ticket fan on fan.id_ticket=f.id_ticket WHERE det.id_producto =2 AND f.fecha=date(NOW()) AND det.R=0 AND f.oper_fond='Reembolso' and fan.id_descuento=4";
$result02a= mysqli_query($conexion,$sql02a);  
$row02a = $result02a->fetch_assoc();
$sql03="SELECT SUM(det.cant_tick) as total3 FROM det_ticket det inner JOIN fodndo_f f ON f.id_ticket=det.id_ticket WHERE det.id_producto =3 AND f.fecha=date(NOW()) AND det.R=0 AND f.oper_fond='Reembolso'";
$result03= mysqli_query($conexion,$sql03);  
$row03 = $result03->fetch_assoc();
$sql04="SELECT SUM(det.cant_tick) as total4 FROM det_ticket det inner JOIN fodndo_f f ON f.id_ticket=det.id_ticket WHERE det.id_producto =4 AND f.fecha=date(NOW()) AND det.R=0  AND f.oper_fond='Reembolso'";
$result04= mysqli_query($conexion,$sql04);  
$row04 = $result04->fetch_assoc();
$sql05="SELECT SUM(det.cant_tick) as total5 FROM det_ticket det inner JOIN fodndo_f f ON f.id_ticket=det.id_ticket WHERE det.id_producto =5 AND f.fecha=date(NOW()) AND det.R=0  AND f.oper_fond='Reembolso'";
$result05= mysqli_query($conexion,$sql05);  
$row05 = $result05->fetch_assoc();
$sql06="SELECT SUM(det.cant_tick) as total6 FROM det_ticket det inner JOIN fodndo_f f ON f.id_ticket=det.id_ticket WHERE det.id_producto =6 AND f.fecha=date(NOW()) AND det.R=0  AND f.oper_fond='Reembolso'";
$result06= mysqli_query($conexion,$sql06);  
$row06 = $result06->fetch_assoc();


   $pdf->SetTextColor(255,255,255);
    $pdf->Cell(25,10,utf8_decode("# de Reem."),1,0,'C',1);
    $pdf->SetTextColor(0,0,0);
    
    //suma de cantidades de niños 
    $tniños150=$row0['total']+$row01['total'];
    $tniños80=$row02['total2']+$row02a['total2'];
    
    //suma de reembolsos 
    $treembolsos150=($row0['total']*150)+($row01['total']*75);
    $treembolsos80=($row02['total2']*80)+($row02a['total2']*40);
    
    
    
    
    
$pdf->Cell(18,10,$tniños150,1,0,'C');
$pdf->Cell(18,10,$tniños80,1,0,'C');
$pdf->Cell(18,10,$row03['total3'],1,0,'C');
$pdf->Cell(18,10,$row05['total5'],1,0,'C');
$pdf->Cell(25,10,$row04['total4'],1,0,'C');
$pdf->Cell(18,10,$row06['total6'],1,1,'C');

  $niños0=$treembolsos150;
        $niños20=$treembolsos80;
        $adul0=$row03['total3']*0;
        $calc0=$row04['total4']*15;
        $bebes0=$row05['total5']*0;
        
        
        
        
        
        $todo0=($niños0+$niños20+$adul0+$calc0+$bebes0+$row06['total6']);
 $pdf->SetTextColor(255,255,255);
 $pdf->Cell(5);
  $pdf->Cell(25,10,utf8_decode("Ingreso"),1,0,'C',1);
  $pdf->SetTextColor(0,0,0);
$pdf->Cell(18,10,"$".$niños0,1,0,'C');
$pdf->Cell(18,10,"$".$niños20,1,0,'C');
$pdf->Cell(18,10,"$".$adul0,1,0,'C');
$pdf->Cell(18,10,"$".$bebes0,1,0,'C');
$pdf->Cell(25,10,"$".$calc0,1,0,'C');
$pdf->Cell(18,10,"$".$row06['total6'],1,1,'C');
    $pdf->Cell(5);
 $pdf->SetTextColor(255,255,255);
 $pdf->SetFillColor(118,3,3); 
 $pdf->SetFont('Arial','B','15');
 $pdf->Cell(25,10,utf8_decode("Retiros"),1,0,'C',1);
    $pdf->SetTextColor(0,0,0);
$pdf->Cell(35,10,utf8_decode("Cantidad"),1,0,'C');
$pdf->Cell(35,10,utf8_decode("Hora "),1,1,'C');
$sql = "SELECT t.total, f.oper_fond, f.hora_local from fan_ticket t INNER JOIN fodndo_f f ON f.id_ticket=t.id_ticket WHERE f.oper_fond='Retiro' AND f.fecha=date(NOW())"; 
$resultarr= mysqli_query($conexion,$sql); 

 while($mostrar=mysqli_fetch_array($resultarr)){
   $pdf->SetFont('Arial','B','9');   
 $pdf->Cell(5);
   $pdf->Cell(35);
   $pdf->Cell(35,5,"$".$mostrar['total'],1,0,'C');
$pdf->Cell(35,5,$mostrar['hora_local'],1,1,'C');
 }

  
 
 
 
 
 $pdf->SetTextColor(255,255,255);
 $pdf->SetFillColor(118,3,3); 
 $pdf->SetFont('Arial','B','10');
 $pdf->Cell(5);
 $pdf->Cell(40,8,utf8_decode("FONDO"),1,0,'C',1);
$pdf->Cell(40,8,utf8_decode("REEM. TOTALES"),1,0,'C',1);
$pdf->Cell(40,8,utf8_decode("RETIROS TOTALES"),1,0,'C',1);
$pdf->Cell(40,8,utf8_decode("INGRESO TOTAL"),1,1,'C',1); 
$pdf->SetTextColor(0,0,0);
$pdf->Cell(5);
$sqlk = "SELECT t.total, f.oper_fond, f.hora_local, SUM(t.total) totalret from fan_ticket t INNER JOIN fodndo_f f ON f.id_ticket=t.id_ticket WHERE f.oper_fond='Retiro' AND f.fecha=date(NOW())"; 
$resultarrk= mysqli_query($conexion,$sqlk); 
$rowk = $resultarrk->fetch_assoc();
 $pdf->Cell(40,8,"$".$row11['fondo_actual'],1,0,'C');
$pdf->Cell(40,8,"$".$todo0,1,0,'C');
$pdf->Cell(40,8,"$".$rowk['totalret'],1,0,'C');
$newtodo=$todo-$rowk['totalret'];
$newtodo=$newtodo+$totaldesc;
//INGRESO TOTAL CALCULADO AQUI
$pdf->Cell(40,8,"$".$newtodo,1,1,'C'); 
$pdf->Cell(5);
 $pdf->SetTextColor(255,255,255);

$pdf->Cell(60,8,utf8_decode("INGRESO POR TARJETA"),1,1,'C',1); 
$sqlTar="SELECT sum(f.total) as tarjeta from fan_ticket f INNER JOIN fodndo_f d on f.id_ticket=d.id_ticket WHERE d.fecha=date(NOW()) AND f.tip_pago='Tarjeta' AND f.rt=1";
$resulttar= mysqli_query($conexion,$sqlTar);  
$rowtar = $resulttar->fetch_assoc();
$sqlEfec="SELECT sum(f.total) as efectivo from fan_ticket f INNER JOIN fodndo_f d on f.id_ticket=d.id_ticket WHERE d.fecha=date(NOW()) AND f.tip_pago='Efectivo' AND f.rt=1";
$resultEfec= mysqli_query($conexion,$sqlEfec);  
$rowEfec = $resultEfec->fetch_assoc();
$pdf->SetTextColor(0,0,0);
$pdf->Cell(5);

$pdf->Cell(60,8,"$".$rowtar['tarjeta'],1,0,'C');

//Agregamos texto en una celda de 40px ancho y 10px de alto, Con Borde, Sin salto de linea y Alineada a la derecha


$pdf->Output();//imprime y renombraeldocuemnto
?>