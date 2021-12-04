<div class="row">
    <div class="col-lg-4">
        <div class="panel panel-primary">
            <div class="panel-heading">
                Cari Siswa Berdasarkan Nis
            </div>
            <div class="panel-body">
                
                    <fieldset>
                        <form  action="laporan/report_nis.php"  method="POST">
                            <div class="form-group">
                              <label>NIS</label>
		
								<select id="nis" name="nis" class="form-control">
									<option value="">Please Select</option>
									<?php
										include('koneksi.php');
										$nis=mysql_query("Select * From pembayaran order by nis");
										while ($data=mysql_fetch_array($nis)){
										
										echo "<option value=$data[nis]>$data[nis]</option>";
										}
									?>
									</select>
                            </div>
                           
                            </div>
                            <div class="form-group">
                                <label>  </label>
                                <label>  </label>
                                <label><input type="Submit" name="cetak" value="CETAK" class ="btn btn-primary"></label>
                            </div>
                        </form>
                    </fieldset>
            </div>
        </div>
    </div>
	<script src="jquery-1.10.2.min.js"></script>
<script src="jquery.chained.min.js"></script>
<script>
	$("#prodi").chained("#jur");
</script>
</div>