<?php
  include 'cone.php';

session_start();
    if (empty($_SESSION['id'])) {
      echo "<script type='text/javascript'>window.location='".DOMAIN."'</script>";
    }
    $id=$_SESSION['id'];
    $hlmn="download";
 ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashboard-Data siswa</title>
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="../css/sidebar.css">
  <link rel="stylesheet" type="text/css" href="../css/dashboard.css">
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
              <div class="col-sm-12 col-md-12">
              	<?php
                  $id_csba=mysql_escape_string($_GET['id']);
                  $q="SELECT * FROM csba INNER JOIN (orang_tua INNER JOIN (wali INNER JOIN Pilihan_jurusan ON wali.id_csba=pilihan_jurusan.id_csba) ON wali.id_csba=orang_tua.id_csba) ON csba.id_csba=orang_tua.id_csba WHERE csba.id_csba='$id_csba'";
                  $get=mysqli_query($sambung,$q) OR die(mysqli_error($sambung));
                  $data=mysqli_fetch_array($get);
                 ?>
                <div class="row">
                  <div class="col-sm-4 col-md-4 col-md-offset-1 col-sm-offset-1">
                    <h2>Data Siswa</h2>
                    <div class="row">
                      <div class="col-sm-6 col-md-6">
                        <h4>NAMA  :</h4>
                      </div>
                      <div class="col-sm-6 col-md-6">
                        <h4><?php echo $data['nama'] ?></h4>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-6 col-md-6">
                        <h4>NISN  :</h4>
                      </div>
                      <div class="col-sm-6 col-md-6">
                        <h4><?php echo $data['nisn'] ?></h4>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-6 col-md-6">
                        <h4>Tempat tanggal lahir:</h4>
                      </div>
                      <div class="col-sm-6 col-md-6">
                        <h4><?php echo $data['tt_lahir'].','.$data['tgl_lahir'] ?></h4>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-6 col-md-6">
                        <h4>Kelamin :</h4>
                      </div>
                      <div class="col-sm-6 col-md-6">
                        <h4><?php echo ($data['klmin'] === 'p') ? "Perempuan":"laki-laki"; ?></h4>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-6 col-md-6">
                        <h4>Agama :</h4>
                      </div>
                      <div class="col-sm-6 col-md-6">
                        <h4><?php echo $data['agama'] ?></h4>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-6 col-md-6">
                        <h4>Warganegara :</h4>
                      </div>
                      <div class="col-sm-6 col-md-6">
                        <h4><?php echo $data['warganegara'] ?></h4>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-6 col-md-6">
                        <h4>Alamat :</h4>
                      </div>
                      <div class="col-sm-6 col-md-6">
                        <h4><?php echo $data['alamat'] ?></h4>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-4 col-md-4 col-md-offset-2 col-sm-offset-2">
                    <h2>Data Akademik</h2>
                    <div class="row">
                      <div class="col-sm-6 col-md-6">
                        <h4>Nilai UN  :</h4>
                      </div>
                      <div class="col-sm-6 col-md-6">
                        <h4><?php echo $data['un'] ?></h4>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-6 col-md-6">
                        <h4>Nilai US  :</h4>
                      </div>
                      <div class="col-sm-6 col-md-6">
                        <h4><?php echo $data['us'] ?></h4>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-6 col-md-6">
                        <h4>No.Ijazah :</h4>
                      </div>
                      <div class="col-sm-6 col-md-6">
                        <h4><?php echo $data['ijazah'] ?></h4>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-6 col-md-6">
                        <h4>Asal Sekolah :</h4>
                      </div>
                      <div class="col-sm-6 col-md-6">
                        <h4><?php echo $data['sekolah_asal'] ?></h4>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-6 col-md-6">
                        <h4>Alamat sekolah :</h4>
                      </div>
                      <div class="col-sm-6 col-md-6">
                        <h4><?php echo $data['alamat_sklhasl'] ?></h4>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-4 col-md-4 col-md-offset-1 col-sm-offset-1">
                    <h2>Data Orang tua</h2>
                    <h3>Ayah</h3>
                    <div class="row">
                      <div class="col-sm-6 col-md-6">
                        <h4>Nama  :</h4>
                      </div>
                      <div class="col-sm-6 col-md-6">
                        <h4><?php echo $data['ayah'] ?></h4>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-6 col-md-6">
                        <h4>Tanggal lahir  :</h4>
                      </div>
                      <div class="col-sm-6 col-md-6">
                        <h4><?php echo $data['tgl_ayah'] ?></h4>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-6 col-md-6">
                        <h4>Pekerjaan :</h4>
                      </div>
                      <div class="col-sm-6 col-md-6">
                        <h4><?php echo $data['pekerjaan_ayah'] ?></h4>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-6 col-md-6">
                        <h4>Pendidikan :</h4>
                      </div>
                      <div class="col-sm-6 col-md-6">
                        <h4><?php echo $data['pendidikan_ayah'] ?></h4>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-6 col-md-6">
                        <h4>Alamat :</h4>
                      </div>
                      <div class="col-sm-6 col-md-6">
                        <h4><?php echo $data['alamat_ayah'] ?></h4>
                      </div>
                    </div>
                    <h3>Ibu</h3>
                    <div class="row">
                      <div class="col-sm-6 col-md-6">
                        <h4>Nama  :</h4>
                      </div>
                      <div class="col-sm-6 col-md-6">
                        <h4><?php echo $data['ibu'] ?></h4>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-6 col-md-6">
                        <h4>Tanggal lahir  :</h4>
                      </div>
                      <div class="col-sm-6 col-md-6">
                        <h4><?php echo $data['tgl_ibu'] ?></h4>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-6 col-md-6">
                        <h4>Pekerjaan :</h4>
                      </div>
                      <div class="col-sm-6 col-md-6">
                        <h4><?php echo $data['pekerjaan_ibu'] ?></h4>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-6 col-md-6">
                        <h4>Pendidikan :</h4>
                      </div>
                      <div class="col-sm-6 col-md-6">
                        <h4><?php echo $data['pendidikan_ibu'] ?></h4>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-6 col-md-6">
                        <h4>Alamat :</h4>
                      </div>
                      <div class="col-sm-6 col-md-6">
                        <h4><?php echo $data['alamat_ibu'] ?></h4>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-4 col-md-4 col-md-offset-2 col-sm-offset-2">
                    <h2>Data Wali</h2>
                    <div class="row">
                      <div class="col-sm-6 col-md-6">
                        <h4>Nama  :</h4>
                      </div>
                      <div class="col-sm-6 col-md-6">
                        <h4><?php echo $data['nama_wali'] ?></h4>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-6 col-md-6">
                        <h4>Tanggal lahir:</h4>
                      </div>
                      <div class="col-sm-6 col-md-6">
                        <h4><?php echo $data['tgl'] ?></h4>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-6 col-md-6">
                        <h4>Pekerjaan :</h4>
                      </div>
                      <div class="col-sm-6 col-md-6">
                        <h4><?php echo $data['pekerjaan'] ?></h4>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-6 col-md-6">
                        <h4>Pendidikan :</h4>
                      </div>
                      <div class="col-sm-6 col-md-6">
                        <h4><?php echo $data['pendidikan'] ?></h4>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-6 col-md-6">
                        <h4>Alamat :</h4>
                      </div>
                      <div class="col-sm-6 col-md-6">
                        <h4><?php echo $data['alamat'] ?></h4>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-4 col-md-4 col-md-offset-1 col-sm-offset-1">
                    <h2>Data Pendaftaran</h2>
                    <h3>Pilian Jurusan</h3>
                    <div class="row">
                      <div class="col-sm-6 col-md-6">
                        <h4>Pertama:</h4>
                      </div>
                      <div class="col-sm-6 col-md-6">
                        <h4><?php echo $data['pertama'] ?></h4>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-6 col-md-6">
                        <h4>Kedua :</h4>
                      </div>
                      <div class="col-sm-6 col-md-6">
                        <h4><?php echo $data['kedua'] ?></h4>
                      </div>
                    </div>
                  </div>
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
