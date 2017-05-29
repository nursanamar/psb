<?php
    include 'cone.php';
    session_start();
    if (empty($_SESSION['id'])) {
      echo "<script type='text/javascript'>window.location='".DOMAIN."'</script>";
    }
    $id=$_SESSION['id'];
    $hlmn="notif";
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
    <script src="../js/tinymce/tinymce.min.js"></script>
	<script type="text/javascript">
		function togel() {
        	var x=document.getElementById("wrapper");
        document.getElementById("wrapper").classList.toggle("toggled");
    };
    </script>
    <script type="text/javascript">
        tinymce.init({ selector:'textarea' });
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
                        <div class="col-md-8">
                           <form action="post.php" method="post">
                                <label for="judul">Judul pengumuman</label>
                                <input type="text" name="judul" class="form-control" placeholder="Judul" required>
                                <label for="isi">Isi</label>
                                <textarea name="isi"></textarea>
                                <label for="untuk">Untuk</label>
                                <select name="untuk" class="form-control">
                                    <option value="umun">Umun</option>
                                    <option value="csb">CSB</option>
                                    <option value="panitia">Panitia</option>
                                    <option value="staff">Staff</option>
                                </select>
                                <input type="submit" name="submit" value="submit" class="btn btn-large btn-primary">
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
