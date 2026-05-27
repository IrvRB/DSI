<?php

require('../DSI30/assets/fpdf/fpdf.php');


function clean($txt) {
    return mb_convert_encoding($txt, 'ISO-8859-1', 'UTF-8');
}


$valConductor   = clean("Juan Pérez Mendoza");
$valRFC         = "PEMJ950312XX1";
$valDomicilio   = clean("Av. Benito Juárez #104, Centro, Querétaro");
$valFecha       = date('Y-m-d'); // Fecha de hoy
$valFechaLimite = date('Y-m-d', strtotime('+ 15 days'));
$valImporte     = "$1,244.00"; 
$valMotivo      = clean("Estacionarse en lugar prohibido - FOLIO: 08432");


class PDF extends FPDF {
    function Footer() {
        $this->SetY(-15);
        $this->SetFont('Arial', 'I', 8);
        $this->Cell(0, 10, clean('Página ') . $this->PageNo(), 0, 0, 'C');
    }
}


$pdf = new PDF();
$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 14);

$pdf->Cell(100, 10, 'COMPROBANTE DIGITAL DE PAGO', 0, 1, 'L');
$pdf->Ln(10);


$pdf->SetFont('Arial', 'B', 10);
$pdf->SetFillColor(235, 235, 235); 

$pdf->Cell(45, 8, 'CONDUCTOR', 1, 0, 'L', true);
$pdf->SetFont('Arial', '', 10);
$pdf->Cell(145, 8, $valConductor, 1, 1, 'L');

$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(45, 8, 'RFC', 1, 0, 'L', true);
$pdf->SetFont('Arial', '', 10);
$pdf->Cell(145, 8, $valRFC, 1, 1, 'L');

$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(45, 8, 'DOMICILIO', 1, 0, 'L', true);
$pdf->SetFont('Arial', '', 9);
$pdf->Cell(145, 8, $valDomicilio, 1, 1, 'L');

$pdf->Ln(5);

// --- SECCIÓN 2: DETALLES DEL PAGO ---
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(55, 8, 'FECHA', 1, 0, 'L', true);
$pdf->SetFont('Arial', '', 10);
$pdf->Cell(40, 8, $valFecha, 1, 1, 'C');

$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(55, 8, clean('FECHA LÍMITE DE PAGO'), 1, 0, 'L', true);
$pdf->SetFont('Arial', '', 10);
$pdf->Cell(40, 8, $valFechaLimite, 1, 1, 'C');

$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(55, 8, 'IMPORTE/MONTO', 'LTB', 0, 'L', true);
$pdf->SetTextColor(255, 0, 0); // Texto del monto en color rojo
$pdf->SetFont('Arial', 'B', 11);
$pdf->Cell(135, 8, $valImporte, 'TRB', 1, 'R');
$pdf->SetTextColor(0, 0, 0); // Resetear texto a negro

$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(55, 8, 'CAUSA/MOTIVO', 1, 0, 'L', true);
$pdf->SetFont('Arial', '', 9);
$pdf->Cell(135, 8, $valMotivo, 1, 1, 'L');


if (ob_get_contents()) ob_end_clean();

$pdf->Output('I', 'Comprobante_Multa.pdf');
?>