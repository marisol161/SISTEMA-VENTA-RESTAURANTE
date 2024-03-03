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
    $this->Cell(70,10,'PERSONAL',0,0,'C');
    // Salto de línea
    $this->Ln(20);

    $this->Cell(10,10, utf8_decode('#'), 1,0,'C',0);
	$this->Cell(25,10, utf8_decode('Nombre'), 1,0,'L',0);
    $this->Cell(30,10, utf8_decode('Apellido 1'), 1,0,'L',0);
    $this->Cell(30,10, utf8_decode('Apellido 2'), 1,0,'L',0);
    $this->Cell(20,10, utf8_decode('User'), 1,0,'L',0);
    $this->Cell(32,10, utf8_decode('Contraseña'), 1,0,'L',0);
    $this->Cell(70,10, utf8_decode('E-mail'), 1,0,'L',0);
    $this->Cell(50,10, utf8_decode('Rol'), 1,1,'L',0);

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

$consultaUsuario = "SELECT usuario.id_usuario, usuario.nombre, usuario.apellido1, 
usuario.apellido2, usuario.nickname, usuario.passworde, usuario.email, rol.rol
FROM usuario INNER JOIN rol ON usuario.id_rol = rol.id_rol
WHERE usuario.estatus = 1 and rol != 'CLIENTE'";
$ejecConsulta =mysqli_query($conectar,$consultaUsuario);

$pdf = new PDF('L','mm', 'Letter');
$pdf -> AliasNbPages();
$pdf->AddPage('L', 'Letter');
$pdf->SetFont('Arial','',16);

while($row = $ejecConsulta->fetch_assoc()){
	
    $pdf->Cell(10,10, utf8_decode($row['id_usuario']), 1,0,'C',0);
	$pdf->Cell(25,10, utf8_decode($row['nombre']), 1,0,'L',0);
    $pdf->Cell(30,10, utf8_decode($row['apellido1']), 1,0,'L',0);
    $pdf->Cell(30,10, utf8_decode($row['apellido2']), 1,0,'L',0);
    $pdf->Cell(20,10, utf8_decode($row['nickname']), 1,0,'L',0);
    $pdf->Cell(32,10, utf8_decode($row['passworde']), 1,0,'L',0);
    $pdf->Cell(70,10, utf8_decode($row['email']), 1,0,'L',0);
    $pdf->Cell(50,10, utf8_decode($row['rol']), 1,1,'L',0);
}


/*


*/


$pdf->Output('I', 'Personal.pdf');
?>