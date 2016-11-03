<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>CSBA</title>
	<link rel="stylesheet" type="text/css" href="http://nursanamar.esy.es/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="http://nursanamar.esy.es/css/psb.css">
	<link rel="stylesheet" type="text/css" href="http://nursanamar.esy.es/css/csba.css">
	<script src="http://nursanamar.esy.es/js/vendor/jquery.min.js"></script>
	<script src="http://nursanamar.esy.es/js/bootstrap.min.js"></script>
    <script src="http://nursanamar.esy.es/js/docs.min.js"></script>
</head>
<body>
	<nav class='navbar navbar-fixed-top a'>
      <div class='container'>
        <div class='navbar-header'>
          <button type='button' class='navbar-toggle collapsed' data-toggle='collapse' data-target='#navbar' aria-expanded='false' aria-controls='navbar'>
            <span class='sr-only'>Toggle navigation</span>
            <span class='icon-bar'></span>
            <span class='icon-bar'></span>
            <span class='icon-bar'></span>
          </button>
          <a class='navbar-brand' href='#'><img src='image/8.png' class='logo'></a>
        </div>
        <div id='navbar' class='navbar-collapse collapse navbar-right'>
          <ul class='nav navbar-nav'>
           <li class='dropdown'>
              <a href='#' class='dropdown-toggle' data-toggle='dropdown' role='button' aria-haspopup='true' aria-expanded='false' id='login'>Pengumuman <span class='caret'></span></a>
              <ul class='dropdown-menu aa notif' style="min-width:400px">
                <div class='list-group'>
                	<?php foreach ($notif->result() as $lnotif) {
                		?>
                		<a href="<?php echo base_url()."index.php/wawancara/lihatnotif/".$lnotif->id_notif; ?>" class="list-group-item">
                 			<h4 class="list-group-item-heading"><?php echo "$lnotif->judul"; ?></h4>
                 			<p class="list-group-item-text"><?php echo substr($lnotif->isi, 0,73)."..."; ?><br><small><?php echo "$lnotif->tgl"; ?></small></p>
                 		</a>
                	<?php
                	} ?>
                </div>
              </ul>
            </li>
            <li><a href='<?php echo base_url()."index.php/wawancara/logout"; ?>'>logout</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="row kotak c">
    	<div class="col-sm-12 col-md-12">
    		<form action="<?php echo base_url()."index.php/wawancara/cari"; ?>" method="post" class="cari">
								<div class="form-group">
									<div class="col-md-2">
										<label for="ket">cari</label>
									</div>
									<div class="col-md-3">
										<input type="text" name="ket" class="form-control">
									</div>
								</div>
								<div class="form-group">
									<div class="col-md-2">
										<label for="kti">Berdasarkan</label>
									</div>
									<div class="col-md-3">
										<select name="kti" class="form-control">
 											<option value="csba.id_csba">id_csba</option>
 											<option value="csba.nama">nama</option>
 										</select>
									</div>
								</div>
 								<input type="submit" name="tmbl" class="btn btn-primary">
 								<a href="<?php echo base_url()."index.php/wawancara"; ?>" class="btn btn-primary">Reset</a>
 							</form>
    	</div>
    </div>
    <?php
    if (isset($csba)) {
    	foreach ($csba->result() as $data) {} ?>
		<div class="row c">
    		<div class="col-sm-12 col-md-12">
    		<h3>Data csb</h3>
		    			<div class="row">
		    				<div class="col-sm-4 col-xs-4 col-md-4">
		    					<p for="nama">Nama</p>
		    				</div>
		    				<div class="col-sm-8 col-xs-8 col-md-8">
		                        <p><?php echo "$data->nama"; ?></p>
		    				</div>
		    			</div>
		    			<div class="row">
		    				<div class="col-sm-4 col-xs-4 col-md-4">
		    					<p for="ttlhr">Tempat lahir</p>
		    				</div>
		    				<div class="col-sm-8 col-xs-8 col-md-8">
		                        <p><?php echo "$data->tt_lahir"; ?></p>
		    				</div>
		    			</div>
		    			<div class="row">
		    				<div class="col-sm-4 col-xs-4 col-md-4">
		    					<p for="tgl">Tanggal lahir</p>
		    				</div>
		    				<div class="col-sm-8 col-xs-8 col-md-8">
		                        <p><?php echo "$data->tgl_lahir"; ?></p>
		    				</div>
		    			</div>
		    			<div class="row">
		    				<div class="col-sm-4 col-xs-4 col-md-4">
		    					<p for="kelamin">Jenis Kelamin</p>
		    				</div>
		    				<div class="col-sm-8 col-xs-8 col-md-8">
		                        <p><?php echo "$data->klmin"; ?></p>
		    				</div>
		    			</div>
		    			<div class="row">
		    				<div class="col-sm-4 col-xs-4 col-md-4">
		    					<p for="Agama">Agama</p>
		    				</div>
		    				<div class="col-sm-8 col-xs-8 col-md-8">
		                        <p><?php echo "$data->agama"; ?></p>
		    				</div>
		    			</div>
		    			<div class="row">
		    				<div class="col-sm-4 col-xs-4 col-md-4">
		    					<p for="wn">Warga Negara</p>
		    				</div>
		    				<div class="col-sm-8 col-xs-8 col-md-8">
		                        <p><?php echo "$data->warganegara"; ?></p>
		    				</div>
		    			</div>
		    			<div class="row">
		    				<div class="col-sm-4 col-xs-4 col-md-4">
		    					<p for="alamat">Alamat</p>
		    				</div>
		    				<div class="col-sm-8 col-xs-8 col-md-8">
		                        <p><?php echo "$data->alamat"; ?></p>
		    				</div>
		    			</div>
		    			<div class="row">
		    				<div class="col-sm-4 col-xs-4 col-md-4">
		    					<p for="aslsklh">Asal sekolah</p>
		    				</div>
		    				<div class="col-sm-8 col-xs-8 col-md-8">
		                        <p><?php echo "$data->sekolah_asal"; ?></p>
		    				</div>
		    			</div>
		    			<div class="row">
		    				<div class="col-sm-4 col-xs-4 col-md-4">
		    					<p for="almasklh">Alamat Sekolah asal</p>
		    				</div>
		    				<div class="col-sm-8 col-xs-8 col-md-8">
		                        <p><?php echo "$data->alamat_sklhasl"; ?></p>
		    				</div>
		    			</div>
		                <h3>Data Orang Tua</h3>
		                <h4>Ayah</h4>
		                <div class="row">
		                    <div class="col-sm-4 col-xs-4 col-md-4">
		                        <p for="ayah">Nama Ayah</p>
		                    </div>
		                    <div class="col-sm-8 col-xs-8 col-md-8">
		                        <p><?php echo "$data->ayah"; ?></p>
		                    </div>
		                </div>
		                <div class="row">
		                    <div class="col-sm-4 col-xs-4 col-md-4">
		                        <p for="tgl_ayah">Tanggal lahir Ayah</p>
		                    </div>
		                    <div class="col-sm-8 col-xs-8 col-md-8">
		                        <p><?php echo "$data->tgl_ayah"; ?></p>
		                    </div>
		                </div>
		                <div class="row">
		                    <div class="col-sm-4 col-xs-4 col-md-4">
		                        <p for="alamat_ayah">Alamat Ayah</p>
		                    </div>
		                    <div class="col-sm-8 col-xs-8 col-md-8">
		                        <p><?php echo "$data->alamat_ayah"; ?></p>
		                    </div>
		                </div>
		                <div class="row">
		                    <div class="col-sm-4 col-xs-4 col-md-4">
		                        <p for="pndkn_ayah">Pendidikan Ayah</p>
		                    </div>
		                    <div class="col-sm-8 col-xs-8 col-md-8">
		                        <p><?php echo "$data->pendidikan_ayah"; ?></p>
		                    </div>
		                </div>
		                <h4>Ibu</h4>
		                <div class="row">
		                    <div class="col-sm-4 col-xs-4 col-md-4">
		                        <p for="ibu">Nama Ibu</p>
		                    </div>
		                    <div class="col-sm-8 col-xs-8 col-md-8">
		                        <p><?php echo "$data->ibu"; ?></p>
		                    </div>
		                </div>
		                <div class="row">
		                    <div class="col-sm-4 col-xs-4 col-md-4">
		                        <p for="tgl_ibu">Tanggal lahir Ibu</p>
		                    </div>
		                    <div class="col-sm-8 col-xs-8 col-md-8">
		                        <p><?php echo "$data->tgl_ibu"; ?></p>
		                    </div>
		                </div>
		                <div class="row">
		                    <div class="col-sm-4 col-xs-4 col-md-4">
		                        <p for="alamat_ibu">Alamat Ibu</p>
		                    </div>
		                    <div class="col-sm-8 col-xs-8 col-md-8">
		                        <p><?php echo "$data->alamat_ibu"; ?></p>
		                    </div>
		                </div>
		                <div class="row">
		                    <div class="col-sm-4 col-xs-4 col-md-4">
		                        <p for="pndkn_ibu">Pendidikan Ibu</p>
		                    </div>
		                    <div class="col-sm-8 col-xs-8 col-md-8">
		                        <p><?php echo "$data->pendidikan_ibu"; ?></p>
		                    </div>
		                </div>
		                <h3>Wali</h3>
		                <div class="row">
		                    <div class="col-sm-4 col-xs-4 col-md-4">
		                        <p for="wali">Nama Wali</p>
		                    </div>
		                    <div class="col-sm-8 col-xs-8 col-md-8">
		                        <p><?php echo "$data->nama_wali"; ?></p>
		                    </div>
		                </div>
		                <div class="row">
		                    <div class="col-sm-4 col-xs-4 col-md-4">
		                        <p for="tgl_wali">Tanggal lahir Wali</p>
		                    </div>
		                    <div class="col-sm-8 col-xs-8 col-md-8">
		                        <p><?php echo "$data->tgl"; ?></p>
		                    </div>
		                </div>
		                <div class="row">
		                    <div class="col-sm-4 col-xs-4 col-md-4">
		                        <p for="alamat_wali">Alamat Wali</p>
		                    </div>
		                    <div class="col-sm-8 col-xs-8 col-md-8">
		                        <p><?php echo "$data->alamat"; ?></p>
		                    </div>
		                </div>
		                <div class="row">
		                    <div class="col-sm-4 col-xs-4 col-md-4">
		                        <p for="pndkn_wali">Pendidikan Wali</p>
		                    </div>
		                    <div class="col-sm-8 col-xs-8 col-md-8">
		                        <p><?php echo "$data->pendidikan"; ?></p>
		                    </div>
		                </div>
		                <h3>Pilihan Program Keahlian</h3>
		                <div class="row">
		                    <div class="col-sm-4 col-xs-4 col-md-4">
		                        <p for="jurusan1">Pilihan Pertama</p>
		                    </div>
		                    <div class="col-sm-8 col-xs-8 col-md-8">
		                        <p><?php echo "$data->pertama"; ?></p>
		                    </div>
		                </div>
		                <div class="row">
		                    <div class="col-sm-4 col-xs-4 col-md-4">
		                        <p for="jurusan2">Pilihan Kedua</p>
		                    </div>
		                    <div class="col-sm-8 col-xs-8 col-md-8">
		                        <p><?php echo "$data->kedua"; ?></p>
		                    </div>
		                </div>
    		</div>
    	</div>
    	<?php
    		if (isset($nilai)) {
    	?>
    			<div class="row c">
			  		<div class="col-sm-12 col-md-12">
			  			<h3>Nilai tes kesehatan</h3>
			  			<span><?php echo "$data->nama "; ?>telah melakukan tes</span><br>
			  			<div class="row">
					    	<div class="col-sm-4 col-xs-4 col-md-4">
					    		<p for="nama">Berat</p>
					    	</div>
					    	<div class="col-sm-8 col-xs-8 col-md-8">
					            <p><?php echo "$nilai[berat]"."Kg"; ?></p>
					    	</div>
					    </div>
					    <div class="row">
					    	<div class="col-sm-4 col-xs-4 col-md-4">
					    		<p for="nama">Tinggi</p>
					    	</div>
					    	<div class="col-sm-8 col-xs-8 col-md-8">
					            <p><?php echo "$nilai[tinggi]"."Cm"; ?></p>
					    	</div>
					    </div>
					    <div class="row">
					    	<div class="col-sm-4 col-xs-4 col-md-4">
					    		<p for="nama">Tensi</p>
					    	</div>
					    	<div class="col-sm-8 col-xs-8 col-md-8">
					            <p><?php echo "$nilai[tensi]"."Mmhg"; ?></p>
					    	</div>
					    </div>
					    <div class="row">
					    	<div class="col-sm-4 col-xs-4 col-md-4">
					    		<p for="nama">Rabun</p>
					    	</div>
					    	<div class="col-sm-8 col-xs-8 col-md-8">
					            <p><?php echo "$nilai[rabun]"; ?></p>
					    	</div>
					    </div>
					    <div class="row">
					    	<div class="col-sm-4 col-xs-4 col-md-4">
					    		<p for="nama">Buta warna</p>
					    	</div>
					    	<div class="col-sm-8 col-xs-8 col-md-8">
					            <p><?php echo "$nilai[buta]"; ?></p>
					    	</div>
					    </div>
					    <div class="row">
					    	<div class="col-sm-4 col-xs-4 col-md-4">
					    		<p for="nama">Riwayat merokok</p>
					    	</div>
					    	<div class="col-sm-8 col-xs-8 col-md-8">
					            <p><?php echo "$nilai[merokok]"; ?></p>
					    	</div>
					    </div>
					    <div class="row">
					    	<div class="col-sm-4 col-xs-4 col-md-4">
					    		<p for="nama">Riwayat penyakit</p>
					    	</div>
					    	<div class="col-sm-8 col-xs-8 col-md-8">
					            <p><?php echo "$nilai[penyakit]"; ?></p>
					    	</div>
					    </div>
			  		</div>
  				</div>
    		<?php
    		 } else { ?>
    			<div class="row c">
    				<H1>csba ini belum tes kesehatan</H1>
    			</div>
    		<?php die(); }

    	?>
    	<?php
  		if(isset($wacara)){
  			foreach ($wacara->result() as $nwacara) {
  			 }if (empty($nwacara->wawancara) or is_null($nwacara->wawancara)) { ?>
  			 	<div class="row c">
    				<form action="<?php echo base_url()."index.php/wawancara/inputnilai"; ?>" method="post">
    					<input type="hidden" name="id_csba" value="<?php echo "$data->id_csba"; ?>" >
    					<div class="form-group">
 							<div class="col-sm-2 col-md-2">
    							<label for="nilaites">Nilai</label>
    						</div>
    						<div class="col-sm-2 col-md-2">
    							<input type="number" name="nilaites">
    						</div>
    					</div>
    					<div class="row">
    						<input type="submit" value="submit" class="btn btn-primary">
    					</div>

    				</form>
    			</div>
  			 <?php }else{
  				?>
  				<div class="row c">
  					<div class="row">
					    <div class="col-sm-4 col-xs-4 col-md-4">
					    	<p for="nama">Nilai tes wawancara</p>
					    </div>
					    <div class="col-sm-8 col-xs-8 col-md-8">
					        <p><?php echo "$nwacara->wawancara"; ?></p>
					    </div>
					</div>
  				</div>
  	  		<?php
  	  		die();
  	  			}
  		}
  	}?>


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('')</script>

    <script type="text/javascript" src="http://nursanamar.esy.es/js/slide.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="http://nursanamar.esy.es//js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>
