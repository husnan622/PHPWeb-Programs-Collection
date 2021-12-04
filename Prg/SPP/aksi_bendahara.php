<?php
include "koneksi.php";
$proses=$_GET['proses'];
if ($proses=='tambah') {
if(isset($_POST['simpan'])){
	$idbendahara=$_POST['idbendahara'];
	$username=$_POST['username'];
	$password=$_POST['password'];
	$nama_bendahara=$_POST['nama_bendahara'];
	$jk=$_POST['jk'];
	$alamat=$_POST['alamat'];
	$email=$_POST['email'];
	$status=$_POST['status'];
	
	$q=mysql_query("insert into bendahara (idbendahara,username,password,nama_bendahara,jk,alamat,email,status) values('$idbendahara','$username',$password','$nama_bendahara','$jk','$alamat','$email','$status')");
	if($q){
		header("location:index.php?page=bendahara");
	}
	
}
}
else if ($proses=='hapus') {

	$idbendahara = $_GET['id'];
	
	$data=mysql_query("Delete from bendahara where idbendahara='$idbendahara'");
	
	 if($data){
	 header("location:index.php?page=bendahara&aksi=list");
 }else{
	echo mysql_error(); 

 }
 }
 else if ($proses =='update'){
$idbendahara=$_POST['idbendahara'];
	$nama_bendahara=$_POST['nama_bendahara'];
	$jk=$_POST['jk'];
	$alamat=$_POST['alamat'];
	$email=$_POST['email'];
	
	$edit=mysql_query("Update bendahara set nama_bendahara='$nama_bendahara',
											jk='$jk',
											alamat='$alamat',
											email='$email'
											where idbendahara='$idbendahara'");
	if($edit){
	header("location:index.php?page=bendahara&aksi=list");
	}
	else
	echo mysql_error();
	}

 
?>