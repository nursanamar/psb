<?php 
	include 'cone.php';
 ?>
<canvas id="chart"></canvas>
<script src="../js/vendor/jquery.min.js"></script>
<script src="Chart.bundle.min.js"></script>
<script type="text/javascript">
	var ctx=document.getElementById('chart');
	var chart= new Chart(ctx,{
		type:'bar',
		data: {
			labels:['TKJ','TKR','TAV','TB','AP','AK','TN','NKPI'],
			datasets:[{
				label:'# of Votes',
				data:[<?php echo "'",hitungjrsn($sambung,'TKJ'),"','",hitungjrsn($sambung,'TKR'),"','",hitungjrsn($sambung,'TAV'),"','",hitungjrsn($sambung,'BB'),"','",hitungjrsn($sambung,'AP'),"','",hitungjrsn($sambung,'AK'),"','",hitungjrsn($sambung,'TN'),"','",hitungjrsn($sambung,'NKPI'),"',"; ?>],
				backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)'
                
            ],
            borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)'
            ],
            borderWidth: 1
			}]
		}
	}) 
</script>