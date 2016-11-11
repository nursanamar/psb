<?php
    $stat="";
    $data="";
    $notif="";
    $notiflist="";
    $lulus="";
    $download="";
    $panitia="";
    $guru="";
    $tes="";
    $datates="";
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
        case 'tes':
            $tes="active";
            break;
        case 'datates':
            $datates="active";
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
                                 <span class='glyphicon glyphicon-user' aria-hidden='true'></span> Panitia <?php echo '$id'; ?>
                             </a>
                        </li>
                        <li>
                            <a href='stat.php' class='$stat'><span class='glyphicon glyphicon-stats' aria-hidden='true'></span> Statistic</a>
                        </li>
                        <li><a href='index.php' class='$data'><span class='glyphicon glyphicon-list-alt' aria-hidden='true'></span>Tabel data csb</a></li>
                        <li><a href='datapanitia.php' class='$panitia'><span class='glyphicon glyphicon-list-alt' aria-hidden='true'></span>Tabel data panitia</a></li>
                        <li><a href='dataguru.php' class='$guru'><span class='glyphicon glyphicon-list-alt' aria-hidden='true'></span>Tabel data guru</a></li>
                        <li><a href='datanilai.php' class='$datates'><span class='glyphicon glyphicon-list-alt' aria-hidden='true'></span>Tabel data nilai</a></li>
                        <li><a href='pengumuman.php' class='$notif'><span class='glyphicon glyphicon-pencil' aria-hidden='true'></span>Buat pengumuman</a></li>
                        <li><a href='listpengumuman.php' class='$notiflist'><span class='glyphicon glyphicon-list' aria-hidden='true'></span>List pengumuman</a></li>
                        <li><a href='siswalulus.php' class='$lulus'><span class='glyphicon glyphicon-ok' aria-hidden='true'></span>Siswa lulus</a></li>
                        <li><a href='tes.php' class='$tes'><span class='glyphicon glyphicon-upload' aria-hidden='true'></span>upload nilai tes tulis</a></li>
                        <li><a href='download.php' class='$download'><span class='glyphicon glyphicon-cloud-download' aria-hidden='true'></span>Download data</a></li>
                        <li><a href='logout.php'><span class='glyphicon glyphicon-log-out' aria-hidden='true'></span>Log-out</a></li>

                    </ul>
                </div>
            </div>";
 ?>
