<?php
	include 'pdf_plantilla.php';
	require 'a_conexion2.php';


	// $id=$_GET['id'];
	//
	// $query="SELECT idPlanilla,nombre,apellido,cargo,horasTra,pagoHoras,faltas,pensiones,cargaFamiliar,sueldoNeto  FROM planilla  WHERE idPlanilla='$id'";
	// $resultado = $mysqli->query($query);
	//
	// $pdf = new PDF('L');
	// $pdf->AliasNbPages();
	// $pdf->AddPage();
	//
	// $pdf->SetFillColor(232,232,232);
	// $pdf->SetFont('Arial','B',9);
	// $pdf->Cell(10,6,'ID',1,0,'C',1);
	// $pdf->Cell(30,6,'NOMBRE',1,0,'C',1);
	// $pdf->Cell(40,6,'APELLIDO',1,0,'C',1);
	// $pdf->Cell(30,6,'CARGO',1,0,'C',1);
  // $pdf->Cell(30,6,'HO TRAB',1,0,'C',1);
  // $pdf->Cell(20,6,'PAG HOR',1,0,'C',1);
  // $pdf->Cell(30,6,'FALTAS',1,0,'C',1);
  // $pdf->Cell(25,6,'PENSIONES',1,0,'C',1);
	// $pdf->Cell(25,6,'CARG. FAM',1,0,'C',1);
  // $pdf->Cell(25,6,'SUELDO NETO',1,1,'C',1);
	// $pdf->SetFont('Arial','',8);
	// while($row = $resultado->fetch_assoc())
	// {
	// 	$pdf->Cell(10,6,utf8_decode($row['idPlanilla']),1,0,'C');
	// 	$pdf->Cell(30,6,$row['nombre'],1,0,'L');
	// 	$pdf->Cell(40,6,$row['apellido'],1,0,'L');
	// 	$pdf->Cell(30,6,$row['cargo'],1,0,'C');
  //   $pdf->Cell(30,6,$row['horasTra'],1,0,'C');
  //   $pdf->Cell(20,6,$row['pagoHoras'],1,0,'C');
  //   $pdf->Cell(30,6,$row['faltas'],1,0,'C');
  //   $pdf->Cell(25,6,$row['pensiones'],1,0,'C');
	// 	$pdf->Cell(25,6,$row['cargaFamiliar'],1,0,'C');
	// 	$pdf->Cell(25,6,utf8_decode($row['sueldoNeto']),1,1,'C');
	// }
	// $pdf->Output();





	$query1="SELECT idPlanilla,nombre,apellido,cargo,horasTra,pagoHoras,faltas,pensiones,cargaFamiliar,sueldoNeto  FROM planilla ";
	$resultado1 = $mysqli->query($query1);

	$pdf1 = new PDF('L');
	$pdf1->AliasNbPages();
	$pdf1->AddPage();

	$pdf1->SetFillColor(232,232,232);
	$pdf1->SetFont('Arial','B',9);
	$pdf1->Cell(10,6,'ID',1,0,'C',1);
	$pdf1->Cell(30,6,'NOMBRE',1,0,'C',1);
	$pdf1->Cell(40,6,'APELLIDO',1,0,'C',1);
	$pdf1->Cell(30,6,'CARGO',1,0,'C',1);
	$pdf1->Cell(30,6,'HO TRAB',1,0,'C',1);
	$pdf1->Cell(20,6,'PAG HOR',1,0,'C',1);
	$pdf1->Cell(30,6,'FALTAS',1,0,'C',1);
	$pdf1->Cell(25,6,'PENSIONES',1,0,'C',1);
	$pdf1->Cell(25,6,'CARG. FAM',1,0,'C',1);
	$pdf1->Cell(25,6,'SUELDO NETO',1,1,'C',1);
	$pdf1->SetFont('Arial','',8);
	while($row1 = $resultado1->fetch_assoc())
	{
		$pdf1->Cell(10,6,utf8_decode($row1['idPlanilla']),1,0,'C');
		$pdf1->Cell(30,6,$row1['nombre'],1,0,'L');
		$pdf1->Cell(40,6,$row1['apellido'],1,0,'L');
		$pdf1->Cell(30,6,$row1['cargo'],1,0,'C');
	  $pdf1->Cell(30,6,$row1['horasTra'],1,0,'C');
	  $pdf1->Cell(20,6,$row1['pagoHoras'],1,0,'C');
	  $pdf1->Cell(30,6,$row1['faltas'],1,0,'C');
	  $pdf1->Cell(25,6,$row1['pensiones'],1,0,'C');
		$pdf1->Cell(25,6,$row1['cargaFamiliar'],1,0,'C');
		$pdf1->Cell(25,6,utf8_decode($row1['sueldoNeto']),1,1,'C');
	}

	$pdf1->Output();













?>
