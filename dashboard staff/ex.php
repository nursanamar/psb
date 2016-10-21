<?php
$cek=$_GET['data'];
// Fungsi header dengan mengirimkan raw data excel
header("Content-type: application/vnd-ms-excel");
 
// Mendefinisikan nama file ekspor "hasil-export.xls"
header("Content-Disposition: attachment; filename=data.xls");
 
// Tambahkan table
switch ($cek) {
	case 'semua':
		# code...
		break;
	case 'datalulus':
		include 'datalulus.php';
		break;
	case 'data':
		include 'data.php';
		break;
	default:
		# code...
		break;
}
?>