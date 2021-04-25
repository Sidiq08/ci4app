<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<a href="/komik/create" type="button" class="btn btn-primary">Tambah Data</a>
<h1>Halaman Komik</h1>
<?php if (session()->getFlashdata('pesan')) : ?>
    <div class="alert alert-success" role="alert">
        <?= session()->getFlashdata('pesan'); ?>
    </div>
<?php endif; ?>
<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Sampul</th>
            <th scope="col">Judul</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php $i = 1 ?>
        <?php foreach ($komik as $k) : ?>
            <tr>
                <th scope="row"><?= $i++; ?></th>
                <td><img src="\img\<?= $k['sampul']; ?>" style="width:100px"></td>
                <td><?= $k['judul']; ?></td>
                <td><a href="/komik/<?= $k['slug']; ?>" type="button" class="btn btn-primary">Detail</a></td>
            </tr>
        <?php endforeach; ?>
</table>
<?= $this->endSection(); ?>