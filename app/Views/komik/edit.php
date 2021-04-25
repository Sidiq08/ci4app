<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<h1>Halaman Ubah data</h1>

<form action="/komik/update/<?= $komik['id']; ?>" method="post" enctype="multipart/form-data">
    <?= csrf_field(); ?>
    <!-- untuk keamanan -->
    <input type="hidden" name="slug" value="<?= $komik['slug']; ?>">
    <input type="hidden" name="sampulLama" value="<?= $komik['sampul']; ?>">
    <div class="form-group">
        <label for="judul">Judul</label>
        <input type="text" class="form-control <?= ($validation->hasError('judul')) ? 'is-invalid' : ''; ?>" id="judul" name="judul" autofocus value="<?= (old('judul')) ? old('judul') : $komik['judul'] ?>">
        <div class="invalid-feedback">
            <?= $validation->getError('judul'); ?>
        </div>
    </div>
    <div class="form-group">
        <label for="penulis">penulis</label>
        <input type="text" class="form-control" id="penulis" name="penulis" value="<?= (old('penulis')) ? old('penulis') : $komik['penulis'] ?>">
    </div>
    <div class="form-group">
        <label for="penerbit">penerbit</label>
        <input type="text" class="form-control" id="penerbit" name="penerbit" value="<?= (old('penerbit')) ? old('penerbit') : $komik['penerbit'] ?>">
    </div>
    <div class="form-group">
        <label for="sampul">Sampul</label>
        <div class="col-sm-2">
            <img src="/img/<?= $komik['sampul']; ?>" class="img-thumbnail img-preview">
        </div>
        <div class="col-sm-8">
            <div class="custom-file">
                <label class="form-label" for="Sampul"><?= $komik['sampul']; ?></label>
                <input type="file" class="form-control <?= ($validation->hasError('sampul')) ? 'is-invalid' : ''; ?>" name="sampul" id="sampul" onchange="previewImg()">
                <div class="invalid-feedback">
                    <?= $validation->getError('sampul'); ?>
                </div>
            </div>
        </div>
    </div>

    <button type="submit" class="btn btn-primary">Ubah Data</button>
</form>
<?= $this->endSection(); ?>