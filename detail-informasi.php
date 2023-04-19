<?php include'header.php'; ?>

    <div class="section">
        <div class="container">

        <?php
             $informasi = mysqli_query($conn, "SELECT * FROM informasi LEFT JOIN pengguna ON pengguna.id = informasi.created_by WHERE informasi.id = '".$_GET['id']."' ");

             if(mysqli_num_rows($informasi) == 0){
                 echo"<script>window.location='index.php'</script>";
             }
             $p            = mysqli_fetch_object($informasi);
        
        ?>
              <h3 class="text-center"><a href="guru.php" class="black"><?=  $p->judul ?></h3>
              <small>Dibuat pada <?= date('d/m/y', strtotime($p->created_at)) ?>, Oleh <?= $p->nama ?></small><br>
              <img src="admin/uploads/informasi/<?= $p->gambar ?>" width="65%" class="image" style="margin-top: 7px" ><br><br>
              <?= $p->keterangan?>
        </div>
    </div>

<?php include 'footer.php';?>