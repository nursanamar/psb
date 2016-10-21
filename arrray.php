<?php 
	include 'cone.php';
	$data = array('berat' =>'10kg' ,'tinggi'=>'160cm', );
	echo "$data[berat]<br>";
	$serial=serialize($data);
	echo "$serial"."<br>";
	$unserial=unserialize($serial);
	echo "$unserial"."<br>";
	echo "$unserial[berat]";

 ?>