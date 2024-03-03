<?php
require('fpdf/fpdf.php');
require('conexion/conexion.php');


class PDF extends FPDF
{
// Cabecera de página
function Header()
{
 
    // Arial bold 15
    $this->SetFont('Arial','B',15);
    // Movernos a la derecha
    $this->Cell(90);
    // Título
    $this->Cell(70,10,'REPORTE DE PLATILLO',0,0,'C');
    
    // Salto de línea
    $this->Ln(20);

    $this->Cell(20,10, utf8_decode('Clave'), 1,0,'C',0);
	$this->Cell(130,10, utf8_decode('Platillo'), 1,0,'C',0);
    $this->Cell(20,10, utf8_decode('Precio'), 1,0,'C',0);
    $this->Cell(95,10, utf8_decode('Descripción'), 1,1,'C',0);

}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,utf8_decode('Página ').$this->PageNo().'/{nb}',0,0,'C');
}
}

$consulta = "SELECT * FROM platillo WHERE estatus ='1'";
$ejecConsulta =mysqli_query($conectar,$consulta);

$pdf = new PDF('L','mm', 'Letter');
$pdf -> AliasNbPages();
$pdf->AddPage('L', 'Letter');
$pdf->SetFont('Arial','',16);

while($row = $ejecConsulta->fetch_assoc()){
	
    $pdf->Cell(20,10, utf8_decode($row['id_platillo']), 1,0,'C',0);
	$pdf->Cell(130,10, utf8_decode($row['nombre_platillo']), 1,0,'L',0);
    $pdf->Cell(20,10, utf8_decode($row['precio_platillo']), 1,0,'C',0);
    $pdf->Cell(95,10, utf8_decode($row['descripcion_platillo']), 1,1,'L',0);
}



$pdf->Output('I', 'Reporte_Platillos.pdf');
?>