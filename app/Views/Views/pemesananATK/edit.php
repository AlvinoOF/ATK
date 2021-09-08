?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>

<div class="container-fluid">
    <h1 class="h3 mt-3 mb-4 text-gray-800">Edit Pemesanan ATK</h1>

    <form action="/pemesananatk/update/<?= $testgetdata->id_det_pemesanan; ?>" method="post" enctype="multipart/form-data">
        <?= csrf_field(); ?>
        <input type="hidden" id="id_atk" placeholder="id atk" value="<?= $testgetdata->id_atk;  ?>" name="id_atk">
        <input type="hidden" id="id_pemesanan" placeholder="id pemesanan" value="<?= $testgetdata->id_pemesanan;  ?>" name="id_pemesanan">
        <div class="row mb-3">
            <label for="item" class="col-sm-2 col-form-label">Jumlah</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" value="<?= $testgetdata->jumlah; ?>" name="jumlah">
            </div>
        </div>

        <div class="row mb-3">
            <label for="item" class="col-sm-2 col-form-label">Harga</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" value="<?= $testgetdata->harga; ?>" name="harga">
            </div>
        </div>

        <button type=" submit" class="btn btn-primary">Update</button>
    </form>

    <script src="main.js" charset='utf-8'></script>

    <?= $this->endSection(); ?>

    <!-- Internal Data tables -->
    <script src="<?= base_url('assets/main/'); ?>plugins/datatable/js/jquery.dataTables.min.js"></script>
    <script src="<?= base_url('assets/main/'); ?>plugins/datatable/js/dataTables.dataTables.min.js"></script>
    <script src="<?= base_url('assets/main/'); ?>plugins/datatable/js/dataTables.responsive.min.js"></script>
    <script src="<?= base_url('assets/main/'); ?>plugins/datatable/js/responsive.dataTables.min.js"></script>
    <script src="<?= base_url('assets/main/'); ?>plugins/datatable/js/jquery.dataTables.js"></script>
    <script src="<?= base_url('assets/main/'); ?>plugins/datatable/js/dataTables.bootstrap4.js"></script>
    <script src="<?= base_url('assets/main/'); ?>plugins/datatable/js/dataTables.buttons.min.js"></script>
    <script src="<?= base_url('assets/main/'); ?>plugins/datatable/js/buttons.bootstrap4.min.js"></script>
    <script src="<?= base_url('assets/main/'); ?>plugins/datatable/js/jszip.min.js"></script>
    <script src="<?= base_url('assets/main/'); ?>plugins/datatable/js/pdfmake.min.js"></script>
    <script src="<?= base_url('assets/main/'); ?>plugins/datatable/js/vfs_fonts.js"></script>
    <script src="<?= base_url('assets/main/'); ?>plugins/datatable/js/buttons.html5.min.js"></script>
    <script src="<?= base_url('assets/main/'); ?>plugins/datatable/js/buttons.print.min.js"></script>
    <script src="<?= base_url('assets/main/'); ?>plugins/datatable/js/buttons.colVis.min.js"></script>
    <script src="<?= base_url('assets/main/'); ?>plugins/datatable/js/dataTables.responsive.min.js"></script>
    <script src="<?= base_url('assets/main/'); ?>plugins/datatable/js/responsive.bootstrap4.min.js"></script>

    <script src="<?= base_url('assets/main/'); ?>js/table-data.js"></script>