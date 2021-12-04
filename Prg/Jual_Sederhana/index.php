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
<div align="center">  
<form id="form1" name="form1" method="post" action="proses.php">  
<p>&nbsp;</p>  
<table width="383" height="201" border="1">  
<tr>  
<td colspan="2" bgcolor="#666666">  
<div align="center" class="putih">  
<strong>PENJUALAN</strong>  
</div>  
</td>  
</tr>  
<tr>  
<td width="124" bgcolor="#CCCCCC">Nama Barang </td>  
<td width="243" bgcolor="#CCCCCC">&nbsp;  
<input name="nama_barang" type="text" /></td>  
</tr>  
<tr>  
<td bgcolor="#CCCCCC">Harga</td>  
<td bgcolor="#CCCCCC">&nbsp;  
<input name="harga" type="text" /></td>  
</tr>  
<tr>  
<td bgcolor="#CCCCCC">Quantity</td>  
<td bgcolor="#CCCCCC">&nbsp;  
<input name="jumlah" type="text" /></td>  
</tr>  
<tr>  
<td bgcolor="#CCCCCC">Status</td>  
<td bgcolor="#CCCCCC"><p>  
<label>  
<input type="radio" name="status" value="Pelanggan" id="status_0" checked="checked" />  
 Pelanggan</label>  
<label>  
<input type="radio" name="status" value="Bukan pelanggan" id="status_1" />  
 Bukan pelanggan</label>  
  
  
</p></td>  
</tr>  
<tr>  
<td bgcolor="#CCCCCC">Kota</td>  
<td bgcolor="#CCCCCC"><select name="kota">  
<option>Jakarta</option>  
<option>Bandung</option>  
<option>Surabaya</option>  
</select>&nbsp;</td>  
</tr>  
<tr>  
<td height="28" bgcolor="#CCCCCC">&nbsp;</td>  
<td bgcolor="#CCCCCC">  
<input name="" type="submit" value="Hitung" />&nbsp;  
<input name="" type="reset" value="Hapus" /></td>  
</tr>  
</table>  
</form>  
</div>  
</body>  
</html> 
