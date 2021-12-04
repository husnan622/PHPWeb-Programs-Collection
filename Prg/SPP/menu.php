  <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="index.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        
                        <li>
                            <a href="?page=siswa"><i class="fa fa-child fa-fw"></i> Data Siswa</a>
                        </li>
				
						<?php
		if($_SESSION['status']=='Bendahara'){
		?>
						<li>
                            <a href="?page=pembayaran"><i class="fa  fa-book fa-fw"></i> Pembayaran</a>
                        </li>
							<?php } ?>
						
		
						<li>
						
                            <a href="laporan/report_pembayaran.php"><i class="fa fa-edit fa-fw"></i>Cetak Laporan Pembayaran</a>
                        </li>
					
		<?php
		if($_SESSION['status']=='Bendahara'){
		?>
						<li>
                            <a href="?page=niscari"><i class="fa fa-edit fa-fw"></i>Cetak Laporan Pembayaran Per-Siswa</a>
                        </li>
						<?php } ?>
							<?php
		if($_SESSION['status']=='Bendahara'){
		?>
						<li>
                            <a href="?page=siswacari"><i class="fa  fa-book fa-fw"></i>Tagihan SPP</a>
                        </li>
						<?php } ?>
                        </li>
                           </ul>
                            <!-- /.nav-second-level -->
                        </li>
                            <a href="logout.php"><i class="fa fa-edit fa-fw"></i>Logout</a>
                        </li>
						
                
                    </ul>
                </div>