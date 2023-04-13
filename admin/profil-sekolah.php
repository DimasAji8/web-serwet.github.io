<?php include 'header.php'?>
<? $d = mysqli_fetch_object($profil);?>

        <!-- content -->

        <div class="content">

            <div class="container">
               
                <div class="box">
                    <div class="box-header">
                        Profil Sekolah
                    </div>

                    <div class="box-body">

                    <?php

                        if(isset($_GET['success'])){

                        echo "<div class='alert alert-success'>".$_GET['success']."</div>";

                        }

                    ?>

                    <form action="" method="POST" enctype="multipart/form-data">

                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" name="nama" placeholder="Nama Sekolah" value="<?=$d->nama?>" class="input-control"required>
                        </div>

                        <div class="form-group">
                            <label>NPSN</label>
                            <input type="text" name="npsn" placeholder="NPSN" value="<?=$d->npsn?>" class="input-control"required>
                        </div>

                        <div class="form-group">
                            <label>NSS</label>
                            <input type="text" name="nss" placeholder="NSS" value="<?=$d->nss?>" class="input-control"required>
                        </div>

                        <div class="form-group">
                            <label>Jenjang Pendidikan</label>
                            <input type="text" name="jenjang" placeholder="Jenjang Pendidikan" value="<?=$d->jenjang?>" class="input-control"required>
                        </div>

                        <div class="form-group">
                            <label>Status Sekolah</label>
                            <input type="text" name="status" placeholder="Status Sekolah" value="<?=$d->status?>" class="input-control"required>
                        </div>

                        <div class="form-group">
                            <label>Akreditasi</label>
                            <input type="text" name="akreditasi" placeholder="Akreditasi Sekolah" value="<?=$d->akreditasi?>" class="input-control"required>
                        </div>

                        <div class="form-group">
                            <label>Waktu Belajar</label>
                            <input type="text" name="waktu_belajar" placeholder="Waktu Belajar" value="<?=$d->waktu_belajar?>" class="input-control"required>
                        </div>

                        <div class="form-group">
                            <label>Alamat</label>
                            <input type="text" name="alamat" placeholder="Alamat Sekolah" value="<?=$d->alamat?>" class="input-control"required>
                        </div>

                        <div class="form-group">
                            <label>Kelurahan</label>
                            <input type="text" name="kel" placeholder="Kelurahan" value="<?=$d->kelurahan?>" class="input-control"required>
                        </div>

                        <div class="form-group">
                            <label>Kecamatan</label>
                            <input type="text" name="kec" placeholder="Kecamatan" value="<?=$d->kecamatan?>" class="input-control"required>
                        </div>

                        <div class="form-group">
                            <label>Kota/Kabupaten</label>
                            <input type="text" name="kota" placeholder="Kota / Kabupaten" value="<?=$d->kota?>" class="input-control"required>
                        </div>

                        <div class="form-group">
                            <label>Provinsi</label>
                            <input type="text" name="prov" placeholder="Provinsi" value="<?=$d->provinsi?>" class="input-control"required>
                        </div>

                        <div class="form-group">
                            <label>SK Pendirian Sekolah</label>
                            <input type="text" name="sk_pendirian" placeholder="SK Pendirian Sekolah" value="<?=$d->sk_pendirian?>" class="input-control"required>
                        </div>

                        <div class="form-group">
                            <label> Tanggal SK Pendirian</label>
                            <input type="text" name="tgl_pendirian" placeholder="Tanggal SK Pendirian" value="<?=$d->tgl_pendirian?>" class="input-control"required>
                        </div>

                        <div class="form-group">
                            <label> Status Kepemilikan</label>
                            <input type="text" name="status_milik" placeholder="Status Kepemilikan" value="<?=$d->$status_milik?>" class="input-control"required>
                        </div>

                        <div class="form-group">
                            <label>SK Izin Operasional</label>
                            <input type="text" name="sk_operasional" placeholder="SK Izin Operasional" value="<?=$d->sk_operasional?>" class="input-control"required>
                        </div>

                        <div class="form-group">
                            <label> Tanggal SK Izin Operasional</label>
                            <input type="text" name="tgl_operasional" placeholder="Tanggal SK Izin Operasional" value="<?=$d->tgl_operasional?>" class="input-control"required>
                        </div>

                        <div class="form-group">
                            <label>Nomor Telepon</label>
                            <input type="text" name="telp" placeholder="Nomor Telepon" value="<?=$d->telepon?>" class="input-control"required>
                        </div>

                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" placeholder="Email Sekolah" value="<?= $d->email ?>" class="input-control"required>
                        </div>
   

                        <div class="form-group">
                            <label>Luas Tanah</label>
                            <input type="text" name="tanah" placeholder="Luas Tanah" value="<?=$d->luas_tanah?>" class="input-control"required>
                        </div>

                        <div class="form-group">
                            <label>Luas Bangunan</label>
                            <input type="text" name="bangunan" placeholder="Luas Bangungan" value="<?=$d->luas_bangunan?>" class="input-control"required>
                        </div>

                        

                        <input type="submit" name="submit" value="Simpan Perubahan" class="btn btn-blue">
                       
                     </form>

                        <?php
                            
                            if(isset($_POST['submit'])){

                                $nama = addslashes(ucwords ($_POST['nama']));
                                $npsn = addslashes($_POST['npsn']);
                                $nss = addslashes($_POST['nss']);
                                $jenjang = addslashes($_POST['jenjang']);
                                $status = addslashes($_POST['status']);
                                $akreditasi = addslashes($_POST['akreditasi']);
                                $waktu_belajar = addslashes($_POST['waktu_belajar']);
                                $alamat = addslashes($_POST['alamat']);
                                $kelurahan = addslashes($_POST['kel']);
                                $kecamatan = addslashes($_POST['kec']);
                                $kota = addslashes($_POST['kota']);
                                $provinsi = addslashes($_POST['prov']);
                                $sk_pendirian = addslashes($_POST['sk_pendirian']);
                                $tgl_pendirian = addslashes($_POST['tgl_pendirian']);
                                $status_milik = addslashes($_POST['status_milik']);
                                $sk_operasional = addslashes($_POST['sk_operasional']);
                                $tgl_operasional = addslashes($_POST['tgl_operasional']);
                                $telp = addslashes($_POST['telp']);
                                $email = addslashes($_POST['email']);
                                $luas_tanah = addslashes($_POST['tanah']);
                                $luas_bangunan = addslashes($_POST['bangunan']);
                                $currdate = date('Y-m-d H:i:s');
                               
                                 


                                    $update = mysqli_query($conn, "UPDATE pengaturan SET
                                        nama = '".$nama."',
                                        npsn = '".$npsn."',
                                        nss = '".$nss."',
                                        jenjang = '".$jenjang."',
                                        status = '".$status."',
                                        akreditasi = '".$akreditasi."',
                                        waktu_belajar = '".$waktu_belajar."',
                                        alamat = '".$alamat."',
                                        kelurahan = '".$kelurahan."',
                                        kecamatan = '".$kecamatan."',
                                        kota = '".$kota."',
                                        provinsi = '".$provinsi."',
                                        sk_pendirian = '".$sk_pendirian."',
                                        tgl_pendirian = '".$tgl_pendirian."',
                                        status_milik = '".$status_milik."',
                                        sk_operasional = '".$sk_operasional."',
                                        tgl_operasional = '".$tgl_operasional."',
                                        telepon = '".$telp."',
                                        email = '".$email."',
                                        luas_tanah = '".$luas_tanah."',
                                        luas_bangunan = '".$luas_bangunan."',
                                        updated_at = '".$currdate."'
                                        WHERE id = '".$d->id."'
                                 ");

                                if($update){
                                    echo "<script>window.location='profil-sekolah.php?success=Edit Data Berhasil'</script>";
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