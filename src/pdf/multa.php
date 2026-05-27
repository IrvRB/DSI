<?php
require('../DSI30/assets/fpdf/fpdf.php');




class PDF extends FPDF
{
    // Pie de página opcional
    function Footer()
    {
        $this->SetY(-15);
        $this->SetFont('Arial', 'I', 8);
        $this->Cell(0, 10, 'Pagina ' . $this->PageNo(), 0, 0, 'C');
    }
}


$pdf = new PDF();
$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 14);

// --- ENCABEZADO ---
$pdf->Cell(100, 10, 'COMPROBANTE DIGITAL DE PAGO', 0, 10, 'L');

$pdf->Ln(10);
// Espacio para el logo (Asegúrate de tener la imagen en tu carpeta)
$pdf->Image('assets/logo.png', 150, 5, 45);
$pdf->Ln(15);

// --- SECCIÓN 1: DATOS DEL CONDUCTOR ---
$pdf->SetFont('Arial', 'B', 10);
$pdf->SetFillColor(255, 255, 255);

// Fila Conductor
$pdf->Cell(45, 8, 'CONDUCTOR', 1, 0, 'L');
$pdf->SetFont('Arial', '', 10);
$pdf->Cell(145, 8, '', 1, 1, 'L');

// Fila RFC
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(45, 8, 'RFC', 1, 0, 'L');
$pdf->SetFont('Arial', '', 10);
$pdf->Cell(145, 8, '', 1, 1, 'L');

// Fila Domicilio
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(45, 8, 'DOMICILIO', 1, 0, 'L');
$pdf->SetFont('Arial', '', 10);
$pdf->Cell(145, 8, '', 1, 1, 'L');

$pdf->Ln(5);

// --- SECCIÓN 2: DETALLES DEL PAGO ---
$pdf->SetFont('Arial', 'B', 10);

// Fecha
$pdf->Cell(55, 8, 'FECHA', 1, 0, 'L');
$pdf->SetFont('Arial', '', 10);
$pdf->Cell(40, 8, '', 1, 1, 'C');

// Fecha Límite
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(55, 8, 'FECHA LIMITE DE PAGO', 1, 0, 'L');
$pdf->SetFont('Arial', '', 10);
$pdf->Cell(40, 8, '', 1, 1, 'C');

// Importe / Monto
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(55, 8, 'IMPORTE/MONTO', 'LTB', 0, 'L');
$pdf->SetTextColor(255, 0, 0); // Texto en Rojo
$pdf->Cell(135, 8, '$00.00', 'TRB', 1, 'R');
$pdf->SetTextColor(0, 0, 0); // Regresar a Negro

// Causa / Motivo
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(55, 8, 'CAUSA/MOTIVO', 1, 0, 'L');
$pdf->SetFont('Arial', '', 10);
$pdf->Cell(135, 8, '', 1, 1, 'L');

$pdf->Ln(10);

// --- SECCIÓN 3: OPCIONES DE PAGO ---
$pdf->SetFont('Arial', '', 11);
$pdf->Cell(0, 10, 'Pagar en:', 0, 1, 'L');

$pdf->Ln(2);


$pdf->Ln(4);

// Fila Afirme
$pdf->Image('assets/banco.png', 25, $pdf->GetY(), 135);

$pdf->Output();