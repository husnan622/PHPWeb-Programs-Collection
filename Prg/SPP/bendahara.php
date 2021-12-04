<?php
$aksi=isset($_GET['aksi']) ? $_GET['aksi'] : 'list'; 
switch($aksi) {
case 'entri' :
?>
<h1>Entri Data Bendahara</h1>
<form action="aksi_bendahara.php?proses=tambah"  method="post">
<div class="form-group">
		<label>ID Bendahara</label>
		<input class="form-control" name="idbendahara">
	</div>
	</div><div class="form-group">
		<label>Username</label>
		<input class="form-control" name="username">
</div>
	<div class="form-group">
		<label>Password</label>
		<input class="form-control" name="password">
</div>
	<div class="form-group">
		<label>Nama Bendahara</label>
		<input class="form-control" name="nama_bendahara">
	</div>
	<div class="form-group">
		<label>Jenis Kelamin</label>
		<select name="jk" class="form-control">
			<option value="Laki-laki">Laki-laki</option>
			<option value="Perempuan">Perempuan</option>
			</select>
		
	</div>
	
	<div class="form-group">
		<label>Alamat</label>
		<input class="form-control" name="alamat">
	</div>
	<div class="form-group">
		<label>Email</label>
		<input class="form-control" name="email">
	</div>
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
 <h1>Data Bendahara</h1>
 <?php
		if($_SESSION['level']=='admin'){
		?>
<a href="?page=bendahara&aksi=entri" class="btn btn-primary" width=30><span class="glyphicon glyphicon-plus"></span>Tambah Data Bendahara</a>
<?php } ?>
<table border=1 width="100%"  class="table table-bordered" id="dataTables-example">>
	<tr>
		<th>ID Bendahara</th>
		<th>Nama Bendahara </th>
		<th>Jenis Kelamin </th>
		<th>Alamat</th>
		<th>Email</th>
		<?php
			if($_SESSION['level']=='admin')
			echo"<th>Aksi</th>";
			?>
	</tr>
	<?php 
		$data = mysql_query("Select * from bendahara");
		while ($arr = mysql_fetch_array ($data)){

	?>
	<tr>
		
		<td><?php echo $arr['idbendahara'] ?> </td>
		<td><?php echo $arr['nama_bendahara']?></td>
		<td><?php echo $arr['jk']?></td>
		<td><?php echo $arr['alamat']?></td>
		<td><?php echo $arr['email']?></td>
		
		<?php
		if($_SESSION['level']=='admin'){
		?>
			<td><a href ="aksi_bendahara.php?proses=hapus&id=<?php echo $arr['idbendahara']?>" onclick ="return confirm('Yakin Akan Menghapus ?')" class='btn btn-danger'><span class="glyphicon glyphicon-trash">Hapus </span></a>   
			<a href ="?page=bendahara&aksi=edit&id=<?php echo $arr['idbendahara']?>" class="btn btn-warning"><span class="glyphicon glyphicon-edit">Edit </span></a></td>
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
<h1> Form Edit Data Bendahara</h1>

<?php 
	
	$data = mysql_query("select * from bendahara where idbendahara='$_GET[id]'");
	$arr= mysql_fetch_array($data);
?>
<form action="aksi_bendahara.php?proses=update" method="post">
<table>
	<tr>
		<td>Id Bendahara</td>
		<td><input type="text" value="<?php echo $arr['idbendahara'];?>" name="idbendahara" ></td>
	<tr>
	<tr>
		<td>Nama Bendahara</td>
		<td><input type="text" value = "<?php echo $arr['nama_bendahara']; ?>" name="nama_bendahara"></td>
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
		<td>Alamat</td>
		<td><input type="text"value ="<?php echo $arr['alamat'];?>" name="alamat"></td>
	</tr>
	<tr>
		<td>Email</td>
		<td><input type="text"value ="<?php echo $arr['email'];?>" name="email"></td>
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
