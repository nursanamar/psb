
<?php 
  include 'cone.php';
session_start();
    if (empty($_SESSION['id'])) {
        echo "<script type='text/javascript'>window.location='http://localhost/psb'</script>";
    }
    $id=$_SESSION['id'];
    $hlmn="notiflist";
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
                <table class="table table-bordered">
                  <thead>
                    <td>#</td>
                    <td>Judul</td>
                    <td>Tanggal</td>
                    <td>Untuk</td>
                    <td>Pembuat</td>
                  </thead>
                  <?php 
                    $ery=mysqli_query($sambung,"SELECT notif.judul, notif.tgl,notif.untuk, staff.nama FROM notif INNER JOIN staff ON notif.id_staff = staff.id_staff");
                    $no=0;
                    if (empty($ery)) {
                      echo "Tidak ada data";
                    } else {
                      while ($data=mysqli_fetch_array($ery)) {
                      $no++;
                      echo "<tr>
                            <td>$no</td>
                            <td>$data[judul]</td>
                            <td>$data[tgl]</td>
                            <td>$data[untuk]</td>
                            <td>$data[nama]</td>
                      </tr>";
                    }
                    
                    }
                   ?>
                </table>
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