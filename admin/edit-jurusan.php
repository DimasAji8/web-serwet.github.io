<?php include 'header.php'?>

<?php
    $jurusan = mysqli_query($conn, "SELECT * FROM jurusan WHERE id = '".$_GET['id']."' ");

    if(mysqli_num_rows($jurusan) == 0){
        echo"<script>window.location='pengguna.php'</script>";
    }
    $p            = mysqli_fetch_object($jurusan);
    $dirupload    = "../admin/uploads/jurusan/";

?>
        <!-- content -->

        <div class="content">

            <div class="container">
               
                <div class="box">
                    <div class="box-header">
                        Edit Jurusan
                    </div>

                    <div class="box-body">

                    <form action="" method="POST" enctype="multipart/form-data">

                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" name="nama" placeholder="Nama Jurusan" value="<?= $p->nama ?>" class="input-control"required>
                        </div>

                        <div class="form-group">
                            <label>Keterangan</label>
                            <textarea name="keterangan" class="input-control" placeholder="Keterangan"><?= $p->keterangan ?></textarea>
                        </div>

                        <div class="form-group">
                            <label>Gambar</label>
                            <img src="../admin/uploads/jurusan/<?= $p->gambar ?>" width="200px" class="image">
                            <input type="hidden" name="gambar2" value="<?= $p->gambar ?>">
                            <input type="file" name="gambar" class="input-control">
                        </div>

                        <button type="button" class="btn" onclick="window.location = 'jurusan.php'">Kembali</button>
                        <input type="submit" name="submit" value="Simpan" class="btn btn-blue">

                     </form>

                        <?php
                            
                            if(isset($_POST['submit'])){

                                $nama = addslashes(ucwords ($_POST['nama']));
                                $ket = addslashes($_POST['keterangan']);
                                $currdate = date('Y-m-d H:i:s');
                               
                                if($_FILES['gambar']['name'] != ''){

                                    $filename = $_FILES['gambar']['name'];
                                    $tmpname = $_FILES['gambar']['tmp_name'];
                                    $filesize = $_FILES['gambar']['size'];
                                    $dirupload = "../admin/uploads/jurusan/";

                                    $formatfile = pathinfo($filename, PATHINFO_EXTENSION);
                                    $rename     = 'jurusan'.time().'.'.$formatfile;
                                    

                                    $allowtedype = array('png','jpg','jpeg','gif');

                                    if(!in_array($formatfile, $allowtedype)){

                                        echo '<div class="alert alert-eror">Format File Tidak Diizinkan!</div>';

                                        return false;

                                    }elseif($filesize > 1000000){

                                        echo '<div class="alert alert-eror">Ukuran File Lebih Dari 1MB!</div>';

                                        return false;
                                    }else{

                                        if(file_exists($dirupload.$_POST['gambar2'])){
                                            unlink($dirupload.$_POST['gambar2']);
                                        }


                                        $upload =  move_uploaded_file($tmpname, $dirupload.$rename);

                                    }


                                }else{

                                    $rename     = $_POST['gambar2'];

                                }

                                    $update = mysqli_query($conn, "UPDATE jurusan SET
                                        nama = '".$nama."',
                                        keterangan = '".$ket."',
                                        gambar = '".$rename."',
                                        updated_at = '".$currdate."'
                                        WHERE id = '".$_GET['id']."'
                                 ");

                                if($update){
                                    echo "<script>window.location='jurusan.php?success=Edit Data Berhasil'</script>";
                                }else{
                                    echo 'Gagal Mengedit'.mysqli_error($conn);
                                }
                            }

                        ?>

                        
                    </div>

                </div>

            </div>

        </div>

<?php include 'footer.php'?>