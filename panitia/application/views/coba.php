<!DOCTYPE html>
<html>
<head>
	<title>
		fsdf
	</title>
</head>
<body>
<table>
	<?php 
		foreach ($siswa->result() as $data) {
	?>
		<tr>
			<td><?php echo "$data->id_csba";?></td>
		</tr>
	<?php
		}
	 ?>
</table>
</body>
</html>