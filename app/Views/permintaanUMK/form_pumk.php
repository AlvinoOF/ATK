<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>

<div class="container-fluid">
    <h1 class="h3 mt-3 mb-4 text-gray-800">Tambah Permintaan UMK</h1>

    <form action="/permintaanumk/pumk/<?= $permintaanumk->id ?>" method="post" enctype="multipart/form-data">
        <?= csrf_field(); ?>
        <div class="row mb-3">
            <label for="no_erp" class="col-sm-2 col-form-label"><b>No ERP</b></label>
            <div class="col-sm-10">
                <?= $tbl_umk->no_erp; ?>
            </div>

            <label for="batas_pumk" class="col-sm-2 col-form-label"><b>Batas PUMK</b></label>
            <div class="col-sm-10">
                <?= $tbl_umk->batas_pumk; ?>
            </div>

            <label for="user" class="col-sm-2 col-form-label"><b>User</b></label>
            <div class="col-sm-10">
                <?= $tbl_umk->user; ?>
            </div>

            <label for="jumlah_umk" class="col-sm-2 col-form-label"><b>Jumlah UMK</b></label>
            <div class="col-sm-10">
                <?= $tbl_umk->jumlah; ?>
            </div>

            <label for="sisa_umk" class="col-sm-2 col-form-label"><b>Sisa UMK</b></label>
            <div class="col-sm-10">
                <!-- Nanti bikin data sisa_umk -->
            </div>

            <label for="tgl_pumk" class="col-sm-2 col-form-label"><b>Tanggal PUMK</b></label>
            <div class="col-sm-10">
                <input type="datetime" class="form-control" value="" name="tgl_pumk">
            </div>

            <label for="jumlah_pumk" class="col-sm-2 col-form-label">Jumlah PUMK</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" value="" name="jumlah_pumk">
            </div>

            <label for="dokumen_pumk" class="col-sm-2 col-form-label">Dokumen Pendukung</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" value="" name="dokumen_pumk">
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
        </div>

        <button type=" submit" class="btn btn-primary">Update</button>
    </form>

    <script src="main.js" charset='utf-8'></script>

    <?= $this->endSection(); ?>