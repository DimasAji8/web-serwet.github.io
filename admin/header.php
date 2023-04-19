<?php
    session_start();
    include '../koneksi.php';
    if(!isset($_SESSION['status_login'])){
        echo "<script>window.location = '../login.php?msg=Harap Login Terlebih Dahulu!'</script>";
    }
    date_default_timezone_set("Asia/Jakarta");

    $identitas = mysqli_query($conn,"SELECT * FROM pengaturan ORDER BY id DESC LIMIT 1");
    $d = mysqli_fetch_object($identitas);

?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="icon" href="../admin/uploads/identitas/<?= $d->favicon ?>">
        <title>Panel Admin - <?= $d->nama ?></title>
        <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script src="https://cdn.tiny.cloud/1/8lmr97dk31zz0mzop1ryo2s9wax3ynigt9j3vt8gzhrwbzgi/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
        <script>
        tinymce.init({
                selector: '#keterangan',
                plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
                toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck typography | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
                tinycomments_mode: 'embedded',
                tinycomments_author: 'Author name',
                mergetags_list: [
                    { value: 'First.Name', title: 'First Name' },
                    { value: 'Email', title: 'Email' },
                ]
                });
  </script>
    </head>

    <body class="bg-light">

        <!-- navbar -->
        <div class="navibar">

        <div class="container">

        <!-- navbar brand -->
        <h2 class="navi-brand float-left"><a href="index.php"><?= $d->nama ?></a></h2>

        <!-- navbar menu -->
        <ul class="navi-menu float-left">
            <li><a href="index.php">Dashboard</a></li>

            <?php if($_SESSION['ulevel'] == 'Super Admin'){ ?>
            
                <li><a href="pengguna.php">Pengguna</a></li>

            <?php }elseif($_SESSION['ulevel'] == 'Admin'){?>
                <li>
                <a href="#">Data<i class="fa fa-caret-down"></i></a>
                <!-- sub menu-->
                <ul class="dropdown">
                    <li><a href="guru.php">Guru</a></li>
                    <li><a href="galeri.php">Galeri</a></li>
                    <li><a href="informasi.php">Informasi</a></li>
                </ul>
            </li>
            <li>
                <a href="#">Pengaturan<i class="fa fa-caret-down"></i></a>
                <!-- sub menu-->
                <ul class="dropdown">
                    <li><a href="identitas-sekolah.php">Identitas Sekolah</a></li>
                    <li><a href="tentang-sekolah.php">Tentang Sekolah</a></li>
                    <li><a href="kepala-sekolah.php">Kepala Sekolah</a></li>
                    <li><a href="profil-sekolah.php">Profil Sekolah</a></li>
                </ul>
            </li>

             <?php } ?>

            <li>
                <a href="#"><?=$_SESSION['uname']?> (<?=$_SESSION['ulevel']?>)<i class="fa fa-caret-down"></i></a>
                <!-- sub menu-->

                <ul class="dropdown">
                <li><a href="ubah-password.php">Ubah Password</a></li>
                <li><a href="logout.php">Keluar</a></li>
                </ul>
            </li>
        </ul>

        <div class="clearfix"></div>

         </div>

        </div>