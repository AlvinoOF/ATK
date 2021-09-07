<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>

<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Laporan ATK</h1>

    <div class="row">
        <div class="col-lg-8">
            <a href="/laporanatk/create" class="btn btn-primary mt-2">Tambah Laporan</a>
            <div class="table-responsive-lg">
                <table class="table mt-3">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Tanggal Laporan</th>
                            <th scope="col">Perihal</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1 + (6 * ($currentPage - 1)); ?>
                        <?php foreach ($laporan_atk as $l) : ?>
                            <tr>
                                <th scope="row"><?= $i++; ?></th>
                                <td><?= $l['tanggalLaporan']; ?></td>
                                <td><?= $l['perihal']; ?></td>
                                <td class="w-25">
                                    <a href="/laporanatk/edit/<?= $l['id']; ?>" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                                    <?php echo anchor('laporanatk/delete/' . $l['id'], '<div class="btn btn-danger btn-sm"><i class = "fa fa-trash"></i></div>') ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <?= $pager->links('laporan_atk', 'laporan_atk_pagination'); ?>
        </div>
    </div>

</div>
<?= $this->endSection(); ?>