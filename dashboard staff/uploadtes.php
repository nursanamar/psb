<?php
	include 'cone.php';

	if (isset($_FILES['file'])) {
		include 'excel_reader2.php';
		$data = new Spreadsheet_Excel_Reader($_FILES['file']['tmp_name']);
		$baris = $data->rowcount($sheet_index=0);
		$sukses=0;
		$gagal=0;
		$r=2;
		for ($i=1; $i < $baris ; $i++) {
			$id_csba=$data->val($r,1);
			$nilai=$data->val($r,2);
			$qu="UPDATE `psb`.`tes` SET `tulis`='$nilai' WHERE `id_csba`='$id_csba'";
			$masuk=mysqli_query($sambung,$qu) or die(mysqli_error($sambung));
			if ($masuk) {
				$sukses++;
			} else {
				$gagal++;
			}
			$r++;

		}
		echo "<script type='text/javascript'>window.location='tes.php?t=$baris&s=$sukses&g=$gagal'</script>";
	}else{
		echo "<script type='text/javascript'>window.location='datalulus.php'</script>";
	}


 ?>
