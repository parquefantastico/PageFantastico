<?php
 //Agregamos la libreria FPDF
//Plantilla posterios de documentos
 require('FPDF/fpdf.php');
  
 class PDF extends FPDF 
 {
Function header ()
{

$this->image('FPDF/imagenes/fantastico.png',0,-3,25,25,'PNG');
$this->Cell(1,0,"",1,1);
$this->Settextcolor(118,3,3);
$this->Setfont('Arial','B',16);
$this->Cell(40);
$this->Cell(120,10,'SERVICIOS FANTASTICO S.A. DE C.V.',0,0,'C');
$this->Settextcolor(118,3,3);
$this->Setfont('Arial','B',12);
$this->Cell(40);
$this->Cell(-200,20,utf8_decode('Av. Ignacio de la Llave #1005, Colonia María de la Piedad.

CP 96410, Coatzacoalcos, Veracruz.'),0,0,'C');
$this->Settextcolor(118,3,3);
$this->Setfont('Arial','B',9);
$this->Cell(40);
$this->Cell(120,30,'TEL. 01 921 212 1149 / 01 921 143 1803

                Parquefantastico@gmail.com
',0,1,'C');

}







 }