<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>
<?php 
	$hlmn='data';
 ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>panita</title>
	<link rel="stylesheet" type="text/css" href="http://localhost/psb/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="http://localhost/psb/css/sidebar.css">
	<link rel="stylesheet" type="text/css" href="http://localhost/psb/css/dashboard.css">
	<script type="text/javascript">
		function togel() {
        	var x=document.getElementById("wrapper");
        document.getElementById("wrapper").classList.toggle("toggled");
    };
    </script>
</head>
<body>
	<?php include 'header.php'; ?>
	<div id="wrapper" class="togled">
    	<div class="container-fluid">
    		<?php include 'sidebar.php'; ?>
    		<div id="page-content-wrapper">
    			<div class="container-fluid">
    				<div class="row kotak">
    					<div class="col-lg-12 col-sm-12">
    						<form class="from-horizontal" action="<?php echo base_url()."index.php/da/cari"; ?>" method="post">
    							<div class="from-group">
    								<div class="col-sm-2 col-md-2" >
    									<label for="va">Cari</label>
    								</div>
    								<div class="col-sm-2 col-md-2">
    									<input type="taxt" name="va" class="form-control">
    								</div>
    							</div>
    							<div class="form-group">
    								<div class="col-sm-2 col-md-2">
    									<label for="kti">Berdasarkan</label>
    								</div>
    								<div class="col-sm-2 col-md-2">
    									<select name="kti" class="form-control">
    										<option value="csba.id_csba">id_csba</option>
    										<option value="csba.nama">nama</option>
    									</select>
    								</div>
    							</div>
    							<div class="from-group">
    								<input type="submit" name="submit" class="btn btn-primary">
                                    <a href="<?php echo base_url()."index.php/da"; ?>"><span class="btn btn-primary">Reset</span></a>
    							</div>
    							
    						</form>
                            <div class="table-responsive">
                               <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>nama</td>
                                        <td>jenis kelamin</td>
                                        <td>asal sekolah</td>
                                        <td>ayah</td>
                                        <td>wali</td>
                                        <td>jurusan</td>
                                        <td>tgl regist</td>
                                        <td>status</td>
                                       
                                        <td>Aksi</td>
                                    </tr>
                                </thead>
                                <?php
                                    $i=""; 
                                    foreach ($siswa->result() as $csba) {
                                        $i=$i + 1;
                                ?>
                                    <tr>
                                        <td><?php echo "$i"; ?></td>
                                        <td><?php echo "$csba->id_csba"; ?></td>
                                        <td><?php echo "$csba->nama"; ?></td>
                                        <td><?php echo "$csba->klmin"; ?></td>
                                        <td><?php echo "$csba->sekolah_asal"; ?></td>
                                        <td><?php echo "$csba->ayah"; ?></td>
                                        <td><?php echo "$csba->nama_wali"; ?></td>
                                        <td><?php echo "$csba->pertama"; ?></td>
                                        <td><?php echo "$csba->tgl_regist"; ?></td>
                                        <td><?php echo "$csba->status"; ?></td>
                                        
                                        <td><a href="<?php echo base_url()."index.php/da/lihat/$csba->id_csba"; ?>" target=_blank>lihat</a></td>
                                    </tr>

                                <?php
                                    
                                    }
                                 ?>
                            </table> 
                            </div>
    						
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>
    </div>
    <script src="../js/vendor/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/docs.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>
</body>
</html>