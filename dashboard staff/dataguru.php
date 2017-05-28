<?php
	include 'cone.php';
session_start();
    if (empty($_SESSION['id'])) {
        echo "<script type='text/javascript'>window.location='http://localhost/psb'</script>";
    }
    $id=$_SESSION['id'];
    $hlmn="guru";
    $id_guru="";
    $nama="";
    $nip="";
    $jurusan="";
    $pass="";
    $type="baru";
    $qu=mysqli_query($sambung,"SELECT id_guru FROM `guru` ORDER BY id_guru DESC");
			if ($qu) {
				$data=mysqli_fetch_array($qu);
				$idtmp=$data['id_guru'];
				$pisah=(int)substr($idtmp, 3,4);
				$pisah++;
				$id="GRU".sprintf("%04s",$pisah);
				$id_guru=$id;
			} else {
				$id_guru="GRU0001";
			}
			$now= (isset($_GET['page'])) ? $_GET['page']: 1;
			$pre= ($now > 1) ? $now - 1 : 1;
			$next=$now + 1;
 ?>

 <?php
	if (isset($_GET['id'])) {
		$hps=mysqli_query($sambung,"DELETE FROM guru WHERE id_guru='$_GET[id]'")or die(mysqli_error($sambung));
		if ($hps) {
			echo "<script type='text/javascript'>
			alert('Terhapus');
			</script>";
			echo "<script type='text/javascript'>window.location='dataguru.php'</script>";
		} else {

		}

	}
	if (isset($_GET['edit'])) {
	$id_guru=$_GET['id_guru'];
    $nama=$_GET['nama'];
    $nip=$_GET['nip'];
    $pass=$_GET['pass'];
    $jurusan=$_GET['jurusan'];
    $type="lama";
	}else{

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
    					<div class="col-sm-12 col-md-12">
    						<form action="postguru.php" method="post" class="form-horizontal">
    							<input type="hidden" name="type" value="<?php echo "$type"; ?>">
    							<input type="hidden" name="id_guru" value="<?php echo "$id_guru"; ?>" >
    							<div class="form-group">
    								<div class="col-sm-2 col-md-2">
    									<label for="nama">Nama</label>
    								</div>
    								<div class="col-sm-2 col-md-2">
    									<input type="text" name="nama" value="<?php echo "$nama"; ?>">
    								</div>
    							</div>
    							<div class="form-group">
    								<div class="col-sm-2 col-md-2">
    									<label for="nisn">NIP/NISN</label>
    								</div>
    								<div class="col-sm-2 col-md-2">
    									<input type="text" name="nip" value="<?php echo "$nip"; ?>">
    								</div>
    							</div>
    							<div class="form-group">
    								<div class="col-sm-2 col-md-2">
    									<label for="pass">Password</label>
    								</div>
    								<div class="col-sm-2 col-md-2">
    									<input type="text" name="pass" value="<?php echo "$pass"; ?>">
    								</div>
    							</div>
    							<div class="form-group">
    								<div class="col-sm-2 col-md-2">
    									<label for="jurusan">TES</label>
    								</div>
    								<div class="col-sm-2 col-md-2">
    									<select type="text" name="jurusan">
    									<?php
                                            switch ($jurusan) {
                                                case 'kesehatan':
                                                    echo " <option value='kesehatan' selected>Kesehatan</option>";
                                                    break;
                                                case 'wawancara':
                                                    echo "<option value='wawancara' selected>Wawancara</option>";
                                                    break;
                                                case 'mengaji':
                                                    echo "<option value='mengaji' selected>Mengaji</option>";
                                                    break;
                                                default:
                                                    # code...
                                                    break;
                                            }
                                         ?>
				                            <option value="kesehatan">Kesehatan</option>
				                            <option value="wawancara">Wawancara</option>
				                            <option value="mengaji">Mengaji</option>
                        				</select>
    								</div>
    							</div>
    							<input type="submit" name="submit" class="btn btn-lg btn-primary">
    						</form>
    					</div>
    				</div>
    				<div class="row kotak">
    					<div class="col-lg-12">
    						<?php
 								if (isset($_GET['tmbl'])) {
 									$ket=mysql_escape_string($_GET['ket']);
 									$kit=mysql_escape_string($_GET['kti']);
 									$q="SELECT * FROM guru WHERE $kit='$ket'";
							 	}else{
 									$q="SELECT * FROM guru ORDER BY id_guru DESC";
 								}if (isset($_GET['rst'])) {
 									$q="SELECT * FROM guru ORDER BY id_guru DESC";
 								}if (isset($_GET['page'])) {
									$to = 3;
									$from = ($_GET['page'] - 1) * $to;
									$q="SELECT * FROM guru ORDER BY id_guru DESC LIMIT $from,$to";
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
 											<option value="id_guru">id_guru</option>
 											<option value="nama">nama</option>
 										</select>
									</div>
								</div>
 								<input type="submit" name="tmbl" class="btn btn-primary">
 								<input type="submit" name="rst" value="reset" class="btn btn-primary">
 							</form>
							<a href=<?php echo "dataguru.php?page=".$pre; ?> class="btn btn-default"><</a><span>  </span><a href=<?php echo "dataguru.php?page=".$next; ?> class="btn btn-default">></a>
							<table class="table table-bordered">
								<thead>
									<tr>
										<td>#</td>
										<td>Id</td>
										<td>Nama</td>
										<td>NIP/NISN</td>
										<td>Tes</td>
										<td>Pass</td>
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
											<td>$data[id_guru]</td>
											<td>$data[nama]</td>
											<td>$data[nip]</td>
											<td>$data[tes]</td>
											<td>$data[pass]</td>
											<td><a href='dataguru.php?id=$data[id_guru]'>hapus</a>||<a href='dataguru.php?edit=1&id_guru=$data[id_guru]&nama=$data[nama]&nip=$data[nip]&pass=$data[pass]&jurusan=$data[tes]'>Edit</a></td>
											</tr>";

									}
								}
							?>
							</table>
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
