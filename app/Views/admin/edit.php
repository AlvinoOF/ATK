<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>

<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Edit Profile</h1>

    <form action="<?php echo base_url("admin/update/" . user()->id)  ?>" method="post" class="admin">
        <?= csrf_field() ?>

        <div class="form-group">
            <input type="email" class="form-control form-control-user <?php if (session('errors.email')) : ?>is-invalid<?php endif ?>" name="email" placeholder="Email Address">
            <small id="emailHelp" class="form-text text-muted"><?= lang('Auth.weNeverShare') ?></small>
        </div>

        <div class="form-group">
            <input type="text" class="form-control form-control-user" <?php if (session('errors.username')) : ?>is-invalid<?php endif ?>" name="username" placeholder="<?= lang('Auth.username') ?>" value="<?= old('username') ?>" name="username" placeholder="Username">
        </div>

</div>
<button type="submit" class="btn btn-primary btn-user btn-block"><?= lang('Auth.register') ?></button>
</form>
<?= $this->endSection(); ?>