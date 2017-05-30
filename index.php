<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>home</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/psb.css">
    <link rel="stylesheet" type="text/css" href="css/timeline.css">
		<link rel="stylesheet" href="css/silide.css?ver=1">
		<script type="text/javascript" src="js\vendor\jquery.min.js">

		</script>
   <script type="text/javascript">
       $(window).scroll(function() {
                    $(".slideanim").each(function(){
                        var pos = $(this).offset().top;
                        var winTop = $(window).scrollTop();
												console.log(winTop);
                        if (pos < winTop + 600) {
                            $(this).addClass("slide");
                        }
                    });
										$(".slidetr").each(function(){
                        var pos = $(this).offset().top;
                        var winTop = $(window).scrollTop();
												console.log(winTop);
                        if (pos < winTop + 600) {
                            $(this).addClass("slidetranim");
                        }
                    });
										$(".slidetl").each(function(){
                        var pos = $(this).offset().top;
                        var winTop = $(window).scrollTop();
												console.log(winTop);
                        if (pos < winTop + 600) {
                            $(this).addClass("slidetlanim");
                        }
                    });
										$(".slidez").each(function(){
                        var pos = $(this).offset().top;
                        var winTop = $(window).scrollTop();
												console.log(winTop);
                        if (pos < winTop + 600) {
                            $(this).addClass("slidezanim");
                        }
                    });
                });
    </script>
</head>
<body>
	<?php include 'header.php'; ?>
    <div class="container b">
    	<div class="row">
    		<div class="col-sm-12 col-md-12 col-lg-12 ba">
    			<h1>Selamat datang<br> di situs pendaftarn online</h1>
    			<p class="col-sm-6 col-sm-offset-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    			quis nostrud exercitation<br><br><a href="daftar.php" class="btn btn-primary">Isi formulir</a> </p>
    		</div>
    	</div>
    </div>
    <div class="divider">

    </div>
    <div class="row c">
    	<div class="container ca">
    		<div class="col-sm-6 col-lg-6">
    			<img src="image/placeholder.jpg">
    		</div>
    		<div class="col-sm-6 col-lg-6">
    			<h2>Persiapan sebelum mengisi formulir</h2>
    			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
    			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
    			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
    			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <ul>
                    <li><a href="bantuan.php" target="_blank">Panduan Pendaftaran</a></li>
                    <li><a href="faq.php" target="_blank">FAQ</a></li>
                </ul>
    		</div>
    	</div>
    </div>
    <div class="row d ">
    	<div class="container da">
    		<h2>Alur Pendaftarn</h2>
    	</div>
    	<div class="container dc">
    		<ul class="timeline">
                <li>
                    <div class="timeline-badge slidez"><i class="glyphicon glyphicon-list"></i></div>
                    <div class="timeline-panel slidetl">
                        <div class="timeline-heading">
                            <h4 class="timeline-title">Isi formulir</h4>
                            <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i>12/12/12</small></p>
                        </div>
                        <div class="timeline-body">
                            <p>PESERTA WAJIB MELAKUKAN DAFTAR ONLINE PADA <a href="http://gg.gg/ppdbonlinesmkn1blk">LINK INI</a>
DAN WAJIB MENGISI FORMAT BIODATA SAMPAI SELESAI.
DAN AKAN MENDAPATKAN ID,PASSWORD DAN INFORMASI BERKAS YANG HARUS DILENKAPI*
</p>
														<small class="text-danger">*SIMPAN DAN CATAT BAIK-BAIK ID DAN PASWORD YANG ANDA DAPATKAN</small>
                        </div>
                    </div>
                </li>
                <li class="timeline-inverted">
                    <div class="timeline-badge slidez"><i class="glyphicon glyphicon-check"></i></div>
                    <div class="timeline-panel slidetr">
                        <div class="timeline-heading">
                            <h4 class="timeline-title">Verifikasi</h4>
                            <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i>12/12/12</small></p>
                        </div>
                        <div class="timeline-body">
                            <p>
															<ul>
																<li style="text-align:left">PESERTA WAJIB MEMPERLIHATKAN BUKTI PENDAFTARAN ONLINE ATAU ID UNTUK DIVERIFIKASI OLEH PETUGAS</li>
																<li style="text-align:left">PESERTA YANG TERBUKTI TELAH MELAKUKAN PENDAFTARAN ONLINE, WAJIB MEMPERLIHATKAN KELENGKAPAN BERKAS KEPADA PETUGAS</li>
																<li style="text-align:left">PESERTA YANG TIDAK TERBUKTI, HARAP MENDAFTAR SECARA ONLINE DAN MELENGKAPI BERKAS</li>
															</ul>
														</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="timeline-badge slidez"><i class="glyphicon glyphicon-list-alt"></i></div>
                    <div class="timeline-panel slidetl">
                        <div class="timeline-heading">
                            <h4 class="timeline-title">Tes</h4>
                            <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i>12/12/12</small></p>
                        </div>
                        <div class="timeline-body">
                            <p>
															<ul>
																<li style="text-align:left">PESERTA WAJIB MENGIKUTI TES KESEHATAN & CEK FISIK*</li>
																<li style="text-align:left">PESERTA WAJIB MELAKUKAN TES BACA TULIS AL-QURAN</li>
																<li style="text-align:left">PESERTA WAJIB MENGIKUTI WAWANCARA PEMINATAN</li>
																<li style="text-align:left">PESERTA WAJIB MENGIKUTI  TES TERTULIS</li>
															</ul>
														</p>
														<small class="text-danger">*SEMUA KEGIATAN TES KESEHATAN & CEK FISIK DILAKSANAKAN PADA POLIKLINIK SMKN 1 BULUKUMBA, BUKAN DI PUSKESMAS ATAU PUN RUMAH SAKIT </small>
                        </div>
                    </div>
                </li>
                <li class="timeline-inverted">
                    <div class="timeline-badge slidez"><i class="glyphicon glyphicon-bullhorn"></i></div>
                    <div class="timeline-panel slidetr">
                        <div class="timeline-heading">
                            <h4 class="timeline-title">Pengumuman</h4>
                            <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i>12/12/12</small></p>
                        </div>
                        <div class="timeline-body">
                            <p>Pngumuman CSB yang lulus  </p>
                        </div>
                    </div>
                </li>
            </ul>
    	</div>
    </div>
    <div class="row e" style="color:white;">
        <div class="container">
            <h2>Tentang SMK 1 Bulukumba</h2>
        </div>
        <div class="container">
            <div class="col-lg-6 col-md-6">
                <img src="image/placeholder.jpg">
            </div>
            <div class="col-lg-6 col-md-6">
                <p>SMK Negeri 1 Bulukumba sebagai lembaga pendidikan kejuruan yang berstandar Nasional beralamat di Jalan Teratai Nomor 24, Telepon (0413) 81168, Fax. (0413) 83903, Kode Pos 92512 Bulukumba, Provinsi Sulawesi Selatan. Dirintis sejak 1969 dengan nama SMEA Negeri 14 Kajang, dengan Nomor SK 14/UKK.3/69 tanggal 12 – 08 – 1969. Tahun 1979 dipindahkan ke Kota Bulukumba dengan nama SMEA Negeri Kajang di Bulukumba, dan tahun 1983 berubah menjadi SMEA Negeri Bulukumba dengan keputusan Dirjen. Dikdasmen No. 13906/C.1/R.83 tanggal 23 September 1982 dan tahun 1996 berubah menjadi SMK Negeri 1 Bulukumba.<br><br><a href="http://smkn1bulukumba.sch.id/about-us.html">Profil lengkap</a></p>
            </div>
        </div>
    </div>
    <div class="row c">
        <div class="container">
            <h2 style="text-align:center;">Profil Jurusan</h2>
        </div>
        <div class="container">
            <div class="col-sm-3 col-md-3 slideanim">
                <div>
                    <img src="image/placeholder.jpg">
                </div>
                <div>
                    <h4 style="text-align:center;">Administrasi Perkantoran</h4>
                </div>
            </div>
            <div class="col-sm-3 col-md-3 slideanim">
                <div>
                    <img src="image/placeholder.jpg">
                </div>
                <div>
                    <h4 style="text-align:center;">Akuntansi</h4>
                </div>
            </div>
            <div class="col-sm-3 col-md-3 slideanim">
                <div>
                    <img src="image/placeholder.jpg">
                </div>
                <div>
                    <h4 style="text-align:center;">Tata Niaga</h4>
                </div>
            </div>
            <div class="col-sm-3 col-md-3 slideanim">
                <div>
                    <img src="image/placeholder.jpg">
                </div>
                <div>
                    <h4 style="text-align:center;">Tata Busana</h4>
                </div>
            </div>
            <div class="col-sm-3 col-md-3 slideanim">
                <div>
                    <img src="image/placeholder.jpg">
                </div>
                <div>
                    <h4 style="text-align:center;">Teknik Komputer dan Jaringan</h4>
                </div>
            </div>
            <div class="col-sm-3 col-md-3 slideanim">
                <div>
                    <img src="image/placeholder.jpg">
                </div>
                <div>
                    <h4 style="text-align:center;">Teknik Kendaraan Ringan</h4>
                </div>
            </div>
            <div class="col-sm-3 col-md-3 slideanim">
                <div>
                    <img src="image/placeholder.jpg">
                </div>
                <div>
                    <h4 style="text-align:center;">Teknik Audio Video</h4>
                </div>
            </div>
            <div class="col-sm-3 col-md-3 slideanim">
                <div>
                    <img src="image/placeholder.jpg">
                </div>
                <div>
                    <h4 style="text-align:center;">Nautika Kapal Penagkap Ikan</h4>
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix" style="min-height: 100px;">

    </div>
    <div class="footer">
        <div class="container">
            <div class="col-lg-4 col-md-4 afoot">

                <ul>
                    <h5>lorem</h5>
                    <li>lorem</li>
                    <li>lorem</li>
                    <li>lorem</li>
                    <li>lorem</li>
                    <li>lorem</li>
                </ul>
            </div>
            <div class="col-lg-4 col-md-4 afoot">

                <ul>
                    <h5>lorem</h5>
                    <li>lorem</li>
                    <li>lorem</li>
                    <li>lorem</li>
                    <li>lorem</li>
                    <li>lorem</li>
                </ul>
            </div>
            <div class="col-lg-4 col-md-4 afoot">

                <ul>
                    <h5>lorem</h5>
                    <li>lorem</li>
                    <li>lorem</li>
                    <li>lorem</li>
                    <li>lorem</li>
                    <li>lorem</li>
                </ul>
            </div>
        </div>
    </div>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/docs.min.js"></script>
 <!--   <script type="text/javascript" src="js/slide.js"></script>-->
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>
