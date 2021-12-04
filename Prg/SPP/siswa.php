<?php
$aksi=isset($_GET['aksi']) ? $_GET['aksi'] : 'list'; 
switch($aksi) {
case 'entri' :
?>
<h1>Entri Data Siswa</h1>
		
<form action="aksi_siswa.php?proses=tambah"  method="post">
<div class="form-group">
		<label>Nis</label>
		<input class="form-control" name="nis">
</div><div class="form-group">
		<label>Username</label>
		<input class="form-control" name="username">
</div>
<div class="form-group">
		<label>Password</label>
		<input class="form-control" name="password">
</div>
<div class="form-group">
		<label>Nama Siswa</label>
		<input class="form-control" name="nama">
</div>
<div class="form-group">
		<label>Jenis Kelamin</label>
		<select name="jk" class="form-control">
			<option value="Laki-laki">Laki-laki</option>
			<option value="Perempuan">Perempuan</option>
			</select>
		
	
	
	<div class="form-group">
		<label>Nama Bapak</label>
		<input class="form-control" name="nama_bapak"></label>
	</div>
	<div class="form-group">
		<label>Alamat</label>
		<input class="form-control" name="alamat">
	</div>
<div class="form-group">
		<label>Umur</label>
		<input class="form-control" name="umur">
	</div>
	<div class="form-group">
		<label>Status</label>
		<select name="status" class="form-control">
			<option value="Bendahara">Bendahara</option>
			<option value="Siswa">Siswa</option>
			</select>
	<tr>
		<td></td>
		<td><input type="submit" class="btn btn-primary" value="Simpan" name="simpan"></td>
	</tr>

</table>
</form>
<?php
break;
case 'list' :

 ?>
 <h1>Data Siswa</h1>
 <?php
		if($_SESSION['status']=='Bendahara'){
		?>
<a href="?page=siswa&aksi=entri" class="btn btn-primary" width=30><span class="glyphicon glyphicon-plus"></span>Tambah Data Siswa</a>
<?php } ?>
<table border=1 width="100%" class="table table-bordered" id="dataTables-example">
	<tr>
		<th>Nis</th>
		<th>Nama Siswa </th>
		<th>Jenis Kelamin </th>
		<th>Nama Bapak</th>
		<th>Alamat</th>
		<th>Umur</th>
		<?php
			if($_SESSION['status']=='Bendahara')
			echo"<th>Aksi</th>";
			?>
			
	</tr>
	<?php 
		$nis = $_SESSION['nis'];
		if($_SESSION['status']=='Bendahara'){
			$data = mysql_query("Select * from siswa");
		} else {
			$data = mysql_query("Select * from siswa where nis=$nis");
		}
		while ($arr = mysql_fetch_array ($data)){

	?>
	<tr>
		
		<td><?php echo $arr['nis'] ?> </td>
		<td><?php echo $arr['nama']?></td>
		<td><?php echo $arr['jk']?></td>
		<td><?php echo $arr['nama_bapak']?> </td>
		<td><?php echo $arr['alamat']?></td>
		<td><?php echo $arr['umur']?></td>
		
		<?php
		if($_SESSION['status']=='Bendahara'){
		?>
			<td><a href ="aksi_siswa.php?proses=hapus&id=<?php echo $arr['nis']?>" onclick ="return confirm('Yakin Akan Menghapus ?')" class='btn btn-danger'><span class="glyphicon glyphicon-trash">Hapus </span></a>   
			<a href ="?page=siswa&aksi=edit&id=<?php echo $arr['nis']?>" class="btn btn-warning"><span class="glyphicon glyphicon-edit">Edit </span></a></td>
		<?php } ?>
	</tr>
	<?php 
		}
	?>
	<?php
	 break;
	 case 'edit' :

	?>
</table>
<h1> Form Edit Data Siswa</h1>

<?php 
	
	$data = mysql_query("select * from siswa where nis='$_GET[id]'");
	$arr= mysql_fetch_array($data);
?>
<form action="aksi_siswa.php?proses=update" method="post">
<table>
	<tr>
		<td>Nis</td>
		<td><input type="text" value="<?php echo $arr['nis'];?>" name="nis" ></td>
	<tr>
	
	<tr>
		<td>Nama Siswa</td>
		<td><input type="text" value = "<?php echo $arr['nama']; ?>" name="nama"></td>
	</tr>
	<tr>
		<td>Jenis Kelamin </td>
		<td><select name="jk">
			<option value="Laki-laki">Laki-laki</option>
			<option value="Perempuan">Perempuan</option>
			</select>
		</td>
	</tr>
	<tr>
		<td>Nama Bapak</td>
		<td><input type="text" value = "<?php echo $arr['nama_bapak']; ?>" name="nama_bapak"></td>
	</tr>
	

	
	<tr>
		<td>Alamat</td>
		<td><input type="text"value ="<?php echo $arr['alamat'];?>" name="alamat"></td>
	</tr>
	<tr>
		<td>Umur</td>
		<td><input type="text"value ="<?php echo $arr['umur'];?>" name="umur"></td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" class="btn btn-primary" name="submit" value="Simpan"></td>
	</tr>
</table>
</form>
<?php
break;
}
?>
