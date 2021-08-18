<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>


<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/jautocalc@1.3.1/dist/jautocalc.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.13.4/jquery.mask.min.js"></script>

<div class="container">
    <div class="row">
        <div class="col-8">
            <h2 class="my-3">Form Tambah Pemesanan ATK</h2>

            <form action="/pemesananatk/save" method="post" enctype="multipart/form-data">
                <?= csrf_field(); ?>
                <div class="row mb-3">
                    <label for="id_user" class="col-sm-2 col-form-label">ID User</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="id_user" name="id_user" value="<?= user()->id ?>" disabled>
                    </div>
                </div>


                <div class="row mb-3">
                    <label for="tgl_pemesanan" class="col-sm-2 col-form-label">Tanggal Pemesanan</label>
                    <div class="col-sm-10">
                        <input type="datetime-local" class="form-control" id="tgl_pemesanan" name="tgl_pemesanan" value="">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="no_erp" class="col-sm-2 col-form-label">No. ERP</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="no_erp" name="no_erp" value="">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="status" class="col-sm-2 col-form-label">Status</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="status" name="status" value="">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Tambah</button>
            </form>
            <br><br>
            <a href="/pemesananatk">
                <--- Kembali</a>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>