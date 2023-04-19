<?php include'header.php'; ?>

    <div class="section">
        <div class="container">

        <?php
            $guru = mysqli_query($conn, "SELECT * FROM guru WHERE id = '".$_GET['id']."' ");

            if(mysqli_num_rows($guru) == 0){
                echo 'berhasil';
            }
            $p            = mysqli_fetch_object($guru);
        
        ?>
              <h3 class="text-center"><a href="guru.php" class="black">Profil Guru</h3>
              <img src="admin/uploads/guru/<?= $p->foto ?>" width="30%" class="image-guru"><br>


             
            <div>
              <table width="600px" class="profil-guru ">
                <tr>
                    <td width="200px">Nama Lengkap</td>
                    <td width="20px">:</td>
                    <td width="280px"><?=$p->nama?></td>
                </tr>

                <tr>
                    <td>Tempat Tanggal Lahir</td>
                    <td width="20px">:</td>
                    <td><?=$p->lahir?></td>
                </tr>

                <tr>
                    <td>NIP.</td>
                    <td width="20px">:</td>
                    <td><?=$p->nip?></td>
                </tr>

                <tr>
                    <td>Pendidikan Terakhir</td>
                    <td width="20px">:</td>
                    <td><?=$p->pendidikan?></td>
                </tr>

                <tr>
                    <td>Status</td>
                    <td width="20px">:</td>
                    <td><?=$p->status?></td>
                </tr>
                </table>
            </div>
            
        </div>

    </div>

<?php include 'footer.php';?>