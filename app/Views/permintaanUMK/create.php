<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>


<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/jautocalc@1.3.1/dist/jautocalc.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.13.4/jquery.mask.min.js"></script>

<div class="container">
    <div class="row">
        <div class="col-8">
            <h2 class="my-3">Form Permintaan UMK</h2>

            <form action="/permintaanumk/save" method="post" enctype="multipart/form-data">
                <?= csrf_field(); ?>
                <div class="row mb-3">
                    <label for="no_erp" class="col-sm-2 col-form-label">NO ERP</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="no_erp" name="no_erp">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="tgl_umk" class="col-sm-2 col-form-label">Tanggal Permintaan</label>
                    <div class="col-sm-10">
                        <input type="datetime-local" class="form-control" id="tgl_umk" name="tgl_umk" value="">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="jumlah" class="col-sm-2 col-form-label">Jumlah</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="jumlah" name="jumlah" value="">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="dokumen" class="col-sm-2 col-form-label">Dokumen</label>
                    <div class="col-sm-10">
                        <input type="file" class="form-control" id="dokumen" name="dokumen" value="">
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Tambah</button>
            </form>
            <br><br>
            <a href="/permintaanumk">
                <--- Kembali</a>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>