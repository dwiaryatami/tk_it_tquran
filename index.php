<?php include 'header.php'; ?>
   <!-- bagian banner -->
<div class="banner" style="background-image: url('uploads/identitas/<?= $d->foto_sekolah ?>');">
  <div class="banner-text">
 
    <div class="container">
    <h3> Selamat Datang di <?= $d->nama ?></h3>
    <p>"Taman Kanak-Kanak Tahfizh Quran Yang Mendidik generasi sholih, cerdas, mandiri, berwawasan dan berakhlaqul islami"</p>
  </div>
  </div>
</div>

<!-- bagian sambutan -->
<div class="section" id="informasi">
  <div class="container text-center">
    <h3>Sambutan Kepala Sekolah </h3>
    <img src="uploads/identitas/<?= $d->foto_kepsek ?>" width="100px">
    <h4><?= $d->nama_kepsek ?> </h4>
    <p><?= $d->sambutan_kepsek ?> </p>
  </div>
</div>

<!-- Bagian Sejarah -->
<div class="section">
  <div class="container">
    <h3 class="text-center">Sejarah</h3>
    
    <p><?= $d->sejarah_sekolah ?> <p>
    
  </div>
</div>
<!-- bagian informasi  -->
<div class="section" id="informasi">
  <div class="container text-center">
    <h3> Informasi Terbaru </h3>

    <?php 
     $informasi = mysqli_query($conn, "SELECT * FROM informasi  ORDER BY id DESC LIMIT 8");
     if(mysqli_num_rows($informasi) > 0){
         while($p = mysqli_fetch_array($informasi)){
    ?>

    <div class="col-4">
      <a href="detail-informasi.php?id=<?= $p['id'] ?>" class="thumbnail-link">
      <div class="thumbnail-box">
        <div class="thumbnail-img" style="background-image: url('uploads/informasi/<?= $p['gambar'] ?>');">

        </div>
        <div class="thumbnail-text">
          <?= substr ($p['judul'], 0, 50 )?>
        </div>

      </div>
         </a>
    </div>
    <?php }}else{ ?>
      Tidak ada data 
      <?php } ?>

  </div>

</div>

<?php include 'footer.php'; ?>

