<?php 
	include 'cone.php';
	session_start();
    if (empty($_SESSION['id'])) {
        echo "<script type='text/javascript'>window.location='http://localhost/psb'</script>";
    }
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 	<table border="1">
 		<thead>
 			<td>ID csba</td>
 			<td>Nama</td>
 			<td>Tempat lahir</td>
 			<td>Tanggal lahir</td>
 			<td>Kelamin</td>
 			<td>Agama</td>
 			<td>Warganegara</td>
 			<td>Alamat</td>
 			<td>Sekolah asal</td>
 			<td>Alamat sekolah asal</td>
 			<td>Ayah</td>
 			<td>Ibu</td>
 			<td>Tanggal lahir ayah</td>
 			<td>Tanggal lahir ibu</td>
 			<td>Alamat ayah</td>
 			<td>Alamat ibu</td>
 			<td>Pendidikan ayah</td>
 			<td>Pendidikan ibu</td>
 			<td>Jurusan</td>
 			<td>Wali</td>
 			<td>Tanggal lahir wali</td>
 			<td>alamat wali</td>
 			<td>pendidikan wali</td>
 		</thead>
 		<?php 
	$query="SELECT * FROM csba INNER JOIN (orang_tua INNER JOIN (wali INNER JOIN csbalulus ON wali.id_csba=csbalulus.id_csba) ON wali.id_csba=orang_tua.id_csba) ON csba.id_csba=orang_tua.id_csba";
	$jln=mysqli_query($sambung,$query);
	while ($data=mysqli_fetch_array($jln)) {
		echo "<tr>
			<td>$data[id_csba]</td>
			<td>$data[nama]</td>
			<td>$data[tt_lahir]</td>
			<td>$data[tgl_lahir]</td>
			<td>$data[klmin]</td>
			<td>$data[agama]</td>
			<td>$data[warganegara]</td>
			<td>$data[alamat]</td>
			<td>$data[sekolah_asal]</td>
			<td>$data[alamat_sklhasl]</td>
			<td>$data[ayah]</td>
			<td>$data[ibu]</td>
			<td>$data[tgl_ayah]</td>
			<td>$data[tgl_ibu]</td>
			<td>$data[alamat_ayah]</td>
			<td>$data[alamat_ibu]</td>
			<td>$data[pendidikan_ayah]</td>
			<td>$data[pendidikan_ibu]</td>
			<td>$data[jurusan]</td>
			<td>$data[nama_wali]</td>
			<td>$data[tgl]</td>
			<td>$data[alamat]</td>
			<td>$data[pendidikan]</td>
		</tr>";
	}
 ?>
 	</table>
 </html>
