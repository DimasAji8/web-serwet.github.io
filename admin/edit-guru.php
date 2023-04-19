<?php include 'header.php'?>

<?php
    $guru = mysqli_query($conn, "SELECT * FROM guru WHERE id = '".$_GET['id']."' ");

    if(mysqli_num_rows($guru) == 0){
        echo"<script>window.location='guru.php'</script>";
    }
    $p            = mysqli_fetch_object($guru);
    $dirupload    = "../admin/uploads/guru/";

?>
        <!-- content -->

        <div class="content">

            <div class="container">
               
                <div class="box">
                    <div class="box-header">
                        Edit Guru
                    </div>

                    <div class="box-body">

                    <form action="" method="POST" enctype="multipart/form-data">

                
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" name="nama" placeholder="Nama" value="<?= $p->nama ?>" class="input-control"required>
                        </div>

                        <div class="form-group">
                            <label>Tempat Tanggal lahir</label>
                            <input type="text" name="ttl" placeholder="Tempat Tanggal Lahir" value="<?= $p->lahir ?>" class="input-control"required>
                        </div>

                        <div class="form-group">
                            <label>NIP</label>
                            <input type="text" name="nip" placeholder="Nomor Induk Pegawai" value="<?= $p->nip ?>" class="input-control"required>
                        </div>

                        <div class="form-group">
                            <label>Pendidikan Terakhir</label>
                            <input type="text" name="pendidikan" placeholder="Pendidikan Terakhir" value="<?= $p->pendidikan ?>" class="input-control"required>
                        </div>

                        <div class="form-group">
                            <label>Status</label>
                            <input type="text" name="status" placeholder="status" value="<?= $p->status ?>" class="input-control"required>
                        </div>

                        <div class="form-group">
                            <label>Gambar</label>
                            <img src="../admin/uploads/guru/<?= $p->foto ?>" width="200px" class="image">
                            <input type="hidden" name="gambar2" value="<?= $p->foto ?>">
                            <input type="file" name="gambar" class="input-control">
                        </div>

                        <button type="button" class="btn" onclick="window.location = 'galeri.php'">Kembali</button>
                        <input type="submit" name="submit" value="Simpan" class="btn btn-blue">

                     </form>

                        <?php
                            
                            if(isset($_POST['submit'])){

                                $nama = addslashes(ucwords ($_POST['nama']));
                                $lahir = addslashes(ucwords ($_POST['ttl']));
                                $nip = addslashes(ucwords ($_POST['nip']));
                                $pendidikan = addslashes(ucwords ($_POST['pendidikan']));
                                $status = addslashes(ucwords ($_POST['status']));
                                $currdate = date('Y-m-d H:i:s');
                               
                                if($_FILES['gambar']['name'] != ''){

                                    $filename = $_FILES['gambar']['name'];
                                    $tmpname = $_FILES['gambar']['tmp_name'];
                                    $filesize = $_FILES['gambar']['size'];
                                    $dirupload = "../admin/uploads/guru/";

                                    $formatfile = pathinfo($filename, PATHINFO_EXTENSION);
                                    $rename     = 'guru'.time().'.'.$formatfile;
                                    

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

                                    $update = mysqli_query($conn, "UPDATE guru SET
                                        nama = '".$nama."',
                                        lahir = '".$lahir."',
                                        nip = '".$nip."',
                                        pendidikan = '".$pendidikan."',
                                        status = '".$status."',
                                        foto = '".$rename."',
                                        updated_at = '".$currdate."'
                                        WHERE id = '".$_GET['id']."'
                                 ");

                                if($update){
                                    echo "<script>window.location='guru.php?success=Edit Data Berhasil'</script>";
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