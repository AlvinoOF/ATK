<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>

<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Daftar ATK</h1>

    <form action="/masterbarang/update/<?= $master_barang['id']; ?>" method="post" enctype="multipart/form-data">
        <?= csrf_field(); ?>

        <div class="row mb-3">
            <label for="item" class="col-sm-2 col-form-label">Nama Barang</label>
            <div class="col-sm-10">
                <input type="text" class="form-control <?= ($validation->hasError('nama_barang')) ? 'is-invalid' : ''; ?>" id="nama_barang" name="nama_barang" autofocus value="<?= (old('nama_barang')) ? old('nama_barang') : $master_barang['nama_barang'] ?>">
                <div class="invalid-feedback">
                    <?= $validation->getError('nama_barang'); ?>
                </div>
            </div>
        </div>

        <div class="row mb-3">
            <label for="stok_awal" class="col-sm-2 col-form-label">Stok Awal</label>
            <div class="col-sm-10">
                <input type="text" class="input form-control" id="stok_awal" name="stok_awal" value="<?= (old('stok_awal')) ? old('stok_awal') : $master_barang['stok_awal'] ?>">
            </div>
        </div>

        <button type=" submit" class="btn btn-primary">Update</button>
    </form>

    <script src="main.js" charset='utf-8'></script>

    <?= $this->endSection(); ?>