<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">  
<html xmlns="http://www.w3.org/1999/xhtml">  
<head>  
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />  
<title>Aplikasi Penjualan Sederhana Tanpa Database</title>  
<style type="text/css">  
.putih {  
 color: #FFF;  
}  
</style>  
</head>  
<body>  
  
<?php   
$nama_barang = $_POST['nama_barang'];  
$harga = $_POST['harga'];  
$jumlah = $_POST['jumlah'];  
$status = $_POST['status'];  
$kota = $_POST['kota'];  
  
//menghitung subtotal  
$subtotal = $harga * $jumlah ;  
  
//menghitung diskon berdasarkan status (pelanggan atau bukan pelanggan).  
//Keterangan :  
//jika statusnya pelanggan akan mendapat diskon 10%.  
//jika statusnya bukan pelanggan maka tidak mendapat diskon. Jadi:  
  
switch ($status){  
 case "Pelanggan":   
  $diskon = $subtotal * 0.1;  
 break;   
 default:   
  $diskon = 0;   
 }  
  
//menghitung ongkos kirim berdasarkan kota tujuan  
if($kota == "Jakarta" ){  
 $ongkos = 20000;  
 }  
else if($kota == "Bandung" ){  
 $ongkos = 10000;  
 }  
else if($kota == "Surabaya" ){  
 $ongkos = 30000;  
 }  
//menghitung total keseluruhan  
$total = $subtotal - $diskon + $ongkos;  
?>  
  
<div align="center">  
<table width="297" border="1">  
<tr>  
<td colspan="2" bgcolor="#666666">  
<div align="center" class="putih">  
<strong>HASIL PERHITUNGAN</strong>  
</div>  
</td>  
</tr>  
<tr>  
<td width="116" bgcolor="#CCCCCC">Nama Barang</td>  
<td width="165" bgcolor="#CCCCCC">&nbsp;  
<?php echo "$nama_barang"; ?></td>  
</tr>  
<tr>  
<td bgcolor="#CCCCCC">Harga</td>  
<td bgcolor="#CCCCCC">&nbsp;  
<?php echo "Rp. ".number_format($harga); ?></td>  
</tr>  
<tr>  
<td bgcolor="#CCCCCC">Quantity</td>  
<td bgcolor="#CCCCCC">&nbsp;  
<?php echo "$jumlah"; ?></td>  
</tr>  
<tr>  
<td bgcolor="#CCCCCC">Subtotal</td>  
<td bgcolor="#CCCCCC">&nbsp;  
<?php echo "Rp. ".number_format($subtotal); ?></td>  
</tr>  
<tr>  
<td bgcolor="#CCCCCC">Status</td>  
<td bgcolor="#CCCCCC">&nbsp;  
<?php echo "$status"; ?></td>  
</tr>  
<tr>  
<td bgcolor="#CCCCCC">Diskon</td>  
<td bgcolor="#CCCCCC">&nbsp;  
<?php echo "Rp. ".number_format($diskon); ?></td>  
</tr>  
<tr>  
<td bgcolor="#CCCCCC">Ongkos Kirim</td>  
<td bgcolor="#CCCCCC">&nbsp;  
<?php echo "Rp. ".number_format($ongkos)?>   
<?php echo " ( $kota )";?></td>  
</tr>  
<tr>  
<td bgcolor="#666666" class="putih">  
<strong>Total</strong></td>  
<td bgcolor="#666666">&nbsp;  
<?php echo "Rp. ".number_format($total); ?></td>  
</tr>  
</table>  
<a href="index.php"> &lt;&lt; Kembali</a>  
  
</div>  
</body>  
</html>  
