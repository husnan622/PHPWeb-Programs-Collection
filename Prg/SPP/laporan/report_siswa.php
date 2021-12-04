<?php

	require('fpdf/fpdf.php');
	$pdf = new FPDF();
	
	$pdf->AddPage();

	$pdf->SetFont('Arial','B',16);
	
	$pdf->Cell(190,7,'Laporan Pembayaran  ',0,1,'C');
	
	
	$pdf->Cell(10,7,'',0,1);
	
	$pdf->SetFont('Arial','B',10);
	$pdf->Cell(10,6,'No',1,0,'C');
	$pdf->Cell(22,6,'NIS',1,0,'C');
	$pdf->Cell(50,6,'NAMA',1,0,'C');
	$pdf->Cell(22,6,'Jumlah SPP',1,0,'C');
	$pdf->Cell(35,6,'Tanggal Pembayaran',1,0,'C');
	$pdf->Cell(35,6,'Keterangan',1,1,'C');
	
	$pdf->SetFont('Arial','',10);
	
	mysql_connect('localhost','root','');
	mysql_select_db('spp');
	$bln = $_POST['bulan'];
		
	include ('../koneksi.php');
	$pembayaran=mysql_query( "select p.nis,s.nama,p.jumlah_spp,p.tgl_pembayaran,p.keterangan
from siswa s, pembayaran p
where p.nis=s.nis and month(tgl_pembayaran)=$bln");
	$no=1;
	while ($row =mysql_fetch_array($pembayaran)){
		$pdf->Cell(10,6,$no,1,0);
		$pdf->Cell(22,6,$row['nis'],1,0);
		$pdf->Cell(50,6,$row['nama'],1,0);
		$pdf->Cell(22,6,$row['jumlah_spp'],1,0);
		$pdf->Cell(35,6,$row['tgl_pembayaran'],1,0);
		$pdf->Cell(35,6,$row['keterangan'],1,1);
		
		$no++;
	}
	$pdf->Output();
?>