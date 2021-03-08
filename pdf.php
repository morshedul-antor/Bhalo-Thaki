<?php
include 'db.php';
include 'fpdf/fpdf.php';

$sql = "SELECT * FROM prescription WHERE 1";
$data = mysqli_query($con,$sql);

 if(isset($_POST['download'])){

    $pdf = new FPDF('p', 'mm', 'a4');
    $pdf->AddPage();
    $pdf->SetFont('Arial','B',22);

    $pdf->Cell(0, 10, 'Online Telemedicine', 0, 1, 'C');
    $pdf->line(0,1,1,1);
    $pdf->ln(10);

    $pdf->SetFont('Arial','',12);

    while($row = mysqli_fetch_array($data))
    {
       $pdf->Cell(0, 10, 'Doctor Info', 1, 0, 'C');
       $pdf->ln(10);

       $pdf->Cell(40, 10, 'Doctor Name:', 0, 0);
       $pdf->Cell(30, 10, $row['dname'], 0, 0);
       $pdf->ln(8);

       $pdf->Cell(40, 10, 'Specialty:', 0, 0);
       $pdf->Cell(30, 10, $row['specialty'], 0, 0);
       $pdf->ln(8);

       $pdf->Cell(40, 10, 'BMDC NO:', 0, 0);
       $pdf->Cell(30, 10, $row['bmdc'], 0, 0);
       $pdf->ln(8);

       $pdf->Cell(40, 10, 'Doctor Number:', 0, 0);
       $pdf->Cell(30, 10, $row['dnum'], 0, 0);
       $pdf->ln(8);

       $pdf->Cell(40, 10, 'Address:', 0, 0);
       $pdf->Cell(30, 10, $row['address'], 0, 0);
       $pdf->ln(10);
       $pdf->ln(10);
       $pdf->ln(10);

       $pdf->Cell(0, 10, 'Patient Info', 1, 0, 'C');
       $pdf->ln(10);

       $pdf->Cell(40, 10, 'Patient Name:', 0, 0);
       $pdf->Cell(30, 10, $row['pname'], 0, 0);
       $pdf->ln(8);

       $pdf->Cell(40, 10, 'Patient Age:', 0, 0);
       $pdf->Cell(30, 10, $row['page'], 0, 0);
       $pdf->ln(8);

       $pdf->Cell(40, 10, 'Date:', 0, 0);
       $pdf->Cell(30, 10, $row['pdate'], 0, 0);
       $pdf->ln(8);

       $pdf->Cell(40, 10, 'Number:', 0, 0);
       $pdf->Cell(30, 10, $row['pnum'], 0, 0);
       $pdf->ln(8);

       $pdf->Cell(40, 10, '', 0, 0);
       $pdf->ln(8);

       $pdf->Cell(0, 10, 'Prescription', 1, 0, 'C');
       $pdf->ln(10);
       $pdf->Cell(30, 10, $row['pres1'], 0, 0);
       $pdf->ln(12);
       $pdf->Cell(30, 10, $row['pres2'], 0, 0);
       $pdf->ln(12);
       $pdf->Cell(30, 10, $row['pres3'], 0, 0);
       $pdf->ln(12);

    }


    $pdf->Output();
}
?>
