<?php

    include '../koneksi.php';

    if(isset($_GET['idpengguna'])){
        $delete = mysqli_query($conn,"DELETE FROM pengguna WHERE id = '".$_GET['idpengguna']."' ");
        echo "<script>window.location = 'pengguna.php'</script>";
    }

    if(isset($_GET['idjurusan'])){

        $dirupload = "../admin/uploads/jurusan/";
        $jurusan = mysqli_query($conn,"SELECT gambar FROM jurusan WHERE id = '".$_GET['idjurusan']."'");

        if(mysqli_num_rows($jurusan) > 0){

            $p = mysqli_fetch_object($jurusan);

            if(file_exists($dirupload.$p->gambar)){

                unlink($dirupload.$p->gambar);
            }
        }

        $delete = mysqli_query($conn,"DELETE FROM jurusan WHERE id = '".$_GET['idjurusan']."' ");
        echo "<script>window.location = 'jurusan.php'</script>";
    }

    if(isset($_GET['idgaleri'])){

        $dirupload = "../admin/uploads/galeri/";
        $galeri = mysqli_query($conn,"SELECT foto FROM galeri WHERE id = '".$_GET['idgaleri']."'");

        if(mysqli_num_rows($galeri) > 0){

            $p = mysqli_fetch_object($galeri);

            if(file_exists($dirupload.$p->foto)){

                unlink($dirupload.$p->foto);
            }
        }

        $delete = mysqli_query($conn,"DELETE FROM galeri WHERE id = '".$_GET['idgaleri']."' ");
        echo "<script>window.location = 'galeri.php'</script>";
    }

    if(isset($_GET['idinformasi'])){

        $dirupload = "../admin/uploads/informasi/";
        $informasi = mysqli_query($conn,"SELECT gambar FROM informasi WHERE id = '".$_GET['idinformasi']."'");

        if(mysqli_num_rows($informasi) > 0){

            $p = mysqli_fetch_object($informasi);

            if(file_exists($dirupload.$p->gambar)){

                unlink($dirupload.$p->gambar);
            }
        }

        $delete = mysqli_query($conn,"DELETE FROM informasi WHERE id = '".$_GET['idinformasi']."' ");
        echo "<script>window.location = 'informasi.php'</script>";
    }


?>