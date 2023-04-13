<?php include'header.php'; ?>
<?  $d = mysqli_fetch_object($pengaturan);?>

    <div class="section">
        <div class="container">

       
              <h3 class="text-center">Profil Sekolah</h3>

            <div class="border-tbl">
              <table width="600px" class="profil-tbl">
                <tr>
                    <td width="200px">Nama Sekolah</td>
                    <td width="20px">:</td>
                    <td width="280px"><?=$d->nama?></td>
                </tr>

                <tr>
                    <td>NPSN</td>
                    <td width="20px">:</td>
                    <td><?=$d->npsn?></td>
                </tr>

                <tr>
                    <td>NSS</td>
                    <td width="20px">:</td>
                    <td><?=$d->nss?></td>
                </tr>

                <tr>
                    <td>Jenjang Pendidikan</td>
                    <td width="20px">:</td>
                    <td><?=$d->jenjang?></td>
                </tr>

                <tr>
                    <td>Status Sekolah</td>
                    <td width="20px">:</td>
                    <td><?=$d->status?></td>
                </tr>

                <tr>
                    <td>Akreditasi</td>
                    <td width="20px">:</td>
                    <td><?=$d->akreditasi?></td>
                </tr>

                <tr>
                    <td>Alamat Sekolah</td>
                    <td width="20px">:</td>
                    <td><?=$d->alamat?></td>
                </tr>

                <tr>
                    <td>Kode Pos</td>
                    <td width="20px">:</td>
                    <td><?=$d->kode_pos?></td>
                </tr>

                <tr>
                    <td>Kelurahan</td>
                    <td width="20px">:</td>
                    <td><?=$d->kelurahan?></td>
                </tr>
                <tr>
                    <td>Kecamatan</td>
                    <td width="20px">:</td>
                    <td><?=$d->kecamatan?></td>
                </tr>

                <tr>
                    <td>Kota / Kabupaten</td>
                    <td width="20px">:</td>
                    <td><?=$d->kota?></td>
                </tr>

                <tr>
                    <td>Provinsi</td>
                    <td width="20px">:</td>
                    <td><?=$d->provinsi?></td>
                </tr>

                <tr>
                    <td>SK Pendirian Sekolah</td>
                    <td width="20px">:</td>
                    <td><?=$d->sk_pendirian?></td>
                </tr>

                <tr>
                    <td>Tanggal SK Pendirian</td>
                    <td width="20px">:</td>
                    <td><?=$d->tgl_pendirian?></td>
                </tr>

                <tr>
                    <td>Status Kepemilikan</td>
                    <td width="20px">:</td>
                    <td><?=$d->status_milik?></td>
                </tr>

                <tr>
                    <td>SK Izin Operasional</td>
                    <td width="20px">:</td>
                    <td><?=$d->sk_operasional?></td>
                </tr>

                <tr>
                    <td>Tgl SK Izin Operasional</td>
                    <td width="20px">:</td>
                    <td><?=$d->tgl_operasional?></td>
                </tr>

                <tr>
                    <td>Nomor Telepon</td>
                    <td width="20px">:</td>
                    <td><?=$d->telepon?></td>
                </tr>

                <tr>
                    <td>Alamat Email</td>
                    <td width="20px">:</td>
                    <td><?=$d->email?></td>
                </tr>

                <tr>
                    <td>Waktu Belajar</td>
                    <td width="20px">:</td>
                    <td><?=$d->waktu_belajar?></td>
                </tr>

                <tr>
                    <td>Luas Tanah</td>
                    <td width="20px">:</td>
                    <td><?=$d->luas_tanah?></td>
                </tr>

                <tr>
                    <td>Luas Bangunan</td>
                    <td width="20px">:</td>
                    <td><?=$d->luas_bangunan?></td>
                </tr>

              </table>
            </div>

        </div>
    </div>

<?php include 'footer.php';?>