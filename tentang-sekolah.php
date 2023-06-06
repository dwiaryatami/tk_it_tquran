<?php include 'header.php'; ?>

<div class="section">
    <div class="container">
    <h3 class="text-center">Tentang Sekolah</h3>
    <img src="uploads/identitas/<?= $d->tb_organisasi ?>" width="100%" class="image" style="margin-top: 8px">
    <?= $d->tentang_sekolah ?>
    </div>
</div>
<?php include 'footer.php'; ?>