<?php 
	include 'cone.php';
mysql_select_db('psb',$query) or die(mysql_error());;
 ?>
 <?php 
	if (isset($_GET['id'])) {
		$hps=mysql_query("DELETE FROM csba WHERE id_csba='$_GET[id]'")or die(mysql_error());
		if ($hps) {
			echo "<script type='text/javascript'>
			alert('Terhapus');
			window.location('index.php')
			</script>";
		} else {
			# code...
		}
		
	}
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 	<title></title>
 	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
 	<style type="text/css">
 		td,th{
 			display: table-cell;
 		}
 	</style>
 </head>
 <body>
 	
 <?php 
 	if (isset($_GET['tmbl'])) {
 		$ket=mysql_escape_string($_GET['ket']);
 		$kit=mysql_escape_string($_GET['kti']);
 		$q="SELECT id_csba,nama FROM csba WHERE $kit='$ket'";
 	}else{
 		$q="SELECT * FROM csba ORDER BY id_csba DESC";
 	}if (isset($_GET['rst'])) {
 		$q="SELECT * FROM csba ORDER BY id_csba DESC";
 	}
 	$abl=mysql_query($q) or die(mysql_error());
  ?>
	<form action="" method="GET">
 		<input type="text" name="ket">
 		<select name="kti">
 			<option vlaue="nama">nama</option>
 			<option vlaue="id_csba">id_csba</option>
 		</select>
 		<input type="submit" name="tmbl">
 		<input type="submit" name="rst" value="reset">
 	</form>
	<div class="col-sm-8 col-md-8 table-responsive">
		
		<table class="table table-bordered">
			<thead>
				<tr>
					<td>#</td>
					<td>Id</td>
					<td>nama</td>
					<td>Aksi</td>
				</tr>
			</thead>
			<?php 
				if ($abl) {
						$no="";
						while ($data=mysql_fetch_array($abl)or die(mysql_error())) {
							$no=$no + 1;
							echo "	<tr>
							<td>$no</td>
							<td>$data[id_csba]</td>
							<td>$data[nama]</td>
							<td><a href='coba.php?id=$data[id_csba]' onclick='return confirmLink('yaking ')'>hapus</a><a href='coba.php?id=$data[id_csba]'>hapus</a><a href='coba.php?id=$data[id_csba]'>hapus</a></td>
							
							</tr>";
			
						}
					} else {
						echo "<h1 style='text-align:center'>Tidak ada hasil</h1>";
					}		
			?>
		</table>
	</div>
 </body>
 </html>
 
