<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<h1>Halaman Detail</h1>
<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Sampul</th>
            <th scope="col">Judul</th>
            <th scope="col">Penulis</th>
            <th scope="col">Penerbit</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <a href="\komik" type="button" class="btn btn-primary">kembali</a>
        <?php $i = 1 ?>
        <tr>
            <th scope="row"><?= $i++; ?></th>
            <td><img src="/img/<?= $komik['sampul']; ?>" style="width:100px"></td>
            <td><?= $komik['judul']; ?></td>
            <td><?= $komik['penulis']; ?></td>
            <td><?= $komik['penerbit']; ?></td>
            <td>
                <a href="/komik/edit/<?= $komik['slug']; ?>" type="button" class="btn btn-warning">Edit</a>

                <form action="/komik/<?= $komik['id']; ?>" method="post" class="d-inline">
                    <!-- Keamanan Spoffing -->
                    <?= csrf_field(); ?>
                    <input type="hidden" name="_method" value="DELETE">
                    <!-- Akhir Spoffing -->
                    <button type="submit" class="btn btn-danger" onclick="return confirm('apakahh anda yakin ?')">Delete</button>

                </form>
            </td>
            <td>

            </td>
        </tr>
</table>
<?= $this->endSection(); ?>