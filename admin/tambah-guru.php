<?php include 'header.php'?>
        <!-- content -->

        <div class="content">

            <div class="container">
               
                <div class="box">
                    <div class="box-header">
                        Tambah Data Guru
                    </div>

                    <div class="box-body">
                        <form action="" method="POST" enctype="multipart/form-data">

                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" name="nama" placeholder="" class="input-control"required>
                        </div>

                        <div class="form-group">
                            <label>Tempat Tanggal Lahir</label>
                            <input type="text" name="ttl" placeholder="" class="input-control"required>
                        </div>

                        <div class="form-group">
                            <label>NIP</label>
                            <input type="text" name="nip" placeholder="" class="input-control"required>
                        </div>

                        <div class="form-group">
                            <label>Pendidikan Terakhir</label>
                            <input type="text" name="pendidikan" placeholder="" class="input-control"required>
                        </div>

                        <div class="form-group">
                            <label>Status</label>
                            <input type="text" name="status" placeholder="" class="input-control"required>
                        </div>

                        <div class="form-group">
                            <label>Gambar</label>
                            <input type="file" name="gambar" class="input-control" required>
                        </div>


                        <button type="button" class="btn" onclick="window.location = 'galeri.php'">Kembali</button>
                        <input type="submit" name="submit" value="Simpan" class="btn btn-blue">

                        </form>

                        <?php
                            
                            if(isset($_POST['submit'])){

                                //print_r($_FILES['gambar']);

                                $nama = addslashes(ucwords ($_POST['nama']));
                                $lahir = addslashes(ucwords ($_POST['ttl']));
                                $nip = addslashes(ucwords ($_POST['nip']));
                                $pendidikan = addslashes(ucwords ($_POST['pendidikan']));
                                $status = addslashes(ucwords ($_POST['status']));

                                    // ini buat persyaratan uploadnya//

                                $filename = $_FILES['gambar']['name'];
                                $tmpname = $_FILES['gambar']['tmp_name'];
                                $filesize = $_FILES['gambar']['size'];

                                //ini direktori tempat upload filenya-- bikin folder buat uploadnya//
                                $dirupload = "../admin/uploads/guru/";

                                $formatfile = pathinfo($filename, PATHINFO_EXTENSION);
                                $rename     = 'guru'.time().'.'.$formatfile;
                                
                                    // ini bentuk file yang diizinin//
                                $allowtedype = array('png','jpg','jpeg','gif');

                                    if(!in_array($formatfile, $allowtedype)){

                                             echo '<div class="alert alert-eror">Format File Tidak Diizinkan!</div>';
                                    }elseif($filesize > 1000000){

                                        echo '<div class="alert alert-eror">Ukuran File Lebih Dari 1MB!</div>';
                                    }else{

                                            // ini upload//

                                        $upload =  move_uploaded_file($tmpname, $dirupload.$rename);
                                        
                                        //ini buat upload ke database//

                                        $simpan = mysqli_query($conn,"INSERT INTO guru VALUES(
                                        null,
                                        '".$nama."',
                                        '".$lahir."',
                                        '".$nip."',
                                        '".$pendidikan."',
                                        '".$status."',
                                        '".$rename."',
                                        null,
                                        null
                                        )");
            
            
                                    if($simpan){
                                        echo "<script>window.location='guru.php?success=Edit Data Berhasil'</script>";
                                    }else{
                                            echo 'Gagal Simpan'.mysqli_error($conn);
                                        }  

                                }

                                
                             }

                                
                            
                        ?>

                        
                    </div>

                </div>

            </div>

        </div>

<?php include 'footer.php'?>