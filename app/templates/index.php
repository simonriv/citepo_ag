<?php
require('fpdf\fpdf.php');


class PDF extends FPDF
{
    // Cabecera de página
    function Header()
    {
        // Logo
        $this->Image('../templates/img/Logo-citepo-Oficial (1) (1).png', 60, 20, 81, 39.7, 'png');

        // Arial bold 15
        $this->SetFont('Arial', 'B', 20);
        // Movernos a la derecha
        $this->Cell(60);
        // Título
        $this->Cell(70, 120, 'Boleto De Entrada ', 0, 0, 'C');
        $this->SetTextColor(242, 139, 45);

        // Salto de línea
        $this->Ln(80);
    }



    // Pie de página
    function Footer()
    {
        $this->Image('../templates/img/QR_code.png', 85, 180, 40, 40, 'png');
        // Posición: a 1,5 cm del final
        $this->SetY(-15);
        // Arial italic 8
        $this->SetFont('Arial', 'I', 8);
        // Número de página
        $this->Cell(0, 10, ('Pagina ') . $this->PageNo() . '/{nb}', 0, 0, 'C');
    }
}

require_once('app\config\connection.php');
$cn = new Connection();

$id = $_GET["id"];

$consulta = "SELECT * FROM client WHERE ClientId = $id";
$resultado = $cn->connect()->query($consulta);

$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial', '', 16);



while ($row = $resultado->fetch()) {
    $pdf->SetTextColor(242, 139, 48);
    $pdf->Setx(80);
    $pdf->SetFont('Arial', 'B', 19);
    $pdf->Cell(50, 10, 'NOMBRE', 2, 1, 'C', 0);
    $pdf->SetTextColor(13, 13, 13);
    $pdf->Setx(80);
    $pdf->Cell(50, 10, $row['nombre'], 2, 1, 'C', 0);
    $pdf->SetTextColor(242, 139, 48);
    $pdf->Ln(10);
    $pdf->Setx(80);
    $pdf->SetFont('Arial', 'B', 19);
    $pdf->Cell(50, 10, 'APELLIDO', 2, 1, 'C', 0);
    $pdf->SetTextColor(13, 13, 13);
    $pdf->Setx(80);
    $pdf->Cell(50, 10, $row['Apellido'], 2, 1, 'C', 0);
    $pdf->SetTextColor(242, 139, 48);
    $pdf->Ln(10);
    $pdf->Setx(80);
    $pdf->SetFont('Arial', 'B', 19);
    $pdf->Cell(50, 10, 'DOCUMENTO', 2, 1, 'C', 0);
    $pdf->SetTextColor(13, 13, 13);
    $pdf->Setx(80);
    $pdf->Cell(50, 10, $row['doc'], 2, 1, 'C', 0);
}


$pdf->Output();
