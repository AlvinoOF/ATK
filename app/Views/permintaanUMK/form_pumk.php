<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>

<div class="container">
    <div class="row">
        <div class="col-8">
            <h1 class="h3 mt-3 mb-4 text-gray-800">Form PUMK</h1>

            <form action="/permintaanumk/update_form_pumk/<?= $permintaanumk->id ?>" method="post" enctype="multipart/form-data">
                <?= csrf_field(); ?>
                <div class="row mb-3">
                    <label for="item" class="col-sm-2 col-form-label">No ERP</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="no_erp" value=" <?= $tbl_umk[0]->no_erp; ?>" readonly>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="batas_pumk" class="col-sm-2 col-form-label"><b>Batas PUMK</b></label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="batas_pumk" value=" <?= $tbl_umk[0]->batas_pumk; ?>" readonly>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="user" class="col-sm-2 col-form-label"><b>User</b></label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="user" value=" <?= $tbl_umk[0]->user; ?>" readonly>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="jumlah_umk" class="col-sm-2 col-form-label"><b>Jumlah UMK</b></label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="jumlah_umk" value=" <?= $tbl_umk[0]->jumlah_umk; ?>" readonly>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="sisa_umk" class="col-sm-2 col-form-label"><b>Sisa UMK</b></label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="sisa" value=" <?= $tbl_umk[0]->sisa; ?>" readonly>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="tgl_pumk" class="col-sm-2 col-form-label"><b>Tanggal PUMK</b></label>
                    <div class="col-sm-10">
                        <input type="datetime-local" class="form-control" value="" name="tgl_pumk">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="jumlah_pumk" class="col-sm-2 col-form-label">Jumlah PUMK</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" value="" name="jumlah_pumk">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="dokumen" class="col-sm-2 col-form-label">Dokumen Pendukung</label>
                    <div class="col-sm-10">
                        <input type="file" class="form-control" value="" name="dokumen">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="item" class="col-sm-2 col-form-label">Status</label>
                    <div class="col-sm-10">
                        <select name="status" class="form-control">
                            <option></option>
                            <option value="On Going">On Going</option>
                        </select>
                    </div>
                </div>

                <button type=" submit" class="btn btn-primary">Update</button>
            </form>

            <br><br>
            <a href="/permintaanumk">
                <--- Kembali</a>

                    <script src="main.js" charset='utf-8'></script>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>