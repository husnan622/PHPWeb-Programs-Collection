<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!doctype html public "-//W3C//DTD HTML 4.0 //EN"> 
<html>
<head>
       <title>Data Nilai Mahasiswa</title>
</head>
<body>
<h1>Data Nilai Mahasiswa</h1>
<a href="input.php">Input Kembali Nilai Mahasiswa</a><br>
<?php $date=date("l, d F Y, H:i:s");
include "koneksi.php";
$tampil=mysql_query("SELECT * from mhs");
$jumlah=mysql_num_rows($tampil);
echo "<pre>";
echo "Tanggal dan Waktu: $date <br>";
echo "Jumlah Record = $jumlah mahasiswa<br>";
?>
<table border="1">
<tr align=center>
<td>NIM</td><td>Nama</td><td>Matakuliah</td><td>Nilai 1</td><td>Nilai 2</td><td>Nilai 3</td><td>Nilai Rata-rata</td><td>Keterangan</td><td>Hapus</td>
</tr>
<?php
while ($data=mysql_fetch_array($tampil))
{
$nim=$data['nim'];
$nm=$data['nama'];
$mk=$data['nama_matakuliah'];
$n1=$data['nilai1'];
$n2=$data['nilai2'];
$n3=$data['nilai3'];
$r=$data['rata'];
$k=$data['ket'];
echo "<tr><td>$nim</td><td>$nm</td><td>$mk</td><td>$n1</td><td>$n2</td><td>$n3</td><td>$r</td><td>$k</td><td><a href=hapus.php?nim=$nim>Hapus</a></td></tr>";
    }
?>

</table>
</body>
</html>

