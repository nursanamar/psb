<?php
  session_start();
  $f="";
  if (isset($_SESSION["a"])) {
      $f="<span class='alert alert-danger salah' id='salah'>Masih ada data yang belum terisi!</span>";
    echo "$_SESSION[a]";
  }
	echo "<nav class='navbar navbar-fixed-top a'>
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
            <li class='active'><a href='../psb'>Home</a></li>
            <li><a href='#about'>Support</a></li>
           <li class='dropdown'>
              <a href='#' class='dropdown-toggle' data-toggle='dropdown' role='button' aria-haspopup='true' aria-expanded='false' id='login'>Login <span class='caret'></span></a>
              <ul class='dropdown-menu aa'>
                <div class='container aa'>
                  <form class='form-singin' action='logpost.php' method='post'>
                      <h2 class='form-singin-heading'></h2>
                      <input type='text' name='id' class='form-control' placeholder='ID'>
                      <input type='password' name='pass' class='form-control' placeholder='Password'>
                      $f
                      <button class='btn btn-primary btn-block aaa'>Login</button>
                  </form>
                </div>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>";
 ?>