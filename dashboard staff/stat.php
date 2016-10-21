<?php 
  include 'cone.php';
  include '../randpass.php';
session_start();
    if (empty($_SESSION['id'])) {
        echo "<script type='text/javascript'>window.location='http://localhost/psb'</script>";
    }
    $id=$_SESSION['id'];
    $hlmn="stat";
    $today="SELECT * FROM csba WHERE tgl_regist=CURDATE()";
    $total="SELECT * FROM csba";
    $laki2="SELECT * FROM csba WHERE klmin='L'";
    $perempuan="SELECT * FROM csba WHERE klmin='P'";

 ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashboard</title>
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="../css/sidebar.css">
  <link rel="stylesheet" type="text/css" href="../css/dashboard.css">
  <link rel="stylesheet" type="text/css" href="../css/stat.css">
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
            <div class="row kotak a">
              <div class="judul">
                <h1>Statistik Pendaftar</h1>
              </div>
              <div class="col-lg-12 col-md-12">
                <div class="col-sm-2 col-md-2 today stat">
                  <div class="col-sm-7 col-md7">
                    <p>hari ini</p>
                  </div>
                  <div class="col-sm-5 col-md-5">
                    <p class="count"><?php echo hitung($sambung,$today); ?></p>
                  </div>
                </div>
                <div class="col-sm-2 col-md-2 total stat">
                  <div class="col-sm-7 col-md-7">
                    <p>Total</p>
                  </div>
                  <div class="col-sm-5 col-md-5">
                    <p class="count"><?php echo hitung($sambung,$total); ?></p>
                  </div>
                </div>
                <div class="col-sm-2 col-md-2 laki2 stat">
                  <div class="col-md-7 col-sm-7">
                    <p>laki-laki</p>
                  </div>
                  <div class="col-sm-5 col-md-5">
                    <p class="count"><?php echo hitung($sambung,$laki2); ?></p>
                  </div>
                </div>
                <div class="col-sm-2 col-md-2 permpuan stat">
                  <div class="col-md-7 col-sm-7">
                    <p>Perempuan</p>
                  </div>
                  <div class="col-sm-5 col-md-5">
                    <p class="count"><?php echo hitung($sambung,$perempuan); ?></p>
                  </div>
                </div>
              </div>
            </div>
            <div class="row kotak b">
              <h2>Statistik jurusan</h2>
              <div class="col-sm-8 col-md-8">
                <?php include 'ds.php'; ?>
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