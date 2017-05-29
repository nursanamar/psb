<?php
	include 'cone.php';
	session_start();
    if (empty($_SESSION['id'])) {
			echo "<script type='text/javascript'>window.location='".DOMAIN."'</script>";
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
 			<td>Jurusan</td>
      <td>Kesehatan</td>
      <td>Wawancara</td>
			<td>Mengaji</td>
 			<td>Tulis</td>
 		</thead>
 		<?php
	$query="SELECT * FROM csba INNER JOIN (pilihan_jurusan INNER JOIN tes ON pilihan_jurusan.id_csba=tes.id_csba) ON csba.id_csba=tes.id_csba";
	$jln=mysqli_query($sambung,$query);
	while ($data=mysqli_fetch_array($jln)) {
    $poli=unserialize($data['kesehatan']);
		echo "<tr>
			<td>$data[id_csba]</td>
			<td>$data[nama]</td>
			<td>$data[pertama]</td>
			<td>berat : $poli[berat] kg<br>
          tinggi : $poli[tinggi] cm <br>
          tensi : $poli[tensi] Mmhg <br>
          rabun : $poli[rabun]<br>
          buta warna : $poli[buta] <br>
          riwayat merokok : $poli[merokok]<br>
          riwayat penyakit : $poli[penyakit]
      </td>
			<td>$data[wawancara]</td>
			<td>$data[mengaji]</td>
			<td>$data[tulis]</td>
		</tr>";
	}
 ?>
 	</table>
 </html>
