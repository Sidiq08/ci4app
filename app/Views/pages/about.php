<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<h1>Halaman About</h1>
<?php foreach ($tim as $t) : ?>
    <ul>
        <li><?= $t['nama']; ?></li>
        <li><?= $t['kota']; ?></li>
        <li><?= $t['umur']; ?></li>
    </ul>
<?php endforeach; ?>
<?= $this->endSection(); ?>