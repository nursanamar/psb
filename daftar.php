<?php 
	$pesan ="<div class='form-group'><div class='alert alert-danger'><span>Masih ada data yang belum terisi!</span></div></div>";
    $nama="";
    $ttlhr ="";
    $tgl ="";
    $klmin ="";
    $agama ="";
    $wn ="";
    $alamat ="";
    $aslsklh ="";
    $almasklh ="";
    if (isset($_GET['res'])) {
        $nama=$_GET['nama'];
    }
    
  ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>home</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/psb.css">
	<link rel="stylesheet" type="text/css" href="css/daftar.css">
 </head>
 <body>
 	<?php include "header.php"; ?>
    <div class="row c">
    	<div class="col-sm-8 col-sm-offset-2 col-md-8 col-md-offset-2 ba">
            <h2>Formulir</h2>
    		<form action="post.php" method="post" class="form-horizontal">
                <h3>Data diri</h3>
    			<div class="form-group">
    				<div class="col-sm-4 col-md-4">
    					<label for="nama">Nama</label>
    				</div>
    				<div class="col-sm-8 col-md-8">
    					<input class="form-control" type="text" name="nama" placeholder="Nama lengkap" value="<?php echo $nama; ?>">
    				</div>
    			</div>
    			<div class="form-group">
    				<div class="col-sm-4 col-md-4">
    					<label for="ttlhr">Tempat lahir</label>
    				</div>
    				<div class="col-sm-8 col-md-8">
    					<input class="form-control" type="text" name="ttlhr" placeholder="tempat lahir">
    				</div>
    			</div>
    			<div class="form-group">
    				<div class="col-sm-4 col-md-4">
    					<label for="tgl">Tanggal lahir</label>
    				</div>
    				<div class="col-sm-8 col-md-8">
    					<input class="form-control" type="date" name="tgl" value="<?php echo date('Y-m-d'); ?>">
    				</div>
    			</div>
    			<div class="form-group">
    				<div class="col-sm-4 col-md-4">
    					<label for="kelamin">Jenis Kelamin</label>
    				</div>
    				<div class="col-sm-8 col-md-8">
    					<select class="form-control" name="kelamin">
 							<option value="P">P</option>
 							<option value="L">L</option>
 						</select>
    				</div>
    			</div>
    			<div class="form-group">
    				<div class="col-sm-4 col-md-4">
    					<label for="Agama">Agama</label>
    				</div>
    				<div class="col-sm-8 col-md-8">
    					<select class="form-control" name="Agama">
 							<option value="Islam">Islam</option>
 							<option value="Katolik">Katolik</option>
 							<option value="Protestan">Protestan</option>
 							<option value="Hindu">Hindu</option>
 							<option value="Budha">Budha</option>
 						</select>
    				</div>
    			</div>
    			<div class="form-group">
    				<div class="col-sm-4 col-md-4">
    					<label for="wn">Warga Negara</label>
    				</div>
    				<div class="col-sm-8 col-md-8">
    					<input class="form-control" type="text" name="wn" placeholder="Kewarganegaraan" min="1" max="3">
    				</div>
    			</div>
    			<div class="form-group">
    				<div class="col-sm-4 col-md-4">
    					<label for="alamat">Alamat</label>
    				</div>
    				<div class="col-sm-8 col-md-8">
    					<textarea class="form-control" name="alamat" placeholder="Alamat"></textarea>
    				</div>
    			</div>
    			<div class="form-group">
    				<div class="col-sm-4 col-md-4">
    					<label for="aslsklh">Asal sekolah</label>
    				</div>
    				<div class="col-sm-8 col-md-8">
    					<input class="form-control" type="text" name="aslsklh" placeholder="asal sklh">
    				</div>
    			</div>
    			<div class="form-group">
    				<div class="col-sm-4 col-md-4">
    					<label for="almasklh">Alamat Sekolah asal</label>
    				</div>
    				<div class="col-sm-8 col-md-8">
    					<textarea class="form-control" name="almasklh" placeholder="alamat sekolah asal"></textarea>
    				</div>
    			</div>
                <h3>Data Orang Tua</h3>
                <h4>Ayah</h4>
                <div class="form-group">
                    <div class="col-sm-4 col-md-4">
                        <label for="ayah">Nama Ayah</label>
                    </div>
                    <div class="col-sm-8 col-md-8">
                        <input class="form-control" type="text" name="ayah" placeholder="Ayah">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-4 col-md-4">
                        <label for="tgl_ayah">Tanggal lahir Ayah</label>
                    </div>
                    <div class="col-sm-8 col-md-8">
                        <input class="form-control" type="date" name="tgl_ayah" placeholder="Tnggal Lahir Ayah">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-4 col-md-4">
                        <label for="alamat_ayah">Alamat Ayah</label>
                    </div>
                    <div class="col-sm-8 col-md-8">
                        <input class="form-control" type="text" name="alamat_ayah" placeholder="Alamat Ayah">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-4 col-md-4">
                        <label for="pndkn_ayah">Pendidikan Ayah</label>
                    </div>
                    <div class="col-sm-8 col-md-8">
                        <select class="form-control" type="text" name="pndkn_ayah" placeholder="Alamat Ayah">
                            <option value="SD">SD/Sederajat</option>
                            <option value="SLTP">SLTP/Sederajat</option>
                            <option value="SLTA">SLTA/Sederajat</option>
                            <option value="S1">S1</option>
                            <option value="S2">S2</option>
                            <option value="S3">S3</option>
                        </select>
                    </div>
                </div>
                <h4>Ibu</h4>
                <div class="form-group">
                    <div class="col-sm-4 col-md-4">
                        <label for="ibu">Nama Ibu</label>
                    </div>
                    <div class="col-sm-8 col-md-8">
                        <input class="form-control" type="text" name="ibu" placeholder="Ibu">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-4 col-md-4">
                        <label for="tgl_ibu">Tanggal lahir Ibu</label>
                    </div>
                    <div class="col-sm-8 col-md-8">
                        <input class="form-control" type="date" name="tgl_ibu" placeholder="Tnggal Lahir Ibu">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-4 col-md-4">
                        <label for="alamat_ibu">Alamat Ibu</label>
                    </div>
                    <div class="col-sm-8 col-md-8">
                        <input class="form-control" type="text" name="alamat_ibu" placeholder="Alamat Ibu">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-4 col-md-4">
                        <label for="pndkn_ibu">Pendidikan Ibu</label>
                    </div>
                    <div class="col-sm-8 col-md-8">
                        <select class="form-control" type="text" name="pndkn_ibu" placeholder="Alamat Ibu">
                            <option value="SD">SD/Sederajat</option>
                            <option value="SLTP">SLTP/Sederajat</option>
                            <option value="SLTA">SLTA/Sederajat</option>
                            <option value="S1">S1</option>
                            <option value="S2">S2</option>
                            <option value="S3">S3</option>
                        </select>
                    </div>
                </div>
                <h3>Wali</h3>
                <div class="form-group">
                    <div class="col-sm-4 col-md-4">
                        <label for="wali">Nama Wali</label>
                    </div>
                    <div class="col-sm-8 col-md-8">
                        <input class="form-control" type="text" name="wali" placeholder="Wali">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-4 col-md-4">
                        <label for="tgl_wali">Tanggal lahir Wali</label>
                    </div>
                    <div class="col-sm-8 col-md-8">
                        <input class="form-control" type="date" name="tgl_wali" placeholder="Tnggal Lahir Wali">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-4 col-md-4">
                        <label for="alamat_wali">Alamat Wali</label>
                    </div>
                    <div class="col-sm-8 col-md-8">
                        <input class="form-control" type="text" name="alamat_wali" placeholder="Alamat Wali">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-4 col-md-4">
                        <label for="pndkn_wali">Pendidikan Wali</label>
                    </div>
                    <div class="col-sm-8 col-md-8">
                        <select class="form-control" type="text" name="pndkn_wali" placeholder="Alamat Wali">
                            <option value="SD">SD/Sederajat</option>
                            <option value="SLTP">SLTP/Sederajat</option>
                            <option value="SLTA">SLTA/Sederajat</option>
                            <option value="S1">S1</option>
                            <option value="S2">S2</option>
                            <option value="S3">S3</option>
                        </select>
                    </div>
                </div>
                <h3>Pilihan Program Keahlian</h3>
                <div class="form-group">
                    <div class="col-sm-4 col-md-4">
                        <label for="jurusan1">Pilihan Pertama</label>
                    </div>
                    <div class="col-sm-8 col-md-8">
                        <select class="form-control" type="text" name="jurusan1" placeholder="Alamat Wali">
                            <option value="AK">Akuntansi</option>
                            <option value="AP">Administrasi Perkantoran</option>
                            <option value="BB">Busana Butik</option>
                            <option value="NKPI">Nautika Kapal Penangkap Ikan</option>
                            <option value="TAV">Teknik Audio Video</option>
                            <option value="TKJ">Teknik Komputer Jaringan</option>
                            <option value="TKR">Teknik kendaraan ringan</option>
                            <option value="TN">Tata Niaga</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-4 col-md-4">
                        <label for="jurusan2">Pilihan Kedua</label>
                    </div>
                    <div class="col-sm-8 col-md-8">
                        <select class="form-control" type="text" name="jurusan2" placeholder="Alamat Wali">
                            <option value="AK">Akuntansi</option>
                            <option value="AP">Administrasi Perkantoran</option>
                            <option value="BB">Busana Butik</option>
                            <option value="NKPI">Nautika Kapal Penangkap Ikan</option>
                            <option value="TAV">Teknik Audio Video</option>
                            <option value="TKJ">Teknik Komputer Jaringan</option>
                            <option value="TKR">Teknik kendaraan ringan</option>
                            <option value="TN">Tata Niaga</option>
                        </select>
                    </div>
                </div>
    			<div class="from-group" id="err">
    				<?php 
                        
                        if (isset($_GET['res'])) {
                            echo "$pesan";
                        } else {
                            echo "";
                        };
                        unset($_GET['res'])
                    ?>
    			</div>
 				<input type="submit" name="submit" value="Submit" class="btn btn-large btn-primary">
 			</form>
    	</div>
    </div>
 	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/docs.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
 </body>
 </html>
 