<?php
	session_start();
	if (empty($_SESSION['id'])) {
        echo "<script type='text/javascript'>window.location='http://localhost/psb'</script>";
    }
	include 'cone.php';
	$judul=$_POST['judul'];
	$isi=$_POST['isi'];
	$untuk=$_POST['untuk'];
	$id_staff=$_SESSION['id'];
	$id_notif="";
	$qu=mysqli_query($sambung,"SELECT id_notif FROM `notif` ORDER BY id_notif DESC");
		if ($qu) {
			$data=mysqli_fetch_array($qu);
			$idtmp=$data['id_notif'];
			$pisah=(int)substr($idtmp, 3,4);
			$pisah++;
			$id="NTF".sprintf("%04s",$pisah);
			$id_notif=$id;
		} else {
			$id_notif="NTF0001";
		}
	$ins=mysqli_query($sambung,"INSERT INTO notif(`id_notif`,`id_staff`,`judul`,`isi`,`untuk`,`tgl`) VALUES('$id_notif','$id_staff','$judul','$isi','$untuk',CURDATE())");
	if ($ins) {
		echo "<script type='text/javascript'>
		alert('Pengumuman tertempel');
		window.location='index.php';</script>";
	}else{
		echo "<h1>Oops</h1>";
	}

 ?>