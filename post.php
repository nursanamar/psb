<?php
	include 'cone.php';
	include 'randpass.php';

	$nama = $_POST['nama'];
	$nisn = $_POST['nisn'];
	$ttlhr = $_POST['ttlhr'];
	$tgl = date('Y-m-d',strtotime($_POST['tgl']));
	$klmin = $_POST['kelamin'];
	$agama = $_POST['Agama'];
	$wn = $_POST['wn'];
	$alamat =$_POST['alamat'];
	$aslsklh=$_POST['aslsklh'];
	$almasklh=$_POST['almasklh'];
	$ijazah=$_POST['ijazah'];
	$un = $_POST['un'];
	$us = $_POST['us'];
	$ayah=$_POST['ayah'];
	$tgl_ayah=date('Y-m-d',strtotime($_POST['tgl_ayah']));
	$job_ayah= $_POST['pekerjaan_ayah'];
	$alamat_ayah=$_POST['alamat_ayah'];
	$pndkn_ayah=$_POST['pndkn_ayah'];
	$ibu=$_POST['ibu'];
	$tgl_ibu=date('Y-m-d',strtotime($_POST['tgl_ibu']));
	$job_ibu= $_POST['pekerjaan_ibu'];
	$alamat_ibu=$_POST['alamat_ibu'];
	$pndkn_ibu=$_POST['pndkn_ibu'];
	$wali=$_POST['wali'];
    $tgl_wali=date('Y-m-d',strtotime($_POST['tgl_wali']));
		$job_wali= $_POST['pekerjaan_wali'];
    $alamat_wali=$_POST['alamat_wali'];
    $pndkn_wali=$_POST['pndkn_wali'];
    $jurusan1=$_POST['jurusan1'];
    $jurusan2=$_POST['jurusan2'];
	$id_csba="";
	if (empty($nama) || empty($ttlhr) || empty($tgl) || empty($klmin) || empty($wn) || empty($alamat) || empty($aslsklh) || empty($almasklh)) {
		echo "<script type='text/javascript'>window.location='daftar.php?res=1&nama=$nama&ttlhr=$ttlhr#err'</script>";
	} else {
		if (ceknisn($sambung,$nisn)) {
			header('location: invalidnisn.php');
		}
		$qu=mysqli_query($sambung,"SELECT id_csba FROM `csba` ORDER BY id_csba DESC");
		if ($qu) {
			$data=mysqli_fetch_array($qu);
			$idtmp=$data['id_csba'];
			$pisah=(int)substr($idtmp, 3,4);
			$pisah++;
			$id="CSB".sprintf("%04s",$pisah);
			$id_csba=$id;
		} else {
			$id_csba="CSB0001";
		}
		$pasran=generatePassword();
		$jrsn=mysqli_query($sambung,"INSERT INTO `pilihan_jurusan`(`id_csba`, `pertama`, `kedua`) VALUES('$id_csba','$jurusan1','$jurusan2')") or die(mysqli_error($sambung));
		$walis=mysqli_query($sambung,"INSERT INTO `wali`(`id_csba`, `nama_wali`, `tgl`,`pekerjaan`, `alamat`, `pendidikan`) VALUES('$id_csba','$wali','$tgl_wali','$job_wali','$alamat_wali','$pndkn_wali')") or die(mysqli_error($sambung));
		$ortu=mysqli_query($sambung,"INSERT INTO `orang_tua`(`id_csba` ,`ayah` ,`ibu` ,`tgl_ayah` ,`tgl_ibu`,`pekerjaan_ayah`,`pekerjaan_ibu`,`alamat_ayah` ,`alamat_ibu` ,`pendidikan_ayah` ,`pendidikan_ibu`) VALUES('$id_csba','$ayah','$ibu','$tgl_ayah','$tgl_ibu','$job_ayah','$job_ibu','$alamat_ayah','$alamat_ibu','$pndkn_ayah','$pndkn_ibu')") or die(mysqli_error($sambung));
		$ins=mysqli_query($sambung,"INSERT INTO csba (`id_csba`,`nama`,`nisn`,`tt_lahir`,`tgl_lahir`,`klmin`,`agama`,`warganegara`,`alamat`,`sekolah_asal`,`alamat_sklhasl`,`ijazah`,`un`,`us`,`pass`,`tgl_regist`) VALUES('$id_csba','$nama','$nisn','$ttlhr','$tgl','$klmin','$agama','$wn','$alamat','$aslsklh','$almasklh','$ijazah','$un','$us','$pasran',CURDATE())");
		if ($ins && $walis && $ins && $jrsn) {
			echo "<script type='text/javascript'>window.location='info.php?id=$id_csba&pass=$pasran'</script>";
		} else {
			echo "gagal";
			echo mysqli_error($sambung);
		}

	};

 ?>
