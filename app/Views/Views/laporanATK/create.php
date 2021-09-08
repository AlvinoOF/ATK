<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>


<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/jautocalc@1.3.1/dist/jautocalc.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.13.4/jquery.mask.min.js"></script>

<div class="container">
    <div class="row">
        <div class="col-8">
            <h2 class="my-3">Buat Laporan Alat Tulis</h2>

            <form action="/laporanatk/save" method="post" enctype="multipart/form-data">
                <?= csrf_field(); ?>

                <div class="row mb-3">
                    <label for="tanggalLaporan" class="col-sm-2 col-form-label">Tanggal Laporan</label>
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
                <button type="submit" class="btn btn-success">Tambah</button>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>