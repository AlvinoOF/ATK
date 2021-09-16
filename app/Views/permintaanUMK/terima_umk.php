<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>

<div class="container-fluid">
    <h1 class="h3 mt-3 mb-4 text-gray-800">Edit Terima UTK</h1>

    <form action="/permintaanumk/update_terima_umk/<?= $tbl_umk[0]->id ?>" method="post" enctype="multipart/form-data">

        <?= csrf_field(); ?>
        <div class="row mb-3">
            <label for="item" class="col-sm-2 col-form-label">No ERP</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="no_erp" value=" <?= $tbl_umk[0]->no_erp; ?>" readonly>
            </div>
        </div>

        <div class="row mb-3">
            <label for="item" class="col-sm-2 col-form-label">Tanggal Pengajuan</label>
            <div class="col-sm-10">
                <input type="datetime-local" class="form-control" name="tgl_umk" value=" <?= $tbl_umk[0]->tgl_umk; ?>" readonly>
            </div>
        </div>

        <div class="row mb-3">
            <label for="item" class="col-sm-2 col-form-label">User</label>
            <div class="col-sm-10">
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="user" value=" <?= $tbl_umk[0]->user; ?>" readonly>
                </div>
            </div>
        </div>

        <div class="row mb-3">
            <label for="item" class="col-sm-2 col-form-label">Jumlah UMK</label>
            <div class="col-sm-10">
                <?= $tbl_umk[0]->jumlah_umk; ?>
            </div>
        </div>

        <div class="row mb-3">
            <label for="item" class="col-sm-2 col-form-label">Tanggal Terima</label>
            <div class="col-sm-10">
                <input type="datetime-local" class="form-control" name="tgl_umk">
            </div>
        </div>

        <div class="row mb-3">
            <label for="item" class="col-sm-2 col-form-label">Batas PUMK</label>
            <div class="col-sm-10">
                <input type="datetime-local" class="form-control" name="batas_pumk">
            </div>
        </div>

        <div class="row mb-3">
            <label for="item" class="col-sm-2 col-form-label">Jumlah Terima UMK</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" value="<?= $tbl_umk[0]->jumlah_umk; ?>" name="jumlah_umk">
            </div>
        </div>

        <div class="row mb-3">
            <label for="item" class="col-sm-2 col-form-label">Status</label>
            <div class="col-sm-10">
                <select name="status" class="form-control">
                    <option></option>
                    <option value="diterima">Diterima</option>
                </select>
            </div>
        </div>

        <button type=" submit" class="btn btn-primary">Simpan</button>
    </form>

    <script src="main.js" charset='utf-8'></script>

    <?= $this->endSection(); ?>