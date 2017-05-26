<?php
	include 'cone.php';
session_start();
    if (empty($_SESSION['id'])) {
        echo "<script type='text/javascript'>window.location='http://localhost/psb'</script>";
    }
    $id=$_SESSION['id'];
    $hlmn="data";
 ?>
 <?php
	if (isset($_GET['id'])) {
		$hps=mysqli_query($sambung,"DELETE FROM csba WHERE id_csba='$_GET[id]'")or die(mysql_error());
		$ortu=mysqli_query($sambung,"DELETE FROM orang_tua WHERE id_csba='$_GET[id]'")or die(mysql_error());
		$wali=mysqli_query($sambung,"DELETE FROM pilihan_jurusan WHERE id_csba='$_GET[id]'")or die(mysql_error());
		$jur=mysqli_query($sambung,"DELETE FROM wali WHERE id_csba='$_GET[id]'")or die(mysql_error());
		if ($hps) {
			echo "<script type='text/javascript'>
			alert('Terhapus');
			window.location('index.php')
			</script>";
		} else {
			# code...
		}

	}
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Dashboard</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../css/sidebar.css">
	<link rel="stylesheet" type="text/css" href="../css/dashboard.css">
	<link rel="stylesheet" type="text/css" href="../css/stat.css">
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
    					<div class="col-lg-12">
    						<?php
 								if (isset($_GET['tmbl'])) {
 									$ket=mysql_escape_string($_GET['ket']);
 									$kit=mysql_escape_string($_GET['kti']);
 									$q="SELECT * FROM csba INNER JOIN (orang_tua INNER JOIN (wali INNER JOIN Pilihan_jurusan ON wali.id_csba=pilihan_jurusan.id_csba) ON wali.id_csba=orang_tua.id_csba) ON csba.id_csba=orang_tua.id_csba WHERE csba.$kit='$ket'";
							 	}else{
 									$q="SELECT * FROM csba INNER JOIN (orang_tua INNER JOIN (wali INNER JOIN Pilihan_jurusan ON wali.id_csba=pilihan_jurusan.id_csba) ON wali.id_csba=orang_tua.id_csba) ON csba.id_csba=orang_tua.id_csba ORDER BY csba.id_csba DESC";
 								}if (isset($_GET['rst'])) {
 									$q="SELECT * FROM csba INNER JOIN (orang_tua INNER JOIN (wali INNER JOIN Pilihan_jurusan ON wali.id_csba=pilihan_jurusan.id_csba) ON wali.id_csba=orang_tua.id_csba) ON csba.id_csba=orang_tua.id_csba ORDER BY csba.id_csba DESC";
 								}
 								$abl=mysqli_query($sambung,$q) or die(mysqli_error($sambung));
  							?>
							<form action="" method="GET" class="cari">
								<div class="form-group">
									<div class="col-md-2">
										<label for="ket">cari</label>
									</div>
									<div class="col-md-3">
										<input type="text" name="ket" class="form-control">
									</div>
								</div>
								<div class="form-group">
									<div class="col-md-2">
										<label for="kti">Berdasarkan</label>
									</div>
									<div class="col-md-3">
										<select name="kti" class="form-control">
 											<option value="id_csba">id_csba</option>
 											<option value="nama">nama</option>
 										</select>
									</div>
								</div>
 								<input type="submit" name="tmbl" class="btn btn-primary">
 								<input type="submit" name="rst" value="reset" class="btn btn-primary">
 							</form>
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
										<td>Aksi</td>
									</tr>
								</thead>
							<?php
								if ($abl) {
									$no="";
									while ($data=mysqli_fetch_array($abl)or die(mysqli_error($sambung))) {
										$no=$no + 1;
										echo "	<tr>
											<td>$no</td>
											<td>$data[id_csba]</td>
											<td>$data[nama]</td>
											<td>$data[klmin]</td>
											<td>$data[sekolah_asal]</td>
											<td>$data[ayah]</td>
											<td>$data[nama_wali]</td>
											<td>$data[pertama]</td>
											<td>$data[tgl_regist]</td>
											<td><a href='index.php?id=$data[id_csba]' onclick='return confirmLink('yaking ')'>hapus</a><a href='index.php?id=$data[id_csba]'> hapus </a><a href='lihat.php?id=$data[id_csba]'>Lihat</a></td>

											</tr>";

									}
								} else {
									echo "<h1 style='text-align:center'>Tidak ada hasil</h1>";
								}
							?>
							</table>
    					</div>
    				</div>
    				<div class="row kotak">
    					<div class="col-sm-12 col-md-12">
    						<form>
    							<input type="text" name="id" disabled>
    							<input type="text" name="nama">
    							<input type="text" name="nisn">
    							<input type="text" name="pass">
    							<input type="submit" name="submit" class="btn btn-lg btn-primary">
    						</form>
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
