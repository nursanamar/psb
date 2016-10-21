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
                            <?php foreach ($itu->result() as $data) {
                                # code...
                            } ?>
                            <div class="container">
                                <h2><?php echo "$data->judul"; ?></h2>
                                <span><?php echo "$data->tgl"; ?></span>
                                <div>
                                    <?php echo "$data->isi"; ?>
                                </div>
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