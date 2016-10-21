<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>CSBA</title>
	<link rel="stylesheet" type="text/css" href="http://localhost/psb/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="http://localhost/psb/css/psb.css">
	<link rel="stylesheet" type="text/css" href="http://localhost/psb/css/csba.css">
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
                		<a href="<?php echo base_url()."index.php/csba/lihatnotif/".$lnotif->id_notif; ?>" class="list-group-item">
                 			<h4 class="list-group-item-heading"><?php echo "$lnotif->judul"; ?></h4>
                 			<p class="list-group-item-text"><?php echo substr($lnotif->isi, 0,73)."..."; ?><br><small><?php echo "$lnotif->tgl"; ?></small></p>
                 		</a>
                	<?php
                	} ?>
                </div>
              </ul>
            </li>
            <li><a href='<?php echo base_url()."index.php/csba/logout"; ?>'>logout</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <div style="min-height:250px;">
    	<img src="http://localhost/psb/image/placeholder.jpg" class="img-thumbnail profil" style="width:200px;height:200px;position:absolute;top:140px;left:50px;">
    </div>
    <div class="row c" style="
    padding-top: 20px;min-height: 100px;
">
    	 <div class="col-sm-12 col-md-12">
    	 	<div class="col-sm-12 col-md-9 col-md-offset-3">
    	 		<h4></h4>
    	 		<ul class="nav nav-tabs">
    	 			<li class="active"><a href="#home" data-toggle='tab'>Data diri</a></li>
    	 			<li><a href="#menu1" data-toggle='tab'>akun</a></li>
    	 			<li><a href="#menu2" data-toggle='tab'>status</a></li>
    	 			<li><a href="#menu3" data-toggle='tab'>bantuan</a></li>
    	 		</ul>
    	 		<div class="tab-content">
				  <div id="home" class="tab-pane fade in active">
				  <?php foreach ($diri->result() as $data) {
				  	# code...
				  } ?>
				    	<h3>Data diri</h3>
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
				  <div id="menu1" class="tab-pane fade">
				  	<h3>Informasi akun</h3>
				    <div class="row">
		    				<div class="col-sm-4 col-xs-4 col-md-4">
		    					<p for="nama">ID</p>
		    				</div>
		    				<div class="col-sm-8 col-xs-8 col-md-8">
		                        <p><?php echo "$data->id_csba"; ?></p>    					
		    				</div>
		    	  	</div>
		    		<div class="row">
		    				<div class="col-sm-4 col-xs-4 col-md-4">
		    					<p for="nama">Password</p>
		    				</div>
		    				<div class="col-sm-8 col-xs-8 col-md-8">
		                        <p><?php echo "$data->pass"; ?></p>    					
		    				</div>
		    		</div>
		    		<h3>Ubah password</h3>
		    		<form action="<?php echo base_url()."index.php/csba/updatepass"; ?>" method="post">
		    			<div class="form-group">
    						<div class="col-sm-4 col-md-4" style="padding-left:0">
    							<label for="pass">Password baru</label>
    						</div>
    						<div class="col-sm-8 col-md-8">
    						<input type="password" name="pass" maxlength="16" placeholder="Password baru" class="form-control" required>
    						</div>
    					</div>
    					<div class="form-group">
    						<div class="col-sm-4 col-md-4" style="padding-left:0">
    							<label for="pass2">Verifikasi Password</label>
    						</div>
    						<div class="col-sm-8 col-md-8">
    						<input type="password" name="pass2" placeholder="Verifikasi Password" class="form-control" maxlength="16" required>
    						</div>
    					</div>
    					<input type="submit" name="submit" value="Ubah password" class="btn btn-primary">
		    		</form>
				  </div>
				  <div id="menu2" class="tab-pane fade">
				    <h3>Status</h3>
				    <p><?php echo "$data->status"; ?></p>
				  </div>
				  <div id="menu3" class="tab-pane fade">
				    <h3>FAQ</h3>
				    <p>Anda bisa melihat FAQ atau pertanyaan yang sering di ajukan di link ini</p>
				    <h3>Kotak suara</h3>
				    <p>anda bisa bertanya ataupun mengirim komentar,kritik atau saran kepada panitia</p>
				    <form>
				    	<div class="row">
				    		<textarea class="form-control"></textarea>
				    	</div>
				    	<div class="row">
				    		<input type="submit" name="submit" class="btn btn-primary" value="submit">
				    	</div>
				    	
				    </form>
				    <h3>Contact</h3>
				    <p>Atau anda dapat menghubungi kontak di bawah ini</p>
				    <ul>
				    	<li>lorem</li>
				    	<li>lorem</li>
				    	<li>lorem</li>
				    	<li>lorem</li>
				    </ul>
				 </div>
				</div>
				
    	 	</div>
  
    	 	
    	 </div>
    </div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="http://localhost/psb/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="http://localhost/psb/js/bootstrap.min.js"></script>
    <script src="http://localhost/psb/js/docs.min.js"></script>
    <script type="text/javascript" src="http://localhost/psb/js/slide.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="http://localhost/psb//js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>