<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>

<div class="container-fluid">
    <h1 class="h3 mt-3 mb-4 text-gray-800">Edit Terima UTK</h1>

    <form action="/permintaanumk/terima_umk/<?= $permintaanumk->id ?>" method="post" enctype="multipart/form-data">
        <?= csrf_field(); ?>

        <div class="row mb-3">
            <label for="item" class="col-sm-2 col-form-label">No ERP</label>
            <div class="col-sm-10">
                <?= $tbl_umk->no_erp; ?>
            </div>
        </div>

        <div class="row mb-3">
            <label for="item" class="col-sm-2 col-form-label">Tanggal Pengajuan</label>
            <div class="col-sm-10">
                <?= $tbl_umk->tgl_umk; ?>
            </div>
        </div>

        <div class="row mb-3">
            <label for="item" class="col-sm-2 col-form-label">User</label>
            <div class="col-sm-10">
                <?= $tbl_umk->user; ?>
            </div>
        </div>

        <div class="row mb-3">
            <label for="item" class="col-sm-2 col-form-label">Jumlah UMK</label>
            <div class="col-sm-10">
                <?= $tbl_umk->jumlah_umk; ?>
            </div>
        </div>

        <div class="row mb-3">
            <label for="item" class="col-sm-2 col-form-label">Tanggal Terima</label>
            <div class="col-sm-10">
                <input type="datetime" class="form-control" value="<?= $permintaanumk->tgl_terima; ?>" name="tgl_terima">
            </div>
        </div>

        <div class="row mb-3">
            <label for="item" class="col-sm-2 col-form-label">Batas PUMK</label>
            <div class="col-sm-10">
                <input type="datetime" class="form-control" value="<?= $permintaanatk->batas_pumk; ?>" name="batas_pumk">
            </div>
        </div>

        <div class="row mb-3">
            <label for="item" class="col-sm-2 col-form-label">Jumlah Terima UMK</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" value="<?= $permintaanatk->jumlah_terima_umk; ?>" name="jumlah_terima_umk">
            </div>
        </div>

        <button type=" submit" class="btn btn-primary">Simpan</button>
    </form>

    <script src="main.js" charset='utf-8'></script>

    <?= $this->endSection(); ?>