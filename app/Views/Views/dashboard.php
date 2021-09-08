<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>
<div class="breadcrumb-header justify-content-between">
	<div class="my-auto">
		<div class="d-flex">
			<h4 class="content-title mb-0 my-auto">Dashboard</h4>
		</div>
	</div>
</div>

<div class="row row-sm">
	<div class="col-xl-4 col-lg-4 col-md-4 col-xm-12">
		<div class="card overflow-hidden sales-card bg-danger-gradient">
			<div class="pl-3 pt-3 pr-3 pb-2 pt-0">
				<div class="">
					<h6 class="mb-3 tx-12 text-white">Stok ATK</h6>
				</div>
				<div class="pb-0 mt-0">
					<div class="d-flex">
						<div class="">
							<h4 class="tx-20 font-weight-bold mb-1 text-white">35</h4>
						</div>
						<span class="float-right my-auto ml-auto">
						</span>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-xl-4 col-lg-4 col-md-4 col-xm-12">
		<div class="card overflow-hidden sales-card bg-warning-gradient">
			<div class="pl-3 pt-3 pr-3 pb-2 pt-0">
				<div class="">
					<h6 class="mb-3 tx-12 text-white">ATK yang diterima</h6>
				</div>
				<div class="pb-0 mt-0">
					<div class="d-flex">
						<div class="">
							<h4 class="tx-20 font-weight-bold mb-1 text-white">10</h4>
						</div>
						<span class="float-right my-auto ml-auto">
						</span>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-xl-4 col-lg-4 col-md-4 col-xm-12">
		<div class="card overflow-hidden sales-card bg-success-gradient">
			<div class="pl-3 pt-3 pr-3 pb-2 pt-0">
				<div class="">
					<h6 class="mb-3 tx-12 text-white">ATK yang dipesan</h6>
				</div>
				<div class="pb-0 mt-0">
					<div class="d-flex">
						<div class="">
							<h4 class="tx-20 font-weight-bold mb-1 text-white">30</h4>
						</div>
						<span class="float-right my-auto ml-auto">
						</span>
					</div>
				</div>
			</div>
		</div>
	</div>

</div>

<div class="row">

</div>

<!--Internal  Chart.bundle js -->
<script src="<?= base_url(); ?>/assets/main/plugins/chart.js/Chart.bundle.min.js"></script>

<!--Internal Sparkline js -->
<script src="<?= base_url(); ?>/assets/main/plugins/jquery-sparkline/jquery.sparkline.min.js"></script>
<script src="<?= base_url(); ?>/assets/main/plugins/raphael/raphael.min.js"></script>

<!--Internal  Flot js-->
<script src="<?= base_url(); ?>/assets/main/plugins/jquery.flot/jquery.flot.js"></script>
<script src="<?= base_url(); ?>/assets/main/plugins/jquery.flot/jquery.flot.pie.js"></script>
<script src="<?= base_url(); ?>/assets/main/plugins/jquery.flot/jquery.flot.resize.js"></script>
<script src="<?= base_url(); ?>/assets/main/plugins/jquery.flot/jquery.flot.categories.js"></script>
<script src="<?= base_url(); ?>/assets/main/js/dashboard.sampledata.js"></script>
<script src="<?= base_url(); ?>/assets/main/js/chart.flot.sampledata.js"></script>

<!--Internal Apexchart js-->
<script src="<?= base_url(); ?>/assets/main/js/apexcharts.js"></script>

<script src="<?= base_url(); ?>/assets/main/js/index.js"></script>
<?= $this->endSection(); ?>