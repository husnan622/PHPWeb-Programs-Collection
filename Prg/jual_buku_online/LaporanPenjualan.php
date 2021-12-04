<?php
// memanggil library FPDF
require('fpdf.php');
// intance object dan memberikan pengaturan halaman PDF
$pdf = new FPDF('l','mm','A5');
// membuat halaman baru
$pdf->AddPage();
// setting jenis font yang akan digunakan
$pdf->SetFont('Arial','B',16);
// mencetak string 
$pdf->Cell(190,7,'CLIENT',0,1,'C');
$pdf->SetFont('Arial','B',12);
$pdf->Cell(190,7,'DAFTAR PENJUALAN',0,1,'C');

// Memberikan space kebawah agar tidak terlalu rapat
$pdf->Cell(10,7,'',0,1);

$pdf->SetFont('Arial','B',10);
$pdf->Cell(30,6,'id_keranjang',1,0);
$pdf->Cell(30,6,'id_pembeli',1,0);
$pdf->Cell(30,6,'id_buku',1,0);
$pdf->Cell(30,6,'qty',1,0);
$pdf->Cell(30,6,'harga',1,0);
$pdf->Cell(30,6,'total_harga',1,1);

$pdf->SetFont('Arial','',10);

include 'koneksi2.php';
$keranjang = mysqli_query($connect, "select * from keranjang");
while ($row = mysqli_fetch_array($keranjang)){
    $pdf->Cell(30,6,$row['id_keranjang'],1,0);
    $pdf->Cell(30,6,$row['id_pembeli'],1,0);
    $pdf->Cell(30,6,$row['id_buku'],1,0);
    $pdf->Cell(30,6,$row['qty'],1,0);
    $pdf->Cell(30,6,$row['harga'],1,0);
    $pdf->Cell(30,6,$row['total_harga'],1,1);
}

$pdf->Output();
?>
