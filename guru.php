<?php include'header.php'; ?>

    <div class="section">
        <div class="container">

       
              <h3 class="text-center">Data guru</h3>
              <?php
                     $guru = mysqli_query($conn, "SELECT * FROM guru ORDER BY id DESC");
                     if(mysqli_num_rows($guru) > 0){
                        while($j = mysqli_fetch_array($guru)){      
                ?>

                <div class="col-4">
                    <a href="detail-guru.php?id=<?= $j['id']?>" class="thumbnail-link">
                    <div class="thumbnail-box">
                        <div class="thumbnail-img" style="background-image: url(admin/uploads/guru/<?= $j['foto']?>);">

                        </div>

                        <div class="thumbnail-guru">
                            <?= $j['nama']?>
                        </div>

                    </div>
                        </a>
                </div>


                <?php }}else{?>

                    Tidak Ada Data

                    <?php } ?>
        </div>
    </div>

<?php include 'footer.php';?>