<?php
include "koneksi.php";
$proses=$_GET['proses'];
if ($proses=='tambah') {
if(isset($_POST['simpan'])){
	$nis=$_POST['nis'];
	$username=$_POST['username'];
	$password=$_POST['password'];
	$nama=$_POST['nama'];
	$jk=$_POST['jk'];
	$nama_bapak=$_POST['nama_bapak'];
	$alamat=$_POST['alamat'];
	$umur=$_POST['umur'];
	$status=$_POST['status'];
	
	
	$q=mysql_query("insert into siswa (nis,username,password,nama,jk,nama_bapak,alamat,umur,status) values('$nis','$username','$password','$nama','$jk','$nama_bapak','$alamat','$umur','$status')");
	if($q){
		header("location:index.php?page=siswa");
	}
	
}
}
else if ($proses=='hapus') {

	$nis = $_GET['id'];
	
	$data=mysql_query("Delete from siswa where nis='$nis'");
	
	 if($data){
	 header("location:index.php?page=siswa&aksi=list");
 }else{
	echo mysql_error(); 

 }
 }
 else if ($proses =='update'){
$nis=$_POST['nis'];
	$nama =$_POST['nama'];
	$jk=$_POST['jk'];
	$nama_bapak =$_POST['nama_bapak'];
	$alamat =$_POST['alamat'];
	$umur=$_POST['umur'];
	
	
	$edit=mysql_query("Update siswa set nama='$nama',
											jk='$jk',
											nama_bapak='$nama_bapak',
											alamat='$alamat',
											umur='$umur'
											where nis='$nis'");
	if($edit){
	header("location:index.php?page=siswa&aksi=list");
	}
	else
	echo mysql_error();
	}

 
?>