<?php
$aksi=isset($_GET['aksi']) ? $_GET['aksi'] : 'list'; 
switch($aksi) {
case 'entri' :
?>
<h1>Entri Data Pembayaran</h1>
<form action="aksi_pembayaran.php?proses=tambah"  method="post">
<div class="form-group">
		<label>ID Pembayaran</label>
		<input class="form-control" name="id_pembayaran">
	</tr>
<div class="form-group">
		<label>Nis</label>
		<select name="nis" class="form-control">
			<?php
				include('koneksi.php');
				$nmsiswa=mysql_query("Select * From siswa");
				while ($data=mysql_fetch_array($nmsiswa)){
				
				echo "<option value=$data[nis]>$data[nama]</option>";
				}
			?></select>
		
	</div>

	
<div class="form-group">
		<label>Jumlah SPP</label>
		<input class="form-control" name="jumlah_spp">
	</div>
<div class="form-group">
		<label>Tanggal Pembayaran</label>
		<input type="date" class="form-control" name="tgl_pembayaran">
	</div>
<div class="form-group">
		<label> Keterangan</label>
		<input class="form-control"  name="keterangan">
	</div>
<div class="form-group">
		<label></label>
		<td><input type="submit" class="btn btn-primary" value="Simpan" name="simpan"></td>
	</div>

</table>
</form>
<?php
break;
case 'list' :

 ?>
 <h1>Data Pembayaran</h1>
 <?php
		if($_SESSION['status']=='Bendahara'){
		?>
<a href="?page=pembayaran&aksi=entri" class="btn btn-primary" width=30><span class="glyphicon glyphicon-plus"></span>Tambah Data Pembayaran</a>
<?php } ?>
<table border=1 width="100%" class="table table-bordered" id="dataTables-example">
	<tr>
		<th>ID Pembayaran</th>
		<th>Nama Siswa </th>	
		<th>Jumlah SPP </th>
		<th>Tanggal Pembayaran</th>
		<th>Keterangan</th>
		<?php
			if($_SESSION['status']=='Bendahara')
			echo"<th>Aksi</th>";
			?>
	</tr>
	<?php 
		$data = mysql_query("Select * from pembayaran,siswa where siswa.nis=pembayaran.nis ");
		while ($arr = mysql_fetch_array ($data)){

	?>
	<tr>
		
		<td><?php echo $arr['id_pembayaran'] ?> </td>
		<td><?php echo $arr['nama']?></td>
		<td><?php echo $arr['jumlah_spp']?></td>
		<td><?php echo $arr['tgl_pembayaran']?></td>
		<td><?php echo $arr['keterangan']?></td>
		
		<?php
		if($_SESSION['status']=='Bendahara'){
		?>
			<td><a href ="aksi_pembayaran.php?proses=hapus&id=<?php echo $arr['id_pembayaran']?>" onclick ="return confirm('Yakin Akan Menghapus ?')" class='btn btn-danger'><span class="glyphicon glyphicon-trash">Hapus </span></a>   
			<a href ="?page=pembayaran&aksi=edit&id=<?php echo $arr['id_pembayaran']?>" class="btn btn-warning"><span class="glyphicon glyphicon-edit">Edit </span></a></td>
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
<h1> Form Edit Data Pembayaran</h1>

<?php 
	
	$data = mysql_query("select * from pembayaran where id_pembayaran='$_GET[id]'");
	$arr= mysql_fetch_array($data);
?>
<form action="aksi_pembayaran.php?proses=update" method="post">
<div class="form-group" >
		<label>Id Pembayaran</label>
		<input class="form-control" value="<?php echo $arr['id_pembayaran'];?>" name="id_pembayaran" >
	</div>
	<div class="form-group">
		<label>Nis</label>
		<select name="nis" class="form-control">
			<?php
				include('koneksi.php');
				$nmsiswa=mysql_query("Select * from siswa");
				while ($data=mysql_fetch_array($nmsiswa)){
				
				echo "<option value=$data[nis]>$data[nama]</option> ";
				}
			?>
		</select>
	</div>

<div class="form-group">
		<label>Jumlah SPP</label>
		<input class="form-control" value ="<?php echo $arr['jumlah_spp'];?>" name="jumlah_spp">
	</div>
			
<div class="form-group">
		<label> Tanggal Pembayaran</label>
		<input type="date"value ="<?php echo $arr['tgl_pembayaran'];?>" class="form-control" name="tgl_pembayaran">
	</div>
<div class="form-group">
		<label>Keterangan</label>
		<input class="form-control" value ="<?php echo $arr['keterangan'];?>" name="keterangan">
	</tr>
<div class="form-group">
		<label></label>
		<td><input type="submit" class="btn btn-primary" name="submit" value="Simpan"></td>
	</tr>
</table>
</form>
<?php
break;
}
?>
