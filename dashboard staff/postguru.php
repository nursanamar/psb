<?php 
	include 'cone.php';
	session_start();
    if (empty($_SESSION['id'])) {
        echo "<script type='text/javascript'>window.location='http://localhost/psb'</script>";
    }
    $id_guru=$_POST['id_guru'];
    $nama=$_POST['nama'];
    $nip=$_POST['nip'];
    $jurusan=$_POST['jurusan'];
    $pass=$_POST['pass'];
    $type=$_POST['type'];
    $caraq="";
    switch ($type) {
    	case 'baru':
    		$caraq="INSERT INTO guru VALUES('$id_guru','$nama','$nip','$jurusan','$pass')";
    		break;
    	case 'lama':
    		$caraq="UPDATE guru SET nama='$nama',nip='$nip',tes='$jurusan',pass='$pass' WHERE id_guru='$id_guru'";
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
			window.location='dataguru.php';
			</script>";
    }else{
    	echo "<script type='text/javascript'>
			alert('gagal');
			window.location='dataguru.php';
			</script>";
    }
 ?>