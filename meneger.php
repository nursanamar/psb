<?php 
	include 'cone.php';
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Mneger psb</title>
	<style type="text/css">
		
	</style>
</head>
<body>
	<table border="1">
		<tr>
			<td>Id_csba</td>
			<td>Nama</td>
			<td>Asal sekolah</td>
			<td>pass</td>
		</tr>
		<?php
			mysql_select_db('psb',$query) or die(mysql_error());
			$ambil=mysql_query("SELECT * FROM csba");
			if ($ambil) {
				
			} else {
				die(mysql_error());
				echo mysql_error();
			}
			
			while ($data=mysql_fetch_array($ambil)) {
				echo "<tr>
					<td>$data[id_csba]</td>
					<td>$data[nama]</td>
					<td>$data[sekolah_asal]</td>
					<td>$data[pass]</td>
				</tr>";
			}
		 ?>
	</table>
	<p><a href="ex.php"><button>Export Data ke Excel</button></a></p>
</body>
</html>