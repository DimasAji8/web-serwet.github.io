<?php
    include 'koneksi.php';
    date_default_timezone_set("Asia/Jakarta");

    $identitas = mysqli_query($conn,"SELECT * FROM pengaturan ORDER BY id DESC LIMIT 1");
    $d = mysqli_fetch_object($identitas);

?>
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewreport" content="width=device-width, intial-scale=1, maximum-scale=1, user-scalable=no">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="HandheldFriendly" content="true">
        <link rel="icon" href="admin/uploads/identitas/<?= $d->favicon ?>">
        <title>Website <?= $d->nama?></title>
        <link rel="stylesheet" type="text/css" href="assets/css/style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <body>
            <!--box menu mobile-->
            <div class="box-menu-mobile" id="mobileMenu">
                <span onclick="hideMobileMenu()"><i class="fa-solid fa-circle-xmark"></i></span>
                <ul class="text-center">
                     <li><a href="index.php">Beranda</a></li>
                     <li><a href="tentang-sekolah.php">Tentang Sekolah</a></li>
                     <li><a href="jurusan.php">Ekstrakulikuler</a></li>
                     <li><a href="galeri.php">Galeri</a></li>
                     <li><a href="informasi.php">Pengumuman</a></li>
                     <li><a href="profil-sekolah.php">Profil Sekolah</a></li>
                     <li><a href="https://dapo.kemdikbud.go.id/sekolah/E4FB570B84072BFD3E2A" target="_blank">Pusat Data Pokok</a></li>
                     <li><a href="kontak.php">Kontak</a></li>
                     
                     
                </ul>
            </div>
            <!-- bagian header -->
            <div class="header">

                <div class="container">

                <div class="header-logo">
                    <img src="admin/uploads/identitas/<?= $d->logo?>" width="70">
                    <h1><a href="index.php"><?= $d->nama?></a></h1>
                </div>

                <ul class="header-menu float-left">
                     <li><a href="index.php">Beranda</a></li>
                     <li><a href="tentang-sekolah.php">Tentang Sekolah</a></li>
                     <li><a href="jurusan.php">Ekstrakulikuler</a></li>
                     <li><a href="galeri.php">Galeri</a></li>
                     <li>
                        <a href="#">Informasi<i class="fa fa-caret-down"></i></a>
                <!-- sub menu-->
                <ul class="dropdown">
                    <li><a href="informasi.php">Pengumuman</a></li>
                    <li><a href="profil-sekolah.php">Profil Sekolah</a></li>
                    <li><a href="https://dapo.kemdikbud.go.id/sekolah/E4FB570B84072BFD3E2A" target="_blank">Pusat Data Pokok</a></li>
                    
                </ul>
                    </li>
                     <li><a href="kontak.php">Kontak</a></li>
                     <li><a href="login.php">Login Admin</a></li>
                </ul>

                <div class="mobile-menu-btn text-right">
                    <a href="#" onclick="showMobileMenu()"><i class="fa-solid fa-bars"></i></a>
                </div>

                </div>

            </div>