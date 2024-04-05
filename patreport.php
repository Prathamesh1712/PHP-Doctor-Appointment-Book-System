<?php
$rid=$_POST['rid'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$age=$_POST['age'];
$date=$_POST['date'];
$day=$_POST['day'];
$prec=$_POST['prec'];
$prec1=$_POST['prec1'];
$prec2=$_POST['prec2'];
$gender=$_POST['gender'];
require ("fpdf/fpdf.php");
$con=new mysqli("localhost","root","","new");
$pdf=new FPDF('L','mm','A4');
$pdf ->AddPage();
 $pdf->Image('doc.png',10,6,30);
$pdf ->SetFont( 'Times' , 'B', 18);
$pdf->SetFont('Times','B',36);
 $pdf->SetTextColor(30,144,255);
$pdf->Cell(276,5,'24/7 HOSPITAL',0,0,'C');

$pdf->Ln(7);

$pdf->SetFont('Times','B',16);
$pdf->Cell(276,10,'Address: S.No.124, Paud Road, Kothrud, Pune, 411038.',0,0,'C');
$pdf->Ln(7);

$pdf->Ln(20);
 $pdf->SetTextColor(0,0,0);
$pdf->SetFont('Times','B',14);
$pdf->Cell(25,5,'Hospital Registration Number: 3417',0,0);
$pdf->Cell(420,5, "Day:Date: {$day}:{$date} ",0,0,'C');
$pdf->Ln(12);
$pdf->Cell(24,5,"Patient Name: {$fname} {$lname}",0,0);
$pdf->Cell(395,5, "Patient ID: {$rid} ",0,0,'C');
$pdf->Ln(12);
$pdf->Cell(24,5,"Patient Age: {$age} ",0,0);
$pdf->Cell(390,5, "Gender: {$gender} ",0,0,'C');
$pdf->Ln(18);
$pdf->SetFont('Times','B',18);
$pdf->Cell(40,5,"Prescription :",0,0,"C");
$pdf->Ln(6);
$pdf->SetFont('Times','B',14);
$pdf->Cell(177,5,"{$prec} ",0,0 ,"C");
$pdf->Ln(6);
$pdf->Cell(179,5,"{$prec1} ",0,0 ,"C");
$pdf->Ln(6);
$pdf->Cell(177,5,"{$prec2} ",0,0 ,"C");
$pdf->Ln(65);
$pdf->Cell(480,5, "Signature ",0,0,'C');
$pdf->Ln(8);
$pdf->SetFont('Times','B',12);
$pdf->SetTextColor(0,0,0);
$pdf->Cell(276,10,'Email :prathmshirke1712@gmail.com | Contact No: 9673145747',0,0,'C');
$pdf->output();



?>