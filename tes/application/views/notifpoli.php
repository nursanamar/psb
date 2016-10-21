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
                		<a href="<?php echo base_url()."index.php/kesehatan/lihatnotif/".$lnotif->id_notif; ?>" class="list-group-item">
                 			<h4 class="list-group-item-heading"><?php echo "$lnotif->judul"; ?></h4>
                 			<p class="list-group-item-text"><?php echo substr($lnotif->isi, 0,73)."..."; ?><br><small><?php echo "$lnotif->tgl"; ?></small></p>
                 		</a>
                	<?php
                	} ?>
                </div>
              </ul>
            </li>
            <li><a href='<?php echo base_url()."index.php/kesehatan/logout"; ?>'>logout</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="row c">
      <div class="col-sm-12 col-md-12">
        <span><a href="<?php echo base_url()."index.php/kesehatan"; ?>"> << kembali</a></span>
        <div class="well">
          <?php foreach ($isi->result() as $data) {
            # code...
          } ?>
          <h2 align="center"><?php echo "$data->judul"; ?></h2>
          <span><?php echo "$data->tgl"; ?></span><br>
          <p><?php echo "$data->isi"; ?></p>
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