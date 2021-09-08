<?= $this->extend('auth/templates/index'); ?>

<?= $this->section('content'); ?>
<div class="limiter">
	<div class="container-login100">
		<div class="wrap-login100">
			<form class="login100-form validate-form" method="POST" action="<?= route_to('login') ?>">
				<?= csrf_field() ?>
				<div class="login100-form-social flex-c-m">
					<a href="#" class="flex-c-m m-r-5">
						<img src="<?= base_url(); ?>/assets/logo/gaps.png" style="max-height: 100px;">
					</a>
				</div>
				<br><br>
				<span class="login100-form-title p-b-43">
					<?= lang('Auth.loginTitle') ?>
				</span>
				<?= view('Myth\Auth\Views\_message_block') ?>

				<?php if ($config->validFields === ['email']) : ?>
					<div class="wrap-input100 validate-input" data-validate="Masukan username anda">
						<input class="input100" type="email" name="login">
						<span class="focus-input100"></span>
						<span class="label-input100"><?= lang('Auth.email') ?></span>
						<div class="invalid-feedback">
							<?= session('errors.login') ?>
						</div>
					</div>
				<?php else : ?>
					<div class="wrap-input100 validate-input" data-validate="Masukan username anda">
						<input class="input100" type="text" name="login">
						<span class="focus-input100"></span>
						<span class="label-input100"><?= lang('Auth.emailOrUsername') ?></span>
						<div class="invalid-feedback">
							<?= session('errors.login') ?>
						</div>
					</div>
				<?php endif; ?>

				<div class="wrap-input100 validate-input <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" data-validate="Masukan password anda">
					<input class="input100" type="password" name="password">
					<span class="focus-input100"></span>
					<span class="label-input100"><?= lang('Auth.password') ?></span>
					<div class="invalid-feedback">
						<?= session('errors.password') ?>
					</div>
				</div>
				<?php if ($config->allowRemembering) : ?>
					<div class="flex-sb-m w-full p-t-3 p-b-32">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember" <?php if (old('remember')) : ?> checked <?php endif ?>>
							<label class="label-checkbox100" for="ckb1">
								Remember me
							</label>
						</div>
					</div>
				<?php endif; ?>

				<div class="container-login100-form-btn">
					<button class="login100-form-btn">
						<?= lang('Auth.loginAction') ?>
					</button>
				</div>

				<div class="text-center p-t-46 p-b-20">
					<span class="txt2">
					</span>
				</div>
				<div class="login100-form-social flex-c-m">
					<a href="#" class="flex-c-m m-r-5">
						<img src="<?= base_url(); ?>/assets/logo/sucofindo.png" style="max-height: 75px;">
					</a>
				</div>
			</form>
			<?php if ($config->activeResetter) : ?>
				<div class="text-center">
					<a href="<?= route_to('forgot') ?>"><?= lang('Auth.forgotYourPassword') ?></a>
				</div>
			<?php endif; ?>

			<?php if ($config->allowRegistration) : ?>
				<div class="text-center">
					<a href="<?= route_to('register') ?>"><?= lang('Auth.needAnAccount') ?></a>
				</div>
			<?php endif; ?>

			<div class="login100-more" style="background-image: url('<?= base_url(); ?>/assets/images/2948496.jpg');">
			</div>
		</div>
	</div>
</div>
<?= $this->endSection(); ?>