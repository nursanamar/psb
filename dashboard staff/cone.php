<?php
	$host= "mysql.idhostinger.com";
	$user="u443265179_root";
	$pass="root123";
	$dbase="u443265179_psb";
	$sambung=mysqli_connect($host,$user,$pass);
	if ($sambung) {
		mysqli_select_db($sambung,'u443265179_psb');
	} else {
		echo mysqli_error();
	}

 ?>
