<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>

<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Detail Jenis Alat Tulis</h1>

    <div class="row">
        <div class="col">
            <h2 class="mt-2">Detail Jenis Alat Tulis</h2>
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title"><?= $master_jenis['nama_jenis']; ?></h5>
                            <p class="card-text"><b>Jenis Barang: </b><?= $master_jenis['nama_jenis']; ?></p>

                            <a href="/masterjenis/edit/<?= $master_jenis['id']; ?>" class="btn btn-warning">Edit</a>

                            <form action="/masterjenis/<?= $master_jenis['id']; ?>" method="post" class="d-inline">
                                <?= csrf_field(); ?>
                                <input type="hidden" name="_method" value="DELETE">
                                <button type="submit" class="btn btn-danger" onclick="javascript: return confirm('Yakin?') ">Delete</button>
                            </form>
                            <br><br>
                            <a href="/masterjenis">Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<?= $this->endSection(); ?>