<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>
<?php 
	$hlmn='notiflist';
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
                                <table class="table table-bordered">
                                  <thead>
                                    <tr>
                                        <td>#</td>
                                        <td>Judul</td>
                                        <td>Tanggal</td>
                                        <td>Untuk</td>
                                        <td>aksi</td>
                                    </tr> 
                                  </thead>
                                  <?php
                                    $i="";
                                    foreach ($siswa->result() as $data) {
                                        $i=$i + 1;
                                    ?>
                                    <tr>
                                        <td><?php echo "$i"; ?></td>
                                        <td><?php echo "$data->judul"; ?></td>
                                        <td><?php echo "$data->tgl"; ?></td>
                                        <td><?php echo "$data->untuk"; ?></td>
                                        <td><a href="<?php echo base_url()."index.php/da/lihatnotif/$data->id_notif"; ?>">Lihat</a></td>
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
    <script src="../js/vendor/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/docs.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>
</body>
</html>