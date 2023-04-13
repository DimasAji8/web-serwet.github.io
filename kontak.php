<?php include'header.php'; ?>
<?  $d = mysqli_fetch_object($identitas);?>

    <div class="section">
        <div class="container">

       
              <h3 class="text-center">Kontak</h3>
              
              <div class="col-4">
                <p style="margin-bottom:15px"><b><i class="fa-solid fa-location-dot"></i> Alamat :</b> <br> <?= $d->alamat?></p>
                <p style="margin-bottom:15px"><b><i class="fa-sharp fa-solid fa-phone"></i> Telepon :</b> <br> <?= $d->telepon?></p>
                <p style="margin-bottom:15px"><b><i class="fa-solid fa-envelope"></i> Email :</b> <br> <?= $d->email?></p>
                <p style="margin-bottom:15px"><b><i class="fa-brands fa-youtube"></i> Youtube :</b> <br> <?= $d->youtube?></p>
              </div>

              <div class="box-gmaps">
              <iframe src="<?= $d->google_maps?>" width="75%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div>
        </div>
    </div>

<?php include 'footer.php';?>