<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>

<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mt-3 mb-4 text-gray-800">List PUMK</h1>

    <div class="row row-sm">
        <div class="col-xl-12">
            <div class="card mg-b-20">
                <div class="card-header pb-0">
                    <div class="d-flex justify-content-between">
                        <h4 class="card-title mg-b-0">List UMK</h4>
                        <div class="d-flex my-xl-auto right-content">
                            <div class="mb-3 mb-xl-0" style="margin-right: 10px;">
                                <a href="<?= base_url('/permintaanumk/tambah_umk'); ?>" class="btn btn-success"><i class="mdi mdi-plus"></i> Tambah</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <label for="no_erp" class="col-sm-2 col-form-label"><b>No ERP</b></label>
                    <div class="col-sm-10">
                        <?= $tbl_umk[0]->no_erp; ?>
                    </div>

                    <label for="batas_pumk" class="col-sm-2 col-form-label"><b>Batas PUMK</b></label>
                    <div class="col-sm-10">
                        <?= $tbl_umk[0]->batas_pumk; ?>
                    </div>

                    <label for="user" class="col-sm-2 col-form-label"><b>User</b></label>
                    <div class="col-sm-10">
                        <?= $tbl_umk[0]->user; ?>
                    </div>

                    <label for="jumlah_umk" class="col-sm-2 col-form-label"><b>Jumlah UMK</b></label>
                    <div class="col-sm-10">
                        <?= $tbl_umk[0]->jumlah_umk; ?>
                    </div>

                    <label for="sisa_umk" class="col-sm-2 col-form-label"><b>Sisa UMK</b></label>
                    <div class="col-sm-10">
                        <?= $tbl_umk[0]->sisa_umk; ?>
                    </div>

                    <div class="table-responsive">
                        <table id="example1" class="table key-buttons text-md-nowrap">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Tgl PUMK</th>
                                    <th scope="col">Jumlah PUMK</th>
                                    <th scope="col">Dok PUMK</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1 + (6 * ($currentPage - 1)); ?>
                                <?php foreach ($tbl_umk as $umk) : ?>
                                    <tr>
                                        <th scope="row"><?= $i++; ?></th>
                                        <td><?= $umk['tgl_pumk']; ?></td>
                                        <td><?= $umk['jumlah_umk']; ?></td>
                                        <td><?= $umk['dok_pumk']; ?></td>
                                        <td>
                                            <a href="/permintaanumk/edit_pumk/<?= $tbl_umk->id; ?>" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>

                    <?= $pager->links() ?>
                </div>
            </div>
        </div>
    </div>
</div>
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