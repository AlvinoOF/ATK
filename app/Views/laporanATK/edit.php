<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>



<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Edit Laporan ATK</h1>

    <form action="/laporanatk/update/<?= $laporan_atk['id']; ?>" method="post" enctype="multipart/form-data">
        <?= csrf_field(); ?>
        <input type="hidden" name="id" value="<?= $laporan_atk['id']; ?>">

        <div class="row mb-3">
            <label for="laporanTanggal" class="col-sm-2 col-form-label">Tanggal Laporan</label>
            <div class="col-sm-10">
                <input type="datetime-local" class="form-control" id="tanggalLaporan" name="tanggalLaporan">
            </div>
        </div>

        <div class="row mb-3">
            <label for="perihal" class="col-sm-2 col-form-label">Perihal</label>
            <div class="col-sm-10">
                <textarea class="form-control" name="perihal"></textarea>
            </div>
        </div>

        <button type=" submit" class="btn btn-primary">Update</button>
    </form>

    <script src="main.js" charset='utf-8'></script>

    <?= $this->endSection(); ?>