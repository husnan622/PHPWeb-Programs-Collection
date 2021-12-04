<?php
include "koneksi.php";
$proses=$_GET['proses'];
if ($proses=='tambah') {
if(isset($_POST['simpan'])){
	$id_pembayaran=$_POST['id_pembayaran'];
	$nis=$_POST['nis'];

	$jumlah_spp=$_POST['jumlah_spp'];
	$tgl_pembayaran=$_POST['tgl_pembayaran'];
	$keterangan=$_POST['keterangan'];
	
	
	$q=mysql_query("insert into pembayaran (id_pembayaran,nis,jumlah_spp,tgl_pembayaran,keterangan) values('$id_pembayaran','$nis','$jumlah_spp','$tgl_pembayaran','$keterangan')");
	if($q){
		header("location:index.php?page=pembayaran");
	}
	
}
}
else if ($proses=='hapus') {

	$id_pembayaran = $_GET['id'];
	
	$data=mysql_query("Delete from pembayaran where id_pembayaran='$id_pembayaran'");
	
	 if($data){
	 header("location:index.php?page=pembayaran&aksi=list");
 }else{
	echo mysql_error(); 

 }
 }
 else if ($proses =='update'){
$id_pembayaran=$_POST['id_pembayaran'];
	$nis=$_POST['nis'];

	$jumlah_spp=$_POST['jumlah_spp'];
	$tgl_pembayaran=$_POST['tgl_pembayaran'];
	$keterangan=$_POST['keterangan'];
	
	$edit=mysql_query("Update pembayaran set nis='$nis',
											
											jumlah_spp='$jumlah_spp',
											tgl_pembayaran='$tgl_pembayaran',
											keterangan='$keterangan'
											
											where id_pembayaran='$id_pembayaran'");
	if($edit){
	header("location:index.php?page=pembayaran&aksi=list");
	}
	else
	echo mysql_error();
	}

 
?>