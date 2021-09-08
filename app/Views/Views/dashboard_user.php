<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>
                    <div class="breadcrumb-header justify-content-between">
						<div class="my-auto">
							<div class="d-flex">
								<h4 class="content-title mb-0 my-auto">Dashboard User</h4>
							</div>
						</div>
					</div>

                    <div class="row row-sm">
						<div class="col-xl-4 col-lg-4 col-md-4 col-xm-12">
							<div class="card overflow-hidden sales-card bg-danger-gradient">
								<div class="pl-3 pt-3 pr-3 pb-2 pt-0">
									<div class="">
										<h6 class="mb-3 tx-12 text-white">Total Security Incident</h6>
									</div>
									<div class="pb-0 mt-0">
										<div class="d-flex">
											<div class="">
												<h4 class="tx-20 font-weight-bold mb-1 text-white">10</h4>
												<p class="mb-0 tx-12 text-white op-7">Compared to last week</p>
											</div>
											<span class="float-right my-auto ml-auto">
												<i class="fas fa-arrow-circle-up text-white"></i>
												<span class="text-white op-7"> +5</span>
											</span>
										</div>
									</div>
								</div>
								<span id="compositeline" class="pt-1">5,9,5,6,4,12,18,14,10,15,12,5,8,5,12,5,12,10,16,12</span>
							</div>
						</div>
						<div class="col-xl-4 col-lg-4 col-md-4 col-xm-12">
							<div class="card overflow-hidden sales-card bg-warning-gradient">
								<div class="pl-3 pt-3 pr-3 pb-2 pt-0">
									<div class="">
										<h6 class="mb-3 tx-12 text-white">Waiting To Be Solved</h6>
									</div>
									<div class="pb-0 mt-0">
										<div class="d-flex">
											<div class="">
												<h4 class="tx-20 font-weight-bold mb-1 text-white">10</h4>
												<p class="mb-0 tx-12 text-white op-7">Compared to last week</p>
											</div>
											<span class="float-right my-auto ml-auto">
												<i class="fas fa-arrow-circle-down text-white"></i>
												<span class="text-white op-7"> -2</span>
											</span>
										</div>
									</div>
								</div>
								<span id="compositeline2" class="pt-1">3,2,4,6,12,14,8,7,14,16,12,7,8,4,3,2,2,5,6,7</span>
							</div>
						</div>
						<div class="col-xl-4 col-lg-4 col-md-4 col-xm-12">
							<div class="card overflow-hidden sales-card bg-success-gradient">
								<div class="pl-3 pt-3 pr-3 pb-2 pt-0">
									<div class="">
										<h6 class="mb-3 tx-12 text-white">Solved</h6>
									</div>
									<div class="pb-0 mt-0">
										<div class="d-flex">
											<div class="">
												<h4 class="tx-20 font-weight-bold mb-1 text-white">10</h4>
												<p class="mb-0 tx-12 text-white op-7">Compared to last week</p>
											</div>
											<span class="float-right my-auto ml-auto">
												<i class="fas fa-arrow-circle-up text-white"></i>
												<span class="text-white op-7"> +2</span>
											</span>
										</div>
									</div>
								</div>
								<span id="compositeline3" class="pt-1">5,10,5,20,22,12,15,18,20,15,8,12,22,5,10,12,22,15,16,10</span>
							</div>
						</div>
						
					</div>

                    <div class="row">

					</div>

                    <!--Internal  Chart.bundle js -->
		            <script src="<?=base_url();?>/assets/main/plugins/chart.js/Chart.bundle.min.js"></script>

                    <!--Internal Sparkline js -->
		            <script src="<?=base_url();?>/assets/main/plugins/jquery-sparkline/jquery.sparkline.min.js"></script>
                    <script src="<?=base_url();?>/assets/main/plugins/raphael/raphael.min.js"></script>
                    
                    <!--Internal  Flot js-->
                    <script src="<?=base_url();?>/assets/main/plugins/jquery.flot/jquery.flot.js"></script>
                    <script src="<?=base_url();?>/assets/main/plugins/jquery.flot/jquery.flot.pie.js"></script>
                    <script src="<?=base_url();?>/assets/main/plugins/jquery.flot/jquery.flot.resize.js"></script>
                    <script src="<?=base_url();?>/assets/main/plugins/jquery.flot/jquery.flot.categories.js"></script>
                    <script src="<?=base_url();?>/assets/main/js/dashboard.sampledata.js"></script>
                    <script src="<?=base_url();?>/assets/main/js/chart.flot.sampledata.js"></script>
                    
                    <!--Internal Apexchart js-->
		            <script src="<?=base_url();?>/assets/main/js/apexcharts.js"></script>

                    <script src="<?=base_url();?>/assets/main/js/index.js"></script>
<?= $this->endSection(); ?>