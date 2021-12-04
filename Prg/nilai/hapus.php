<!doctype html public "-//W3C//DTD HTML 4.0 //EN"> 
<html>
<head>
       <title></title>
</head>
<body>
<?php
$nim=$_GET['nim'];
include "koneksi.php";
$del=mysql_query("delete from mhs where nim=$nim");
if ($del)
{echo"Data dengan NIM $nim Berhasil Dihapus";}
else {echo"Gagal Hapus";}
 ?>
<meta http-equiv=refresh content=1;url=index.php>
</body>
</html>
