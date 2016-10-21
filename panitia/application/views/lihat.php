<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>
<?php 
	$hlmn='data';
 ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>panita</title>
	<link rel="stylesheet" type="text/css" href="http://localhost/psb/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="http://localhost/psb/css/sidebar.css">
	<link rel="stylesheet" type="text/css" href="http://localhost/psb/css/dashboard.css">
	<script type="text/javascript">
		function togel() {
        	var x=document.getElementById("wrapper");
        document.getElementById("wrapper").classList.toggle("toggled");
    };
    </script>
</head>
<body>
	<?php include 'header.php'; ?>
	<div id="wrapper" class="togled">
    	<div class="container-fluid">
    		<?php include 'sidebar.php'; ?>
    		<div id="page-content-wrapper">
    			<div class="container-fluid">
    				<div class="row kotak">
    					<div class="col-lg-12 col-sm-12">
    						<form class="form-horizontal" action="<?php echo base_url()."index.php/da/update"; ?>" method="post">
                            <?php foreach ($siswa->result() as $data) {
                                # code...
                            } ?>
                                <h3>Data diri</h3>
                                <input type="hidden" name="id_csba" value="<?php echo "$data->id_csba"; ?>">
                                <div class="form-group">
                                    <div class="col-sm-3 col-md-3">
                                        <label for="nama">Nama</label>
                                    </div>
                                    <div class="col-sm-5 col-md-5">
                                        <input type="text" name="nama" placeholder="Nama lengkap" value="<?php echo $data->nama; ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-3 col-md-3">
                                        <label for="ttlhr">Tempat lahir</label>
                                    </div>
                                    <div class="col-sm-5 col-md-5">
                                        <input type="text" name="ttlhr" placeholder="tempat lahir" value="<?php echo "$data->tt_lahir"; ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-3 col-md-3">
                                        <label for="tgl">Tanggal lahir</label>
                                    </div>
                                    <div class="col-sm-5 col-md-5">
                                        <input type="date" name="tgl" value="<?php echo "$data->tgl_lahir"; ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-3 col-md-3">
                                        <label for="kelamin">Jenis Kelamin</label>
                                    </div>
                                    <div class="col-sm-5 col-md-5">
                                        <select name="kelamin">
                                        <?php 
                                            if ($data->klmin=="L") {
                                                echo "<option value='P'>P</option>
                                            <option value='L' selected>L</option>";
                                            } else {
                                                echo "<option value='P' selected>P</option>
                                            <option value='L'>L</option>";
                                            }
                                            
                                         ?>
                                            
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-3 col-md-3">
                                        <label for="Agama">Agama</label>
                                    </div>
                                    <div class="col-sm-5 col-md-5">
                                        <select name="Agama">
                                        <?php 
                                            switch ($data->agama) {
                                                case 'Islam':
                                                    echo "<option value='Islam' selected>Islam</option>
                                            <option value='Katolik'>Katolik</option>
                                            <option value='Protestan'>Protestan</option>
                                            <option value='Hindu'>Hindu</option>
                                            <option value='Budha'>Budha</option>";
                                                    break;
                                                case 'Katolik':
                                                    echo "<option value='Islam'>Islam</option>
                                            <option value='Katolik' selected>Katolik</option>
                                            <option value='Protestan'>Protestan</option>
                                            <option value='Hindu'>Hindu</option>
                                            <option value='Budha'>Budha</option>";
                                                    break;
                                                case 'Protestan':
                                                    echo "<option value='Islam'>Islam</option>
                                            <option value='Katolik'>Katolik</option>
                                            <option value='Protestan' selected>Protestan</option>
                                            <option value='Hindu'>Hindu</option>
                                            <option value='Budha'>Budha</option>";
                                                    break;
                                                case 'Hindu':
                                                    echo "<option value='Islam'>Islam</option>
                                            <option value='Katolik'>Katolik</option>
                                            <option value='Protestan'>Protestan</option>
                                            <option value='Hindu' selected>Hindu</option>
                                            <option value='Budha'>Budha</option>";
                                                    break;
                                                case 'Budha':
                                                    echo "<option value='Islam'>Islam</option>
                                            <option value='Katolik'>Katolik</option>
                                            <option value='Protestan'>Protestan</option>
                                            <option value='Hindu'>Hindu</option>
                                            <option value='Budha' selected>Budha</option>";
                                                    break;
                                                default:
                                                    # code...
                                                    break;
                                            }
                                         ?>
                                            <option value='Islam'>Islam</option>
                                            <option value='Katolik'>Katolik</option>
                                            <option value='Protestan'>Protestan</option>
                                            <option value='Hindu'>Hindu</option>
                                            <option value='Budha'>Budha</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-3 col-md-3">
                                        <label for="wn">Warga Negara</label>
                                    </div>
                                    <div class="col-sm-5 col-md-5">
                                        <input type="text" name="wn" placeholder="Kewarganegaraan" min="1" max="3" value="<?php echo "$data->warganegara"; ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-3 col-md-3">
                                        <label for="alamat">Alamat</label>
                                    </div>
                                    <div class="col-sm-5 col-md-5">
                                        <textarea name="alamat" placeholder="Alamat"><?php echo "$data->alamat"; ?></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-3 col-md-3">
                                        <label for="aslsklh">Asal sekolah</label>
                                    </div>
                                    <div class="col-sm-5 col-md-5">
                                        <input type="text" name="aslsklh" placeholder="asal sklh" value="<?php echo "$data->sekolah_asal"; ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-3 col-md-3">
                                        <label for="almasklh">Alamat Sekolah asal</label>
                                    </div>
                                    <div class="col-sm-5 col-md-5">
                                        <textarea name="almasklh" placeholder="alamat sekolah asal"><?php echo "$data->alamat_sklhasl"; ?></textarea>
                                    </div>
                                </div>
                                <h3>Data Orang Tua</h3>
                                <h3>Ayah</h3>
                                <div class="form-group">
                                    <div class="col-sm-3 col-md-3">
                                        <label for="ayah">Nama Ayah</label>
                                    </div>
                                    <div class="col-sm-5 col-md-5">
                                        <input type="text" name="ayah" placeholder="Ayah" value="<?php echo "$data->ayah"; ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-3 col-md-3">
                                        <label for="tgl_ayah">Tanggal lahir Ayah</label>
                                    </div>
                                    <div class="col-sm-5 col-md-5">
                                        <input type="date" name="tgl_ayah" placeholder="Tnggal Lahir Ayah" value="<?php echo "$data->tgl_ayah"; ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-3 col-md-3">
                                        <label for="alamat_ayah">Alamat Ayah</label>
                                    </div>
                                    <div class="col-sm-5 col-md-5">
                                        <input type="text" name="alamat_ayah" placeholder="Alamat Ayah" value="<?php echo "$data->alamat_ayah"; ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-3 col-md-3">
                                        <label for="pndkn_ayah">Pendidikan Ayah</label>
                                    </div>
                                    <div class="col-sm-5 col-md-5">
                                        <select type="text" name="pndkn_ayah" placeholder="Alamat Ayah">
                                        <?php 
                                            switch ($data->pendidikan_ayah) {
                                                case 'SD':
                                                    echo "<option value='SD' selected>SD/Sederajat</option>";
                                                    break;
                                                case 'SLTP':
                                                    echo "<option value='SLTP' selected>SLTP/Sederajat</option>";
                                                    break;
                                                case 'SD':
                                                    echo "<option value='SLTP' selected>SLTP/Sederajat</option>";
                                                    break;
                                                case 'SLTA':
                                                    echo "<option value='SLTA' selected>SLTA/Sederajat</option>";
                                                    break;
                                                case 'S1':
                                                    echo "<option value='S1' selected>S1/Sederajat</option>";
                                                    break;
                                                case 'S2':
                                                    echo "<option value='S2' selected>S2/Sederajat</option>";
                                                    break;
                                                case 'S3':
                                                    echo "<option value='S3' selected>S3/Sederajat</option>";
                                                    break;
                                                default:
                                                    # code...
                                                    break;
                                            }
                                         ?>
                                            <option value="SD">SD/Sederajat</option>
                                            <option value="SLTP">SLTP/Sederajat</option>
                                            <option value="SLTA">SLTA/Sederajat</option>
                                            <option value="S1">S1</option>
                                            <option value="S2">S2</option>
                                            <option value="S3">S3</option>
                                        </select>
                                    </div>
                                </div>
                                <h3>Ibu</h3>
                                <div class="form-group">
                                    <div class="col-sm-3 col-md-3">
                                        <label for="ibu">Nama Ibu</label>
                                    </div>
                                    <div class="col-sm-5 col-md-5">
                                        <input type="text" name="ibu" placeholder="Ibu" value="<?php echo "$data->ibu"; ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-3 col-md-3">
                                        <label for="tgl_ibu">Tanggal lahir Ibu</label>
                                    </div>
                                    <div class="col-sm-5 col-md-5">
                                        <input type="date" name="tgl_ibu" placeholder="Tnggal Lahir Ibu" value="<?php echo "$data->tgl_ibu"; ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-3 col-md-3">
                                        <label for="alamat_ibu">Alamat Ibu</label>
                                    </div>
                                    <div class="col-sm-5 col-md-5">
                                        <input type="text" name="alamat_ibu" placeholder="Alamat Ibu" value="<?php echo "$data->alamat_ibu"; ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-3 col-md-3">
                                        <label for="pndkn_ibu">Pendidikan Ibu</label>
                                    </div>
                                    <div class="col-sm-5 col-md-5">
                                        <select type="text" name="pndkn_ibu" placeholder="Alamat Ibu">
                                        <?php 
                                            switch ($data->pendidikan_ibu) {
                                                case 'SD':
                                                    echo "<option value='SD' selected>SD/Sederajat</option>";
                                                    break;
                                                case 'SLTP':
                                                    echo "<option value='SLTP' selected>SLTP/Sederajat</option>";
                                                    break;
                                                case 'SD':
                                                    echo "<option value='SLTP' selected>SLTP/Sederajat</option>";
                                                    break;
                                                case 'SLTA':
                                                    echo "<option value='SLTA' selected>SLTA/Sederajat</option>";
                                                    break;
                                                case 'S1':
                                                    echo "<option value='S1' selected>S1/Sederajat</option>";
                                                    break;
                                                case 'S2':
                                                    echo "<option value='S2' selected>S2/Sederajat</option>";
                                                    break;
                                                case 'S3':
                                                    echo "<option value='S3' selected>S3/Sederajat</option>";
                                                    break;
                                                default:
                                                    # code...
                                                    break;
                                            }
                                         ?>
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
                                    <div class="col-sm-3 col-md-3">
                                        <label for="wali">Nama Wali</label>
                                    </div>
                                    <div class="col-sm-5 col-md-5">
                                        <input type="text" name="wali" placeholder="Wali" value="<?php echo "$data->nama_wali"; ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-3 col-md-3">
                                        <label for="tgl_wali">Tanggal lahir Wali</label>
                                    </div>
                                    <div class="col-sm-5 col-md-5">
                                        <input type="date" name="tgl_wali" placeholder="Tnggal Lahir Wali" value="<?php echo "$data->tgl"; ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-3 col-md-3">
                                        <label for="alamat_wali">Alamat Wali</label>
                                    </div>
                                    <div class="col-sm-5 col-md-5">
                                        <input type="text" name="alamat_wali" placeholder="Alamat Wali" value="<?php echo "$data->alamat"; ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-3 col-md-3">
                                        <label for="pndkn_wali">Pendidikan Wali</label>
                                    </div>
                                    <div class="col-sm-5 col-md-5">
                                        <select type="text" name="pndkn_wali" placeholder="Alamat Wali">
                                        <?php 
                                            switch ($data->pendidikan) {
                                                case 'SD':
                                                    echo "<option value='SD' selected>SD/Sederajat</option>";
                                                    break;
                                                case 'SLTP':
                                                    echo "<option value='SLTP' selected>SLTP/Sederajat</option>";
                                                    break;
                                                case 'SD':
                                                    echo "<option value='SLTP' selected>SLTP/Sederajat</option>";
                                                    break;
                                                case 'SLTA':
                                                    echo "<option value='SLTA' selected>SLTA/Sederajat</option>";
                                                    break;
                                                case 'S1':
                                                    echo "<option value='S1' selected>S1/Sederajat</option>";
                                                    break;
                                                case 'S2':
                                                    echo "<option value='S2' selected>S2/Sederajat</option>";
                                                    break;
                                                case 'S3':
                                                    echo "<option value='S3' selected>S3/Sederajat</option>";
                                                    break;
                                                default:
                                                    # code...
                                                    break;
                                            }
                                         ?>
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
                                    <div class="col-sm-3 col-md-3">
                                        <label for="jurusan1">Pilihan Pertama</label>
                                    </div>
                                    <div class="col-sm-5 col-md-5">
                                        <select type="text" name="jurusan1" placeholder="Alamat Wali">
                                        <?php 
                                            switch ($data->pertama) {
                                                case 'AK':
                                                    echo " <option value='AK' selected>Akuntansi</option>";
                                                    break;
                                                case 'AP':
                                                    echo "<option value='AP' selected>Administrasi Perkantoran</option>";
                                                    break;
                                                case 'BB':
                                                    echo "<option value='BB' selected>Busana Butik</option>";
                                                    break;
                                                case 'NKPI':
                                                    echo "<option value='NKPI' selected>Nautika Kapal Penangkap Ikan</option>";
                                                    break;
                                                case 'TAV':
                                                    echo "<option value='TAV' selected>Teknik Audio Video</option>";
                                                    break;
                                                case 'TKJ':
                                                    echo "<option value='TKJ' selected>Teknik Komputer Jaringan</option>";
                                                    break;
                                                case 'TKR':
                                                    echo "<option value='TKR' selected>Teknik kendaraan ringan</option>";
                                                    break;
                                                case 'TN':
                                                    echo "<option value='TN' selected>Tata Niaga</option>";
                                                    break;
                                                default:
                                                    # code...
                                                    break;
                                            }
                                         ?>
                                            <option value='AK'>Akuntansi</option>
                                            <option value='AP'>Administrasi Perkantoran</option>
                                            <option value='BB'>Busana Butik</option>
                                            <option value='NKPI'>Nautika Kapal Penangkap Ikan</option>
                                            <option value='TAV'>Teknik Audio Video</option>
                                            <option value='TKJ'>Teknik Komputer Jaringan</option>
                                            <option value='TKR'>Teknik kendaraan ringan</option>
                                            <option value='TN'>Tata Niaga</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-3 col-md-3">
                                        <label for="jurusan2">Pilihan Kedua</label>
                                    </div>
                                    <div class="col-sm-5 col-md-5">
                                        <select type="text" name="jurusan2" placeholder="Alamat Wali">
                                        <?php 
                                            switch ($data->kedua) {
                                                case 'AK':
                                                    echo " <option value='AK' selected>Akuntansi</option>";
                                                    break;
                                                case 'AP':
                                                    echo "<option value='AP' selected>Administrasi Perkantoran</option>";
                                                    break;
                                                case 'BB':
                                                    echo "<option value='BB' selected>Busana Butik</option>";
                                                    break;
                                                case 'NKPI':
                                                    echo "<option value='NKPI' selected>Nautika Kapal Penangkap Ikan</option>";
                                                    break;
                                                case 'TAV':
                                                    echo "<option value='TAV' selected>Teknik Audio Video</option>";
                                                    break;
                                                case 'TKJ':
                                                    echo "<option value='TKJ' selected>Teknik Komputer Jaringan</option>";
                                                    break;
                                                case 'TKR':
                                                    echo "<option value='TKR' selected>Teknik kendaraan ringan</option>";
                                                    break;
                                                case 'TN':
                                                    echo "<option value='TN' selected>Tata Niaga</option>";
                                                    break;
                                                default:
                                                    # code...
                                                    break;
                                            }
                                         ?>
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
                                    <div class="col-sm-3 col-md-3">
                                        <input type="submit" name="submit" value="Update" class="btn btn-primary">
                                    </div>
                                    <div class="col-sm-3 col-md-3">
                                        <a href="<?php echo base_url()."index.php/da/veri/$data->id_csba"; ?>" class="btn btn-info">Verifikasi</a>
                                    </div>
                                    <div class="col-sm-3 col-md-3">
                                        <a href="" class="btn btn-default" onclick="window.close()">Kembali</a>
                                    </div>
                                </div>             
                            </form>
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>
    </div>
    <script src="../js/vendor/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/docs.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>
</body>
</html>