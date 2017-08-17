<?php

	require 'fpdf/fpdf.php';

	class PDF extends FPDF
	{
		function Header()
		{
			 $this->Image('img/jch.png', 10, 10, 50 );
			$this->SetFont('Arial','B',18);
			$this->Cell(30);
			$this->Cell(220,10, 'Reporte Sueldos y Empleados - PLANILLA',0,0,'C');
			$this->Ln(30);

		}

		function Footer()
		{
			$this->SetY(-15);
			$this->SetFont('Arial','I', 8);
			$this->Cell(0,10, 'Pagina '.$this->PageNo().'/{nb}',0,0,'C' );
		}
	}
?>
