<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>


<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/jautocalc@1.3.1/dist/jautocalc.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.13.4/jquery.mask.min.js"></script>

<div class="container">
    <div class="row">
        <div class="col-8">
            <h2 class="my-3">Form Tambah Penerimaan ATK</h2>

            <form action="/penerimaanatk/save" method="post" enctype="multipart/form-data">
                <?= csrf_field(); ?>
                <div class="row mb-3">
                    <label for="id_pesan" class="col-sm-2 col-form-label">ID Pesan</label>
                    <div class="col-sm-10">
                        <Select class="form-control" id="id_pesan" name="id_pesan">
                            <option value=""></option>
                        </Select>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="id_det_pemesanan" class="col-sm-2 col-form-label">ID Detail Pemesanan</label>
                    <div class="col-sm-10">
                        <input type="datetime-local" class="form-control" id="id_det_pemesanan" name="id_det_pemesanan" value="">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Tambah</button>
            </form>
            <br><br>
            <a href="/penerimaanatk">
                <--- Kembali</a>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>