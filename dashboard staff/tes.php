<?php
  include 'cone.php';
session_start();
    if (empty($_SESSION['id'])) {
      echo "<script type='text/javascript'>window.location='".DOMAIN."'</script>";
    }
    $id=$_SESSION['id'];
    $hlmn="tes";
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
              <div class="col-lg-12">
                <h2>Upload file .xls</h2>
                <p>Untuk file .xls gunakanlah format yang telah disediakan dapat di download di sini</p>
                <form action="uploadtes.php" method="post" enctype="multipart/form-data">
                  <input type="file" name="file" accept=".xls">
                  <input type="submit" name="submit">
                </form>
                <?php
                  if ((isset($_GET['s']) && isset($_GET['g']) && isset($_GET['t']))) {
                    echo "<div class='alert alert-success' role='alert'>
                      <strong>Berhasil!</strong> Upload file berhasil, sukses : ".$_GET['s'].", gagal : ".$_GET['g'].", total : ".$_GET['t']."
                    </div>";
                  }
                 ?>
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
