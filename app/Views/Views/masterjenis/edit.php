<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>



<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Daftar Jenis ATK</h1>

    <form action="/masterjenis/update/<?= $master_jenis['id']; ?>" method="post" enctype="multipart/form-data">
        <?= csrf_field(); ?>
        <input type="hidden" name="id" value="<?= $master_jenis['id']; ?>">

        <div class="row mb-3">
            <label for="nama_jenis" class="col-sm-2 col-form-label">Nama Jenis</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="nama_jenis" name="nama_jenis" autofocus value="">
            </div>
        </div>

        <button type=" submit" class="btn btn-primary">Update</button>
    </form>

    <script src="main.js" charset='utf-8'></script>

    <?= $this->endSection(); ?>