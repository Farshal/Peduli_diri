<?php
session_start();
if (empty($_SESSION['nik'])) { ?>
    <script>
        alert('!!! Maaf Anda Harus Masuk Terlebih Dahulu.')
        window.location.assign('index.php');
    </script>
<?php } ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User - Peduli Diri</title>
    <script type="text/javascript" src="js/jquery-3.6.0.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>
  
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Poppins:wght@100;400;600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/custom.css">
<link rel="stylesheet" href="css/custom_user.css">
</head>

<body>
    
    <div class="row">
<div class="col">
    <div class="sidebar">
        <div class="logo-details">
            <i class="material-icons">health_and_safety</i>
            <span class="logo_name">Peduli Diri</span>
        </div>
        <ul class="nav-links">
            <li>
                <a href="user.php">
                    <i class="material-icons">home</i>
                    <span class="link_name">Dashboard</span>
                </a>
            </li>
            <li>
                <a  href="?url=tulis_catatan">
                    <i class="material-icons">add_circle</i>
                    <span class="link_name">Tambah Riwayat</span>
                </a>
            </li>
            <li>
                <a href="?url=catatan_perjalanan">
                    <i class="material-icons">location_city</i>
                    <span class="link_name">Riwayat Perjalanan</span>
                </a>
            </li>
            <li>
                <a href="logout.php">
                    <i class="material-icons">logout</i>
                    <span class="link_name logout">Keluar</span>
                </a>
            </li>
        </ul>
    </div>
    <div class="he"">
    <?php
                        $url = @$_GET['url'];
                        if(!empty($url)) {
                            switch ($url) {
                                case 'tulis_catatan':
                                include'tulis_catatan.php';
                                break;

                                case 'catatan_perjalanan':
                                include'catatan_perjalanan.php';
                                break;

                                case 'edit_catatan':
                                    include'edit_catatan.php';
                                    break;
                                
                                default:
                                    echo"<p>Halaman Tidak Ditemukan<p>";
                                    break;
                            }
                        }else {?>
                        <div class="row">
                            <div class="col-5">
                                <h2 class="hi">Peduli Diri</h2>
                                <p class="hp">Catat Riwayat <br> Perjalanan Anda <br> Bersama Kami</p>
                            </div>
                            <div class="col-7">
                                <img src="img/pict.jpg" alt="" class="img-fluid mt-0">
                            </div>
                            </div>
                                  <div class="mt-6 ho"> 
                                <?php
                            echo"<p> Selamat Datang ".$_SESSION['nama_lengkap']." !!</p>";
                        }
                        ?>
     
    </div>
    </div>
</html>
