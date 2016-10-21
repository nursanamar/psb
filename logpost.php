<?php 
	include 'cone.php';
	$id=$_POST['id'];
	$pass=$_POST['pass'];
	$cek=substr($id, 0,3);
	$query="";
	$link="";
	switch ($cek) {
		case 'CSB':
			$query="SELECT * FROM `csba` Where id_csba='$id' && pass='$pass'";
			$link="csba/";
			break;
		case 'STF':
			$query="SELECT * FROM `staff` Where id_staff='$id' && pass='$pass'";
			$link="dashboard staff/";
			break;
		case 'PNT':
			$query="SELECT * FROM `panitia` Where id_panitia='$id' && pass='$pass'";
			$link="panitia/";
			break;
		case 'GRU':
			$query="SELECT * FROM `guru` Where id_guru='$id' && pass='$pass'";
			$link="tes/";
			break;
		default:
			# code...
			break;
	}
		$ver=mysqli_query($sambung,$query);
	if ($ver) {
		$cok=mysqli_fetch_array($ver);
		if ($cok) {
		session_start();
		switch ($cek) {
			case 'CSB':
				$_SESSION['id_csb']=$id;
				break;
			case 'STF':
				$_SESSION['id']=$id;
				break;
			case 'PNT':
				$_SESSION['id_pnt']=$id;
				break;
			case 'GRU':
				$_SESSION['id_guru']=$id;
				break;
			default:
				# code...
				break;
		}
		
		echo "<script type='text/javascript'>window.location='$link'</script>";
		} else {
		echo "<script type='text/javascript'>window.location='login.php?res=1&id=$id'</script>";
		}
	}else{
		echo "<script type='text/javascript'>window.location='login.php?res=1&id=$id'</script>";
	}
	
 ?>