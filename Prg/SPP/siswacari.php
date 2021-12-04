<div class="row">
    <div class="col-lg-4">
        <div class="panel panel-primary">
            <div class="panel-heading">
                Laporan Perbulan
            </div>
            <div class="panel-body">
              
                    <fieldset>
                        <form action = "laporan/report_siswa.php" method="POST">
                             <div class="form-group">
                  <label for="exampleInputEmail1">Bulan</label>
                  <select name="bulan" class="form-control">
                      <option value="01">Januari</option>
                      <option value="02">Februari</option>
                      <option value="03">Maret</option>
                      <option value="04">April</option>
                      <option value="05">Mei</option>
                      <option value="06">Juni</option>
                      <option value="07">Juli</option>
                      <option value="08">Agustus</option>
                      <option value="09">September</option>
                      <option value="10">Oktober</option>
                      <option value="11">November</option>
                      <option value="12">Desember</option>
                      
                      
                  </select>
                        </div>
                           
		</select></label>
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
	$("#bulan").chained("#bulan");
</script>
</div>