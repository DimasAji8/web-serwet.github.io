<?php include'header.php'; ?>

    <div class="section">
        <div class="container">

        <?php
            $jurusan = mysqli_query($conn, "SELECT * FROM jurusan WHERE id = '".$_GET['id']."' ");

            if(mysqli_num_rows($jurusan) == 0){
                echo 'berhasil';
            }
            $p            = mysqli_fetch_object($jurusan);
        
        ?>
              <h3 class="text-center"><?=  $p->nama ?></h3>
              <img src="admin/uploads/jurusan/<?= $p->gambar ?>" width="65%" class="image">
              <?= $p->keterangan?>
        </div>
    </div>

<?php include 'footer.php';?>