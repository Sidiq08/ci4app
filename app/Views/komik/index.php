<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<h1>Halaman Komik</h1>
<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Handle</th>
        </tr>
    </thead>
    <tbody>
        <?php $i = 1 ?>
        <?php foreach ($komik as $k) : ?>
            <tr>
                <th scope="row"><?= $i++; ?></th>
                <td><img src="\img\<?= $k['sampul']; ?>" style="width:100px"></td>
                <td><?= $k['judul']; ?></td>
                <td><?= $k['penulis']; ?></td>
            </tr>
        <?php endforeach; ?>
</table>
<?= $this->endSection(); ?>