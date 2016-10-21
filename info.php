<?php 
	if (empty($_GET['id']) && empty($_GET['pass'])) {
		echo "<script type='text/javascript'>window.location='daftar.php'</script>";
	}
	
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>informasi</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/psb.css">
	<link rel="stylesheet" type="text/css" href="css/info.css">
</head>
<body>
<?php 
	include 'header.php';
 ?>
 	<div class="row c">
 		<div class="container ca">
 			<h2>Terima kasih<br>telah melakukan Pendaftaran</h2>
 			<h3>id anda: <?php echo "$_GET[id]"; ?></h3>
 			<h3>Password: <?php echo "$_GET[pass]"; ?></h3>
 			<div class="col-sm-8 col-md-8">
 				<div class="well">
 					<h3>Berkas yang harus di lengkapi</h3>
 					<ul>
 						<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</li>
 						<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</li>
 						<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</li>
 						<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</li>
 						<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</li>
 						<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</li>
 						<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</li>
 					</ul>
 				</div>
 			</div>
 		</div>
 	</div>
 	<?php 
 		include 'script.php';
 	 ?>
</body>
</html>