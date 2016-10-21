<?php 
	if (isset($wacara)) {
		print_r($wacara->result_array());
		echo "terset";
		print_r($coba3->result_array());
		$a=$wacara->result_array();
		if (($a)) {
			echo "empty";
		}
	} else {
		print_r($coba->result());
		print_r($coba2['wawancara']);
		print_r($nilai);
		foreach ($coba->result() as $key) {
		print_r($key->wawancara);
		}
		echo "tidak ter set";
	}
	
	

 ?>