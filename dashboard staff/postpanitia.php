<?php 
	include 'cone.php';
	session_start();
    if (empty($_SESSION['id'])) {
        echo "<script type='text/javascript'>window.location='http://nursanamar.esy.es/'</script>";
    }
    $id_panitia=$_POST['id_panitia'];
    $nama=$_POST['nama'];
    $nisn=$_POST['nisn'];
    $pass=$_POST['pass'];
    $type=$_POST['type'];
    $caraq="";
    switch ($type) {
    	case 'baru':
    		$caraq="INSERT INTO panitia VALUES('$id_panitia','$nama','$nisn','$pass')";
    		break;
    	case 'lama':
    		$caraq="UPDATE panitia SET nama='$nama',nisn='$nisn',pass='$pass' WHERE id_panitia='$id_panitia'";
    		break;
    	default:
    		# code...
    		break;
    }
    $jlnkan=mysqli_query($sambung,$caraq)or die(mysqli_error($sambung));
    if ($jlnkan) {
    	echo "<script type='text/javascript'>
			alert('berhasil');
			</script>";
		echo "<script type='text/javascript'>
			window.location='datapanitia.php';
			</script>";
    }else{
    	echo "<script type='text/javascript'>
			alert('gagal');
			window.location='datapanitia.php';
			</script>";
    }
 ?>
