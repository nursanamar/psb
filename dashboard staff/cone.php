<?php
	$host= "localhost";
	$user="root";
	$pass="";
	$dbase="psb";
	$sambung=mysqli_connect($host,$user,$pass);
	if ($sambung) {
		mysqli_select_db($sambung,'psb');
	} else {
		echo mysqli_error();
	}
	define('DOMAIN',((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') ? "https":"http")."://".$_SERVER['HTTP_HOST'].'/psb/');

 ?>
