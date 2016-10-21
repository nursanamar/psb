<?php
    $stat="";
    $data="";
    $notif="";
    $notiflist="";
    $lulus="";
    $download="";
    $panitia="";
    $guru="";
    switch ($hlmn) {
        case 'stat':
            $stat="active";
            break;
        case 'data':
            $data="active";
            break;
        case 'notif':
            $notif="active";
            break;
        case 'notiflist':
            $notiflist="active";
            break;
        case 'lulus':
            $lulus="active";
            break;
        case 'download':
            $download="active";
            break;
        case 'panitia':
            $panitia="active";
            break;
        case 'guru':
            $guru="active";
            break;
        default:
            # code...
            break;
    }
    echo "<div id='sidebar-wrapper'>
                <div class='sidebar-nav'>
                    <ul>
                        <li class='sidebar-brand'>
                            <a href='#' class='navbar-brand'>
                                 <span class='glyphicon glyphicon-user' aria-hidden='true'></span> Panitia <?php echo ''; ?>
                             </a>
                        </li>
                        <li><a href='",base_url(),"index.php/da/' class='$data'><span class='glyphicon glyphicon-list-alt' aria-hidden='true'></span>Tabel data csb</a></li>
                        <li><a href='",base_url(),"index.php/da/notif' class='$notiflist'><span class='glyphicon glyphicon-list' aria-hidden='true'></span>pengumuman</a></li>
                          <li><a href='",base_url(),"index.php/da/loguot'><span class='glyphicon glyphicon-log-out' aria-hidden='true'></span>Log-out</a></li>
                          
                        
                    </ul>
                </div>
            </div>";
 ?>