<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<h1>Halaman Tambah data</h1>

<form action="/komik/save" method="post" enctype="multipart/form-data">
    <?= csrf_field(); ?>
    <!-- untuk keamanan -->
    <div class="form-group">
        <label for="judul">Judul</label>
        <input type="text" class="form-control <?= ($validation->hasError('judul')) ? 'is-invalid' : ''; ?>" id="judul" name="judul" autofocus value="<?= old('judul'); ?>">
        <div class="invalid-feedback">
            <?= $validation->getError('judul'); ?>
        </div>
    </div>
    <div class="form-group">
        <label for="penulis">penulis</label>
        <input type="text" class="form-control" id="penulis" name="penulis" value="<?= old('penulis'); ?>">
    </div>
    <div class="form-group">
        <label for="penerbit">penerbit</label>
        <input type="text" class="form-control" id="penerbit" name="penerbit" value="<?= old('penerbit'); ?>">
    </div>
    <div class="form-group">
        <label for="sampul">Sampul</label>
        <div class="col-sm-2">
            <img src="/img/default.png" class="img-thumbnail img-preview">
        </div>
        <div class="col-sm-8">
            <div class="custom-file">
                <label class="form-label" for="Sampul">Pilih Gambar</label>
                <input type="file" class="form-control <?= ($validation->hasError('sampul')) ? 'is-invalid' : ''; ?>" name="sampul" id="sampul" onchange="previewImg()">
                <div class="invalid-feedback">
                    <?= $validation->getError('sampul'); ?>
                </div>
            </div>
        </div>
    </div>

    <button type="submit" class="btn btn-primary">Tambah Data</button>
</form>
<?= $this->endSection(); ?>