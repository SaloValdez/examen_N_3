<?php
	include 'pdf_plantilla.php';
	require 'a_conexion2.php';

	$query="SELECT idTrabajador,nombre,apellido,dni,horasTrabajo,tarifa,sueldo,bono,sueldoNeto  FROM trabajador";
	$resultado = $mysqli->query($query);

	$pdf = new PDF('L');
	$pdf->AliasNbPages();
	$pdf->AddPage();

	$pdf->SetFillColor(232,232,232);
	$pdf->SetFont('Arial','B',9);
	$pdf->Cell(10,6,'ID',1,0,'C',1);
	$pdf->Cell(30,6,'NOMBRE',1,0,'C',1);
	$pdf->Cell(40,6,'APELLIDO',1,0,'C',1);
	$pdf->Cell(30,6,'DNI',1,0,'C',1);
  $pdf->Cell(30,6,'HORAS TRABAJO',1,0,'C',1);
  $pdf->Cell(20,6,'TARIFA',1,0,'C',1);
  $pdf->Cell(30,6,'SUELDO BRUTO',1,0,'C',1);
  $pdf->Cell(25,6,'BONO',1,0,'C',1);
  $pdf->Cell(25,6,'SUELDO NETO',1,1,'C',1);
	$pdf->SetFont('Arial','',8);
	while($row = $resultado->fetch_assoc())
	{
		$pdf->Cell(10,6,utf8_decode($row['idTrabajador']),1,0,'C');
		$pdf->Cell(30,6,$row['nombre'],1,0,'L');
		$pdf->Cell(40,6,$row['apellido'],1,0,'L');
		$pdf->Cell(30,6,$row['dni'],1,0,'C');
    $pdf->Cell(30,6,$row['horasTrabajo'],1,0,'C');
    $pdf->Cell(20,6,$row['tarifa'],1,0,'C');
    $pdf->Cell(30,6,$row['sueldo'],1,0,'C');
    $pdf->Cell(25,6,$row['bono'],1,0,'C');
		$pdf->Cell(25,6,utf8_decode($row['sueldoNeto']),1,1,'C');
	}
	$pdf->Output();
?>
