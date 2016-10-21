<?php 
	include 'cone.php';
	$pesan ="<div class='form-group'><div class='alert alert-danger'><span>ID atau password salah!</span></div></div>";
	$id="";
	if (isset($_GET['id'])) {
		$id=$_GET['id'];
	}
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 	<title>Login</title>
 	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
 	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
 	<link rel="stylesheet" type="text/css" href="css/login.css">
 </head>
 <body>
 	<div class="wraper">
 		<div class="container">
 			<div class="col-sm-4 col-md-4 col-md-offset-">
 				
 			</div>
 			<form class="form-signin" action="logpost.php" method="POST">
 				<h2 class="form-signin-heading">Login</h2>
 				<label for="id" class="sr-only">ID</label>
 				<input type="text" name="id" class="form-control" value="<?php echo "$id"; ?>" required autofocus>
 				<label for="pass" class="sr-only">Password</label>
 				<input type="password" name="pass" class="form-control" required>
 				<?php 
 					if (isset($_GET['res'])) {
 						echo "$pesan";
 					}
 				 ?>
 				<button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
 			</form>
 		</div>
 	</div>
 	<?php include 'script.php'; ?>
 </body>
 </html>